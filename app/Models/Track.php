<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Track extends Model
{
    protected $fillable = [
        'id',
        'name',
        'artist',
        'description',
        'duration',
        'free',
        'keyframe_offset',
        'layers',
        'keyframes',
        'cues',
        'cover_image'
    ];

    protected $casts = [
        'layers' => 'array',
        'keyframes' => 'array',
        'cues' => 'array',
        'free' => 'boolean',
        'duration' => 'float',
        'keyframe_offset' => 'float'
    ];

    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * Load all tracks from storage
     */
    public static function loadFromStorage()
    {
        $tracks = [];
        $tracksPath = storage_path('app/tracks');
        
        if (!is_dir($tracksPath)) {
            return collect([]);
        }
        
        $trackDirectories = array_filter(scandir($tracksPath), function($item) use ($tracksPath) {
            return $item !== '.' && $item !== '..' && is_dir($tracksPath . '/' . $item);
        });

        foreach ($trackDirectories as $dirName) {
            $trackJsonPath = $tracksPath . '/' . $dirName . '/track.json';
            
            if (file_exists($trackJsonPath)) {
                try {
                    $trackData = json_decode(file_get_contents($trackJsonPath), true);
                    
                    if ($trackData) {
                        // Convert kebab-case to snake_case for Laravel conventions
                        $trackData['keyframe_offset'] = $trackData['keyframe-offset'] ?? null;
                        unset($trackData['keyframe-offset']);
                        
                        // Process layers to include file URLs
                        if (isset($trackData['layers'])) {
                            foreach ($trackData['layers'] as &$layer) {
                                // Convert kebab-case keys
                                $layer['start_at'] = $layer['start-at'] ?? null;
                                $layer['fade_in'] = $layer['fade-in'] ?? null;
                                $layer['fade_out'] = $layer['fade-out'] ?? null;
                                $layer['default_enabled'] = $layer['default-enabled'] ?? null;
                                $layer['is_main'] = $layer['main'] ?? null;
                                
                                // Remove kebab-case keys
                                unset($layer['start-at'], $layer['fade-in'], $layer['fade-out'], $layer['default-enabled'], $layer['main']);
                                
                                // Add full file URL
                                $layer['file_url'] = url('/api/tracks/' . $dirName . '/audio/' . $layer['file']);
                            }
                        }
                        
                        $tracks[] = $trackData;
                    }
                } catch (\Exception $e) {
                    \Log::error("Failed to load track from {$trackJsonPath}: " . $e->getMessage());
                }
            }
        }

        return collect($tracks);
    }

    /**
     * Get track by ID from storage
     */
    public static function findByIdFromStorage($id)
    {
        $trackPath = "tracks/{$id}/track.json";
        
        if (!Storage::exists($trackPath)) {
            return null;
        }

        try {
            $trackData = json_decode(Storage::get($trackPath), true);
            
            if ($trackData) {
                // Convert kebab-case to snake_case
                $trackData['keyframe_offset'] = $trackData['keyframe-offset'] ?? null;
                unset($trackData['keyframe-offset']);
                
                // Process layers
                if (isset($trackData['layers'])) {
                    foreach ($trackData['layers'] as &$layer) {
                        $layer['start_at'] = $layer['start-at'] ?? null;
                        $layer['fade_in'] = $layer['fade-in'] ?? null;
                        $layer['fade_out'] = $layer['fade-out'] ?? null;
                        $layer['default_enabled'] = $layer['default-enabled'] ?? null;
                        $layer['is_main'] = $layer['main'] ?? null;
                        
                        unset($layer['start-at'], $layer['fade-in'], $layer['fade-out'], $layer['default-enabled'], $layer['main']);
                        
                        $layer['file_url'] = url('/api/tracks/' . $id . '/audio/' . $layer['file']);
                    }
                }
                
                return $trackData;
            }
        } catch (\Exception $e) {
            \Log::error("Failed to load track {$id}: " . $e->getMessage());
        }

        return null;
    }

    /**
     * Get audio file path for a track
     */
    public static function getAudioFilePath($trackId, $filename)
    {
        return "tracks/{$trackId}/{$filename}";
    }
}
