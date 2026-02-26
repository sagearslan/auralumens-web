@extends('layouts.app')

@section('title', 'Privacy Policy - AuraLumens')
@section('description', 'AuraLumens Privacy Policy - Learn how we protect your data and privacy.')

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
</style>
@endpush

@section('content')
<div class="legal-content">
    <a href="{{ route('home') }}" class="back-link">
        <i class="fas fa-arrow-left"></i>
        Back to Home
    </a>

    <h1>Privacy Policy</h1>
    <div class="effective-date">Effective Date: February 25, 2026</div>

    <h2>1. Introduction</h2>
    <p>Arslan Studios ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, and safeguard your information when you use the AuraLumens mobile application ("App") and our website.</p>

    <h2>2. Information We Collect</h2>
    
    <h3>2.1 Information You Provide</h3>
    <ul>
        <li>Account information (if you create an account)</li>
        <li>User preferences and settings</li>
        <li>Feedback and support communications</li>
    </ul>

    <h3>2.2 Automatically Collected Information</h3>
    <ul>
        <li>Device information (model, operating system version)</li>
        <li>App usage analytics (session duration, features used)</li>
        <li>Crash reports and performance data</li>
        <li>IP address and general location data</li>
    </ul>

    <h3>2.3 Information We Do NOT Collect</h3>
    <ul>
        <li>We do not access your device's camera or microphone beyond the flashlight functionality</li>
        <li>We do not collect personal photos, videos, or contacts</li>
        <li>We do not track your precise location</li>
        <li>We do not monitor your usage outside of the App</li>
    </ul>

    <h2>3. How We Use Your Information</h2>
    <p>We use collected information to:</p>
    <ul>
        <li>Provide and improve the App's functionality</li>
        <li>Personalize your experience</li>
        <li>Analyze usage patterns to enhance features</li>
        <li>Provide customer support</li>
        <li>Send important updates about the App</li>
        <li>Ensure security and prevent fraud</li>
    </ul>

    <h2>4. Data Sharing and Disclosure</h2>
    
    <h3>4.1 We Do Not Sell Your Data</h3>
    <p>We do not sell, rent, or trade your personal information to third parties for marketing purposes.</p>

    <h3>4.2 Limited Sharing</h3>
    <p>We may share your information only in the following circumstances:</p>
    <ul>
        <li><strong>Service Providers:</strong> With trusted third-party services that help us operate the App (analytics, crash reporting)</li>
        <li><strong>Legal Requirements:</strong> When required by law or to protect our rights and safety</li>
        <li><strong>Business Transfer:</strong> In connection with a merger, acquisition, or sale of assets</li>
    </ul>

    <h2>5. Data Security</h2>
    <p>We implement appropriate technical and organizational security measures to protect your information:</p>
    <ul>
        <li>Encryption of data in transit and at rest</li>
        <li>Regular security assessments</li>
        <li>Limited access to personal information on a need-to-know basis</li>
        <li>Secure servers and infrastructure</li>
    </ul>

    <h2>6. Data Retention</h2>
    <p>We retain your information only as long as necessary to provide our services and comply with legal obligations. You may request deletion of your data at any time by contacting us.</p>

    <h2>7. Your Rights and Choices</h2>
    <p>You have the right to:</p>
    <ul>
        <li>Access the personal information we have about you</li>
        <li>Request correction of inaccurate information</li>
        <li>Request deletion of your personal information</li>
        <li>Opt out of non-essential communications</li>
        <li>Export your data in a portable format</li>
    </ul>

    <h2>8. Children's Privacy</h2>
    <p>AuraLumens is not intended for children under 13 years of age. We do not knowingly collect personal information from children under 13. If you believe we have collected information from a child under 13, please contact us immediately.</p>

    <h2>9. International Users</h2>
    <p>If you are using AuraLumens from outside the United States, please note that your information may be transferred to and processed in the United States, where our servers are located and our central database is operated.</p>

    <h2>10. Third-Party Services</h2>
    <p>Our App may contain links to third-party websites or integrate with third-party services. This Privacy Policy does not apply to those services. We encourage you to review the privacy policies of any third-party services you use.</p>

    <h2>11. Analytics and Advertising</h2>
    <p>We use analytics services to understand how our App is used. These services may collect information about your device and usage patterns. We do not display third-party advertising within the App.</p>

    <h2>12. Changes to This Privacy Policy</h2>
    <p>We may update this Privacy Policy from time to time. We will notify you of any material changes by posting the new Privacy Policy in the App and on our website. Your continued use of the App after such changes constitutes acceptance of the updated policy.</p>

    <h2>13. Contact Us</h2>
    <p>If you have any questions about this Privacy Policy or our privacy practices, please contact us at:</p>
    <p>
        <strong>Arslan Studios</strong><br>
        Email: privacy@arslanstudios.com<br>
        Website: <a href="{{ route('home') }}" style="color: #8b5cf6;">www.auralumens.com</a>
    </p>

    <h2>14. California Privacy Rights</h2>
    <p>If you are a California resident, you have additional rights under the California Consumer Privacy Act (CCPA):</p>
    <ul>
        <li>Right to know what personal information is collected</li>
        <li>Right to delete personal information</li>
        <li>Right to opt-out of the sale of personal information (we do not sell personal information)</li>
        <li>Right to non-discrimination for exercising your privacy rights</li>
    </ul>

    <p><em>This Privacy Policy was last updated on February 25, 2026.</em></p>
</div>
@endsection
