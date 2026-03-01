<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class TrackController extends Controller
{
    /**
     * Get all tracks
     */
    public function index()
    {
        try {
            $tracks = Track::loadFromStorage();
            
            return response()->json([
                'success' => true,
                'data' => $tracks->values()->toArray()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to load tracks',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get a specific track by ID
     */
    public function show($id)
    {
        try {
            $track = Track::findByIdFromStorage($id);
            
            if (!$track) {
                return response()->json([
                    'success' => false,
                    'message' => 'Track not found'
                ], 404);
            }

            return response()->json([
                'success' => true,
                'data' => $track
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to load track',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Stream audio file for a track
     */
    public function audio($trackId, $filename)
    {
        $filePath = Track::getAudioFilePath($trackId, $filename);
        
        if (!Storage::exists($filePath)) {
            return response()->json([
                'success' => false,
                'message' => 'Audio file not found'
            ], 404);
        }

        $file = Storage::path($filePath);
        $mimeType = $this->getMimeType($filename);

        return new StreamedResponse(function () use ($file) {
            $stream = fopen($file, 'rb');
            fpassthru($stream);
            fclose($stream);
        }, 200, [
            'Content-Type' => $mimeType,
            'Content-Length' => Storage::size($filePath),
            'Accept-Ranges' => 'bytes',
            'Cache-Control' => 'public, max-age=3600',
        ]);
    }

    /**
     * Get track metadata only (without audio file URLs)
     */
    public function metadata($id)
    {
        try {
            $track = Track::findByIdFromStorage($id);
            
            if (!$track) {
                return response()->json([
                    'success' => false,
                    'message' => 'Track not found'
                ], 404);
            }

            // Remove file URLs from layers for metadata-only response
            if (isset($track['layers'])) {
                foreach ($track['layers'] as &$layer) {
                    unset($layer['file_url']);
                }
            }

            return response()->json([
                'success' => true,
                'data' => $track
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to load track metadata',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get the MIME type for an audio file
     */
    private function getMimeType($filename)
    {
        $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        
        switch ($extension) {
            case 'mp3':
                return 'audio/mpeg';
            case 'flac':
                return 'audio/flac';
            case 'wav':
                return 'audio/wav';
            case 'ogg':
                return 'audio/ogg';
            case 'm4a':
                return 'audio/mp4';
            case 'aac':
                return 'audio/aac';
            default:
                return 'application/octet-stream';
        }
    }

    /**
     * Health check endpoint for the tracks API
     */
    public function health()
    {
        try {
            $trackCount = count(Storage::directories('tracks'));
            
            return response()->json([
                'success' => true,
                'message' => 'Tracks API is healthy',
                'data' => [
                    'total_tracks' => $trackCount,
                    'storage_available' => true
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Tracks API health check failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
