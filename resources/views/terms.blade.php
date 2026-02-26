@extends('layouts.app')

@section('title', 'Terms of Use - AuraLumens')
@section('description', 'AuraLumens Terms of Use - Legal terms and conditions for using our app.')

@push('styles')
<style>
    .legal-content {
        max-width: 800px;
        margin: 0 auto;
        padding: 120px 20px 80px;
        color: #fff;
        line-height: 1.8;
    }
    .legal-content h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
        text-align: center;
    }
    .legal-content h2 {
        font-size: 1.8rem;
        margin: 2rem 0 1rem;
        color: #8b5cf6;
    }
    .legal-content h3 {
        font-size: 1.3rem;
        margin: 1.5rem 0 0.5rem;
        color: #ccc;
    }
    .legal-content p {
        margin-bottom: 1rem;
        color: #ccc;
    }
    .legal-content ul {
        margin: 1rem 0;
        padding-left: 2rem;
        color: #ccc;
    }
    .legal-content li {
        margin-bottom: 0.5rem;
    }
    .effective-date {
        text-align: center;
        color: #666;
        margin-bottom: 3rem;
    }
    .back-link {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        color: #8b5cf6;
        text-decoration: none;
        margin-bottom: 2rem;
        transition: color 0.3s ease;
    }
    .back-link:hover {
        color: #a78bfa;
    }
    .highlight {
        background: rgba(139, 92, 246, 0.2);
        padding: 1rem;
        border-radius: 8px;
        margin: 1rem 0;
        border-left: 4px solid #8b5cf6;
    }
</style>
@endpush

@section('content')
<div class="legal-content">
    <a href="{{ route('home') }}" class="back-link">
        <i class="fas fa-arrow-left"></i>
        Back to Home
    </a>

    <h1>Terms of Use</h1>
    <div class="effective-date">Effective Date: February 25, 2026</div>

    <div class="highlight">
        <p><strong>Important:</strong> Please read these Terms of Use carefully before using AuraLumens. By downloading, installing, or using the App, you agree to be bound by these terms.</p>
    </div>

    <h2>1. Acceptance of Terms</h2>
    <p>These Terms of Use ("Terms") constitute a legally binding agreement between you ("User" or "you") and Arslan Studios ("Company," "we," "us," or "our") regarding your use of the AuraLumens mobile application ("App") and related services.</p>

    <h2>2. Description of Service</h2>
    <p>AuraLumens is a mobile application that provides light therapy and meditation experiences through synchronized strobe effects using your device's flashlight, combined with audio tracks and customizable controls.</p>

    <h2>3. Eligibility</h2>
    <p>You must be at least 13 years old to use AuraLumens. If you are under 18, you must have parental or guardian consent. By using the App, you represent and warrant that you meet these eligibility requirements.</p>

    <h2>4. Health and Safety Warnings</h2>
    
    <div class="highlight">
        <h3>4.1 Medical Conditions</h3>
        <p><strong>IMPORTANT HEALTH WARNING:</strong> Do not use AuraLumens if you have:</p>
        <ul>
            <li>Epilepsy or history of seizures</li>
            <li>Photosensitive epilepsy</li>
            <li>Light sensitivity disorders</li>
            <li>Migraine disorders triggered by light</li>
            <li>Any other medical condition that could be affected by flashing lights</li>
        </ul>
    </div>

    <h3>4.2 Usage Guidelines</h3>
    <ul>
        <li>Use the App in a controlled environment</li>
        <li>Start with lower brightness and frequency settings</li>
        <li>Take breaks during extended sessions</li>
        <li>Discontinue use if you experience discomfort, dizziness, or nausea</li>
        <li>Consult a healthcare professional before use if you have any medical concerns</li>
    </ul>

    <h3>4.3 Disclaimer of Medical Claims</h3>
    <p>AuraLumens is designed for relaxation and meditation purposes only. It is not intended to diagnose, treat, cure, or prevent any medical condition. We make no medical claims about the App's effectiveness.</p>

    <h2>5. User Responsibilities</h2>
    <p>As a user of AuraLumens, you agree to:</p>
    <ul>
        <li>Use the App responsibly and in accordance with these Terms</li>
        <li>Not use the App for any unlawful or prohibited purpose</li>
        <li>Not attempt to reverse engineer, decompile, or hack the App</li>
        <li>Not share your account credentials (if applicable)</li>
        <li>Respect intellectual property rights</li>
        <li>Use the App only for personal, non-commercial purposes</li>
    </ul>

    <h2>6. Intellectual Property</h2>
    <p>The App and all content, including but not limited to software, audio tracks, graphics, logos, and text, are owned by Arslan Studios and protected by copyright, trademark, and other intellectual property laws. You are granted a limited, non-exclusive, non-transferable license to use the App for personal purposes.</p>

    <h2>7. Subscription and Payments</h2>
    
    <h3>7.1 Premium Features</h3>
    <p>AuraLumens offers both free and premium features. Premium features require a subscription, which may be billed weekly, monthly, or annually.</p>

    <h3>7.2 Payment Terms</h3>
    <ul>
        <li>Subscriptions are charged through your Apple App Store account</li>
        <li>Payment is charged upon confirmation of purchase</li>
        <li>Subscriptions automatically renew unless canceled at least 24 hours before the end of the current period</li>
        <li>You can manage and cancel subscriptions in your device's settings</li>
    </ul>

    <h3>7.3 Refunds</h3>
    <p>Refund requests are handled according to Apple's App Store refund policy. We do not directly process refunds.</p>

    <h2>8. Privacy</h2>
    <p>Your privacy is important to us. Please review our <a href="{{ route('privacy') }}" style="color: #8b5cf6;">Privacy Policy</a> to understand how we collect, use, and protect your information.</p>

    <h2>9. Prohibited Uses</h2>
    <p>You may not use AuraLumens to:</p>
    <ul>
        <li>Violate any applicable laws or regulations</li>
        <li>Harass, abuse, or harm others</li>
        <li>Distribute malware or harmful code</li>
        <li>Interfere with the App's security features</li>
        <li>Use the App in ways that could cause harm to yourself or others</li>
        <li>Create derivative works based on the App</li>
    </ul>

    <h2>10. Limitation of Liability</h2>
    <p>TO THE MAXIMUM EXTENT PERMITTED BY LAW:</p>
    <ul>
        <li>Arslan Studios shall not be liable for any indirect, incidental, special, or consequential damages</li>
        <li>Our total liability shall not exceed the amount you paid for the App in the 12 months preceding the claim</li>
        <li>We do not warrant that the App will be error-free or uninterrupted</li>
        <li>You assume all risk associated with using the App</li>
    </ul>

    <h2>11. Indemnification</h2>
    <p>You agree to defend, indemnify, and hold harmless Arslan Studios from any claims, damages, or expenses arising from your use of the App or violation of these Terms.</p>

    <h2>12. Termination</h2>
    <p>We may terminate or suspend your access to AuraLumens at any time, with or without notice, if you violate these Terms. You may stop using the App at any time by deleting it from your device.</p>

    <h2>13. Updates and Modifications</h2>
    <p>We reserve the right to:</p>
    <ul>
        <li>Update or modify the App at any time</li>
        <li>Change these Terms with notice</li>
        <li>Add or remove features</li>
        <li>Discontinue the App (with reasonable notice)</li>
    </ul>

    <h2>14. Third-Party Content</h2>
    <p>The App may include content from third parties. We are not responsible for third-party content and do not endorse any third-party services referenced in the App.</p>

    <h2>15. Export Compliance</h2>
    <p>You acknowledge that the App may be subject to export control laws and regulations. You agree to comply with all applicable laws regarding the download and use of the App.</p>

    <h2>16. Governing Law</h2>
    <p>These Terms are governed by the laws of the United States and the State of California, without regard to conflict of law principles. Any disputes will be resolved in the courts of California.</p>

    <h2>17. Severability</h2>
    <p>If any provision of these Terms is found to be unenforceable, the remaining provisions will remain in full force and effect.</p>

    <h2>18. Entire Agreement</h2>
    <p>These Terms, together with our Privacy Policy, constitute the entire agreement between you and Arslan Studios regarding the use of AuraLumens.</p>

    <h2>19. Contact Information</h2>
    <p>If you have questions about these Terms, please contact us at:</p>
    <p>
        <strong>Arslan Studios</strong><br>
        Email: legal@arslanstudios.com<br>
        Website: <a href="{{ route('home') }}" style="color: #8b5cf6;">www.auralumens.com</a>
    </p>

    <h2>20. Acknowledgment</h2>
    <p>By using AuraLumens, you acknowledge that you have read, understood, and agree to be bound by these Terms of Use and our Privacy Policy.</p>

    <p><em>These Terms of Use were last updated on February 25, 2026.</em></p>
</div>
@endsection
