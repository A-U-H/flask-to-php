<?php
/**
 * Example Company - Main Website
 * 
 * Strategic Amazon Management Agency Website
 * Following the documentation in ecom_squire_documentation.md
 */

// Define constant to allow legitimate access
define('ECOM_SQUIRE', true);

// Security check - prevent direct access to included files
if (!defined('ECOM_SQUIRE')) {
    header('HTTP/1.0 403 Forbidden');
    exit('Direct access forbidden');
}
?>
<?php include 'includes/header.php'; ?>

<main id="main">
  
  <!-- =========================================================================
       4.2 Hero Section
       ========================================================================= -->
  <section class="hero" id="hero" aria-label="Hero section">
    <div class="hero-bg"></div>
    <div class="container">
      <div class="hero-grid">
        <div class="hero-content fade-up">
          <span class="overline">FULL-SERVICE E-COMMERCE MANAGEMENT</span>
          <h1>Scaling Brands Beyond the Algorithm</h1>
          <p class="hero-subtitle">End-to-end store management that turns market volatility into consistent growth. We handle the algorithm; you lead the vision.</p>
          <div class="hero-actions">
            <a href="#contact" class="btn btn-primary">Claim Your Free Growth Audit</a>
            <a href="#process" class="btn btn-ghost">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M8 5v14l11-7z"/>
              </svg>
              See Our Process
            </a>
          </div>
        </div>
        <div class="hero-visual scale-in">
          <div class="hero-glow"></div>
          <div class="hero-graphic">
            <!-- Abstract growth chart visualization -->
            <svg viewBox="-20 -20 440 340" style="overflow: visible;" class="growth-chart">
              <defs>
                <linearGradient id="chartGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                  <stop offset="0%" style="stop-color:#47b2e4;stop-opacity:0.3"/>
                  <stop offset="100%" style="stop-color:#47b2e4;stop-opacity:0"/>
                </linearGradient>
              </defs>
              <path stroke-linecap="round" d="M0,250 Q100,200 150,180 T300,100 T400,50" fill="none" stroke="#47b2e4" stroke-width="3"/>
              <path stroke-linecap="round" d="M0,250 Q100,200 150,180 T300,100 T400,50 L400,300 L0,300 Z" fill="url(#chartGradient)"/>
              <circle cx="400" cy="50" r="8" fill="#47b2e4">
                <animate attributeName="opacity" values="0;1;0" dur="2s" repeatCount="indefinite"/>
              </circle>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       4.3 Clients Section (Trust Ribbon)
       ========================================================================= -->
  <section class="clients section" id="clients" aria-label="Our partners">
    <div class="container">
      <div class="text-center fade-up">
        <span class="overline">OUR STRATEGIC TECH STACK</span>
      </div>
    </div>
    <div class="clients-track-wrapper">
      <div class="clients-track">
        <!-- Duplicate logos for seamless loop -->
        <div class="client-logo"><img width="100" height="100" src="assets/img/logo/smartscout.png" alt="SmartScout" /></div>
        <div class="client-logo"><img width="90" height="90" src="assets/img/logo/keepa.png" alt="Keepa" /></div>
        <div class="client-logo"><img width="120" height="120" src="assets/img/logo/helium10.png" alt="Helium10" /></div>
        <div class="client-logo"><img width="100" height="100" src="assets/img/logo/js.png" alt="JS" /></div>
        <div class="client-logo"><img width="120" height="120" src="assets/img/logo/datadive.png" alt="DataDive" /></div>
        <div class="client-logo"><img width="120" height="120" src="assets/img/logo/sas.png" alt="SAS" /></div>
        <div class="client-logo"><img width="100" height="100" src="assets/img/logo/datarova.png" alt="Datarova" /></div>
        <!-- Duplicate for loop -->
        <div class="client-logo"><img width="100" height="100" src="assets/img/logo/smartscout.png" alt="SmartScout" /></div>
        <div class="client-logo"><img width="90" height="90" src="assets/img/logo/keepa.png" alt="Keepa" /></div>
        <div class="client-logo"><img width="120" height="120" src="assets/img/logo/helium10.png" alt="Helium10" /></div>
        <div class="client-logo"><img width="100" height="100" src="assets/img/logo/js.png" alt="JS" /></div>
        <div class="client-logo"><img width="120" height="120" src="assets/img/logo/datadive.png" alt="DataDive" /></div>
        <div class="client-logo"><img width="120" height="120" src="assets/img/logo/sas.png" alt="SAS" /></div>
        <div class="client-logo"><img width="100" height="100" src="assets/img/logo/datarova.png" alt="Datarova" /></div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       4.4 About Us Section
       ========================================================================= -->
  <section class="about section section-dark" id="about" aria-label="About us">
    <div class="container">
      <div class="about-header fade-up">
        <span class="overline">OUR PHILOSOPHY</span>
        <h2>Your Strategic Partner in the Amazon Marketplace</h2>
        <p class="about-narrative">Scaling on Amazon is no longer just about bidding on keywords; it's about mastering the tension between data and brand story. Example Company was founded to bridge this gap.</p>
        <a href="#process" class="btn btn-outline">Learn Our Method →</a>
      </div>
      
      <div class="grid grid-2 about-grid fade-up">
        <div class="about-card">
          <div class="about-icon">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#47b2e4" stroke-width="2">
              <path d="M12 20V10M18 20V4M6 20v-4"/>
            </svg>
          </div>
          <h4>Data-Driven PPC</h4>
          <p>Moving beyond basic bidding. Predictive modeling to capture market share while protecting your ACOS.</p>
        </div>
        <div class="about-card">
          <div class="about-icon">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#47b2e4" stroke-width="2">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h4>Brand Protection</h4>
          <p>Defending intellectual property and buy-box integrity against unauthorized sellers and price erosion.</p>
        </div>
        <div class="about-card">
          <div class="about-icon">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#47b2e4" stroke-width="2">
              <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
              <circle cx="8.5" cy="8.5" r="1.5"/>
              <polyline points="21 15 16 10 5 21"/>
            </svg>
          </div>
          <h4>Creative Optimization</h4>
          <p>Turning clicks into customers with A+ content and imagery designed for mobile-first shoppers.</p>
        </div>
        <div class="about-card">
          <div class="about-icon">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#47b2e4" stroke-width="2">
              <rect x="1" y="3" width="15" height="13"/>
              <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/>
              <circle cx="5.5" cy="18.5" r="2.5"/>
              <circle cx="18.5" cy="18.5" r="2.5"/>
            </svg>
          </div>
          <h4>Full-Scale Logistics</h4>
          <p>Inventory forecasting to FBA reconciliation - managing supply chain so you never go out of stock.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       4.5 Why Us Section (FAQ Accordion)
       ========================================================================= -->
  <section class="why-us section" id="why-us" aria-label="Why choose us">
    <div class="container">
      <div class="text-center fade-up">
        <span class="overline">WHY CHOOSE EXAMPLE COMPANY</span>
        <h2>Strategic dominance isn't an accident. It's engineered.</h2>
      </div>
      
      <div class="why-us-grid">
        <div class="accordion fade-up">
          <div class="accordion-item">
            <button class="accordion-header" aria-expanded="true">
              <span>Sustainable Brand Growth</span>
              <svg class="accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M6 9l6 6 6-6"/>
              </svg>
            </button>
            <div class="accordion-content open">
              <div class="accordion-body">
                We don't chase vanity metrics. Our engineers focus on 'Contribution Margin'—ensuring top-line growth with healthy bottom-line through inventory optimization and organic rank retention.
                <div class="metric-tag">Avg. ACOS Reduction: 14.2%</div>
              </div>
            </div>
          </div>
          
          <div class="accordion-item">
            <button class="accordion-header" aria-expanded="false">
              <span>PPC Management Differentiation</span>
              <svg class="accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M6 9l6 6 6-6"/>
              </svg>
            </button>
            <div class="accordion-content">
              <div class="accordion-body">
                Most agencies 'set and forget.' We use proprietary bidding logic accounting for 'Day-Parting' and 'Seasonal Volatility'—every dollar spent is an investment in market share.
                <div class="metric-tag">ROI Improvement: 2.3x</div>
              </div>
            </div>
          </div>
          
          <div class="accordion-item">
            <button class="accordion-header" aria-expanded="false">
              <span>Brand Protection & Integrity</span>
              <svg class="accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M6 9l6 6 6-6"/>
              </svg>
            </button>
            <div class="accordion-content">
              <div class="accordion-body">
                Dominance requires defense. We provide proactive monitoring for buy-box hijackers and MAP violations, utilizing automated alerts to secure your intellectual property 24/7.
                <div class="metric-tag">Threats Neutralized: 99.8%</div>
              </div>
            </div>
          </div>
          
          <div class="accordion-item">
            <button class="accordion-header" aria-expanded="false">
              <span>Creative That Converts</span>
              <svg class="accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M6 9l6 6 6-6"/>
              </svg>
            </button>
            <div class="accordion-content">
              <div class="accordion-body">
                We blend data insights with creative excellence. Our A+ Content and 3D visualizations are optimized for Amazon's algorithm while captivating human shoppers.
                <div class="metric-tag">Conversion Lift: 23%</div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="why-us-visual fade-up">
          <div class="visual-anchor">
            <svg viewBox="0 0 300 300" class="shield-graphic">
              <defs>
                <linearGradient id="shieldGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" style="stop-color:#47b2e4;stop-opacity:0.2"/>
                  <stop offset="100%" style="stop-color:#47b2e4;stop-opacity:0"/>
                </linearGradient>
              </defs>
              <path d="M150 30 L270 70 L270 150 C270 220 150 280 150 280 C150 280 30 220 30 150 L30 70 Z" fill="url(#shieldGrad)" stroke="#47b2e4" stroke-width="2"/>
              <path d="M100 130 L130 160 L200 100" stroke="#47b2e4" stroke-width="4" fill="none" stroke-linecap="round"/>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       4.6 Skills / Performance Index Section
       ========================================================================= -->
  <section class="skills section section-dark" id="skills" aria-label="Our performance metrics">
    <div class="container">
      <div class="skills-grid">
        <div class="skills-visual fade-up">
          <svg viewBox="0 0 400 400" class="performance-graphic">
            <defs>
              <radialGradient id="nodeGlow" cx="50%" cy="50%" r="50%">
                <stop offset="0%" style="stop-color:#47b2e4;stop-opacity:0.3"/>
                <stop offset="100%" style="stop-color:#47b2e4;stop-opacity:0"/>
              </radialGradient>
            </defs>
            <circle cx="200" cy="200" r="150" fill="none" stroke="#374151" stroke-width="1" stroke-dasharray="5,5"/>
            <circle cx="200" cy="200" r="100" fill="none" stroke="#374151" stroke-width="1" stroke-dasharray="5,5"/>
            <circle cx="200" cy="200" r="50" fill="url(#nodeGlow)"/>
            <circle cx="200" cy="50" r="8" fill="#47b2e4" class="data-node"/>
            <circle cx="335" cy="200" r="8" fill="#47b2e4" class="data-node"/>
            <circle cx="200" cy="350" r="8" fill="#47b2e4" class="data-node"/>
            <circle cx="65" cy="200" r="8" fill="#47b2e4" class="data-node"/>
          </svg>
        </div>
        
        <div class="skills-content fade-up">
          <span class="overline">OUR PERFORMANCE INDEX</span>
          <h2>We engineer excellence.</h2>
          
          <div class="skills-bars">
            <div class="skill-item">
              <div class="skill-header">
                <span class="skill-name">Operational Uptime</span>
                <span class="skill-value" data-target="99.2">0%</span>
              </div>
              <div class="progress-bar">
                <div class="progress-bar-fill" data-width="99.2"></div>
              </div>
            </div>
            
            <div class="skill-item">
              <div class="skill-header">
                <span class="skill-name">Execution Accuracy</span>
                <span class="skill-value" data-target="98.7">0%</span>
              </div>
              <div class="progress-bar">
                <div class="progress-bar-fill" data-width="98.7"></div>
              </div>
            </div>
            
            <div class="skill-item">
              <div class="skill-header">
                <span class="skill-name">Client Retention Rate</span>
                <span class="skill-value" data-target="97.4">0%</span>
              </div>
              <div class="progress-bar">
                <div class="progress-bar-fill" data-width="97.4"></div>
              </div>
            </div>
            
            <div class="skill-item">
              <div class="skill-header">
                <span class="skill-name">Tools Proficiency</span>
                <span class="skill-value" data-target="99.8">0%</span>
              </div>
              <div class="progress-bar">
                <div class="progress-bar-fill" data-width="99.8"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       4.7 Services Section
       ========================================================================= -->
  <section class="services section" id="services" aria-label="Our services">
    <div class="container">
      <div class="text-center fade-up">
        <span class="overline">OUR SERVICES</span>
        <h2>Comprehensive Solutions for the Modern Seller</h2>
        <p class="text-dim">From technical SEO to high-conversion creative, we provide the end-to-end infrastructure required to dominate the Amazon marketplace.</p>
      </div>
      
      <!-- Impact Bar -->
      <div class="impact-bar fade-up">
        <div class="stats-grid">
          <div class="stat-item">
            <div class="stat-number" data-count="60">0</div>
            <div class="stat-label">Projects Delivered</div>
          </div>
          <div class="stat-item">
            <div class="stat-number" data-count="95">0</div>
            <div class="stat-label">Client Satisfaction</div>
          </div>
          <div class="stat-item">
            <div class="stat-number" data-count="6">0</div>
            <div class="stat-label">Years Experience</div>
          </div>
          <div class="stat-item">
            <div class="stat-number" data-count="10">0</div>
            <div class="stat-label">In-House Experts</div>
          </div>
        </div>
      </div>
      
      <div class="services-grid fade-up">
        <div class="card service-card">
          <span class="service-number">01</span>
          <h4>PPC Management</h4>
          <p>ACOS Optimization. We treat your ad spend like an investment portfolio with proprietary bidding strategies.</p>
        </div>
        
        <div class="card service-card">
          <span class="service-number">02</span>
          <h4>Full Account Management</h4>
          <p>Operations at Scale. From FBA reconciliation to case logs—we handle the complexity.</p>
        </div>
        
        <div class="card card-featured service-card">
          <span class="badge badge-gold">★ Featured</span>
          <span class="service-number">03</span>
          <h4>3D Visual & A+ Content</h4>
          <p>The Visual Edge. High-fidelity renders and story-driven A+ content that converts.</p>
        </div>
        
        <div class="card service-card">
          <span class="service-number">04</span>
          <h4>SEO & Listing Mastery</h4>
          <p>Rank Supremacy. Algorithmic keyword integration for maximum visibility.</p>
        </div>
        
        <div class="card service-card">
          <span class="service-number">05</span>
          <h4>Brand Protection</h4>
          <p>24/7 Defense. Proactive monitoring against hijackers and MAP violations.</p>
        </div>
        
        <div class="card service-card">
          <span class="service-number">06</span>
          <h4>Global Expansion</h4>
          <p>Borderless Scaling. Turnkey solutions for EU, UK, and Asian marketplaces.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       4.8 Work Process Section
       ========================================================================= -->
  <section class="process section section-dark" id="process" aria-label="Our process">
    <div class="container">
      <div class="text-center fade-up">
        <span class="overline">OUR PROCESS</span>
        <h2>Our Strategic Roadmap</h2>
        <p class="text-dim">Data-driven approach for sustainable brand growth</p>
      </div>
      
      <div class="process-timeline fade-up">
        <div class="process-step">
          <div class="step-marker">01</div>
          <div class="step-content">
            <h4>Audit & Intelligence</h4>
            <p>Before we move, we measure. Deep-tissue audit of account health and competitor vulnerabilities.</p>
            <ul class="step-features">
              <li>ASIN-level profitability analysis</li>
              <li>Competitor keyword gap mapping</li>
              <li>Conversion rate leak detection</li>
            </ul>
            <div class="step-deliverable">
              <span class="deliverable-label">End of Step 1:</span>
              <span>Comprehensive Growth Roadmap</span>
            </div>
          </div>
        </div>
        
        <div class="process-spine"></div>
        
        <div class="process-step">
          <div class="step-marker">02</div>
          <div class="step-content">
            <h4>Optimization & Asset Creation</h4>
            <p>We sharpen your brand's edge with SEO mastery and 3D visual assets.</p>
            <ul class="step-features">
              <li>Algorithm-optimized SEO titles/bullets</li>
              <li>Premium A+ Content & Storefront design</li>
              <li>High-fidelity 3D product visualization</li>
            </ul>
            <div class="step-deliverable">
              <span class="deliverable-label">End of Step 2:</span>
              <span>Performance-Ready Listing</span>
            </div>
          </div>
        </div>
        
        <div class="process-spine"></div>
        
        <div class="process-step">
          <div class="step-marker">03</div>
          <div class="step-content">
            <h4>Scaling & Aggressive Growth</h4>
            <p>With the foundation set, we ignite the engine with surgical PPC precision.</p>
            <ul class="step-features">
              <li>AI-driven PPC bidding & day-parting</li>
              <li>24/7 Brand Protection & Hijacker defense</li>
              <li>Inventory-synced marketing spend</li>
            </ul>
            <div class="step-deliverable">
              <span class="deliverable-label">End of Step 3:</span>
              <span>Sustainable Dominance</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       4.9 Call To Action Section
       ========================================================================= -->
  <section class="cta section" id="cta" aria-label="Call to action">
    <div class="cta-bg"></div>
    <div class="container">
      <div class="cta-content text-center fade-up">
        <span class="overline">GET STARTED</span>
        <h2>Ready to Engineer Your Brand's Dominance?</h2>
        <p class="cta-subtitle">Stop guessing. Start growing with a partner who treats your brand like our own.</p>
        <a href="#contact" class="btn btn-primary btn-lg">Book Your Growth Audit</a>
        <p class="micro-trust">No obligation. 15-minute strategy call.</p>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       4.10 Pricing Section
       ========================================================================= -->
  <section class="pricing section" id="pricing" aria-label="Pricing plans">
    <div class="container">
      <div class="text-center fade-up">
        <span class="overline">INVESTMENT TIERS</span>
        <h2>Choose Your Growth Path</h2>
        <p class="text-dim">Psychology shifts from "spending money" to "allocating capital for growth"</p>
      </div>
      
      <div class="pricing-grid fade-up">
        <!-- Tier 1 -->
        <div class="pricing-card">
          <div class="pricing-header">
            <h4>Audit & SEO</h4>
            <div class="pricing-price">
              <span class="currency">$</span>
              <span class="amount">499</span>
              <span class="period">/project</span>
            </div>
            <p class="pricing-tagline">Perfect for brands needing a professional reset</p>
          </div>
          <ul class="pricing-features">
            <li>Comprehensive Account Health Audit</li>
            <li>Advanced Keyword Gap Analysis</li>
            <li>SEO Listing Optimization</li>
          </ul>
          <a href="#contact" class="btn btn-outline">Start My Audit</a>
        </div>
        
        <!-- Tier 2 (Featured) -->
        <div class="pricing-card card-featured">
          <div class="pricing-badge">MOST POPULAR</div>
          <div class="pricing-header">
            <h4>Professional Scaling</h4>
            <div class="pricing-price">
              <span class="currency">$</span>
              <span class="amount">1,499</span>
              <span class="period">/month</span>
            </div>
            <p class="pricing-tagline">Includes Full Audit ($499 Value)</p>
          </div>
          <ul class="pricing-features">
            <li>Full PPC Management & Bidding</li>
            <li>Monthly A+ Content Updates</li>
            <li>Smart Inventory Tracking</li>
            <li>Detailed Performance Reporting</li>
            <li>Competitor Strategy Monitoring</li>
          </ul>
          <a href="#contact" class="btn btn-primary">Scale My Brand</a>
        </div>
        
        <!-- Tier 3 -->
        <div class="pricing-card">
          <div class="pricing-header">
            <h4>Full Brand Management</h4>
            <div class="pricing-price">
              <span class="amount">Enterprise</span>
            </div>
            <p class="pricing-tagline">Complete infrastructure for market leaders</p>
          </div>
          <ul class="pricing-features">
            <li>Everything in Professional</li>
            <li>Premium 3D Renders & Video Ads</li>
            <li>Global Marketplace Expansion</li>
            <li>24/7 Proactive Brand Defense</li>
            <li>Dedicated "Squire" Account Manager</li>
          </ul>
          <a href="#contact" class="btn btn-outline">Apply for Management</a>
        </div>
      </div>
      
      <div class="pricing-footer text-center fade-up">
        <p class="risk-reversal">Not sure where your brand sits? <a href="#contact">Book a free 15-minute discovery call</a> and our engineers will help you choose.</p>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       4.11 Testimonials Section
       ========================================================================= -->
  <section class="testimonials section section-dark" id="testimonials" aria-label="Client testimonials">
    <div class="container">
      <div class="text-center fade-up">
        <span class="overline">SUCCESS STORIES</span>
        <h2>Results That Speak</h2>
      </div>
      
      <div class="testimonials-grid fade-up">
        <div class="card testimonial-card">
          <div class="testimonial-header">
            <div class="testimonial-avatar">
              <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                <circle cx="24" cy="24" r="24" fill="#374151"/>
                <circle cx="24" cy="20" r="8" fill="#6b7280"/>
                <path d="M10 44c0-8 4-12 14-12s14 4 14 12" fill="#6b7280"/>
              </svg>
            </div>
            <div class="testimonial-info">
              <h5>Marcus Chen</h5>
              <p class="text-dim">Home & Kitchen Brand</p>
            </div>
            <div class="verified-badge">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="#47b2e4">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
              </svg>
            </div>
          </div>
          <div class="testimonial-result">
            <span class="result-badge">ACOS dropped by 14% in 30 days</span>
          </div>
          <blockquote class="testimonial-quote">
            "Example Company didn't just manage our ads—they fundamentally changed how we approach Amazon. Our ACOS went from 45% to 31% while revenue increased 40%."
          </blockquote>
          <a href="#" class="case-study-link">Read Case Study →</a>
        </div>
        
        <div class="card testimonial-card">
          <div class="testimonial-header">
            <div class="testimonial-avatar">
              <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                <circle cx="24" cy="24" r="24" fill="#374151"/>
                <circle cx="24" cy="20" r="8" fill="#6b7280"/>
                <path d="M10 44c0-8 4-12 14-12s14 4 14 12" fill="#6b7280"/>
              </svg>
            </div>
            <div class="testimonial-info">
              <h5>Sarah Mitchell</h5>
              <p class="text-dim">Beauty & Personal Care</p>
            </div>
            <div class="verified-badge">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="#47b2e4">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
              </svg>
            </div>
          </div>
          <div class="testimonial-result">
            <span class="result-badge">Scaled to $200k/month in 90 days</span>
          </div>
          <blockquote class="testimonial-quote">
            "The creative optimization alone was worth the investment. Our A+ Content drove a 23% lift in conversions. This team actually delivers on their promises."
          </blockquote>
          <a href="#" class="case-study-link">Read Case Study →</a>
        </div>
        
        <div class="card testimonial-card">
          <div class="testimonial-header">
            <div class="testimonial-avatar">
              <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                <circle cx="24" cy="24" r="24" fill="#374151"/>
                <circle cx="24" cy="20" r="8" fill="#6b7280"/>
                <path d="M10 44c0-8 4-12 14-12s14 4 14 12" fill="#6b7280"/>
              </svg>
            </div>
            <div class="testimonial-info">
              <h5>David Rodriguez</h5>
              <p class="text-dim">Sports & Outdoors</p>
            </div>
            <div class="verified-badge">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="#47b2e4">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
              </svg>
            </div>
          </div>
          <div class="testimonial-result">
            <span class="result-badge">Hijackers eliminated in 48 hours</span>
          </div>
          <blockquote class="testimonial-quote">
            "When hijackers hit our listing, Example Company had them removed within 48 hours. Their brand protection is real, not just a marketing promise."
          </blockquote>
          <a href="#" class="case-study-link">Read Case Study →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       4.12 FAQ Section
       ========================================================================= -->
  <section class="faq section" id="faq" aria-label="Frequently asked questions">
    <div class="container">
      <div class="faq-header fade-up">
        <span class="overline">FAQ</span>
        <h2>Common Questions</h2>
        <p class="text-dim">Everything you need to know about working with Example Company.</p>
      </div>
      
      <div class="faq-grid">
        <div class="faq-content fade-up">
          <div class="accordion">
            <div class="accordion-item">
              <button class="accordion-header" aria-expanded="true">
                <span>How fast can we see results?</span>
                <svg class="accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M6 9l6 6 6-6"/>
                </svg>
              </button>
              <div class="accordion-content open">
                <div class="accordion-body">
                  Most clients see PPC improvements within 30 days. Full account optimization and A+ Content changes typically show measurable results within 60-90 days. We focus on sustainable growth, not short-term wins.
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
              <button class="accordion-header" aria-expanded="false">
                <span>What's included in the free audit?</span>
                <svg class="accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M6 9l6 6 6-6"/>
                </svg>
              </button>
              <div class="accordion-content">
                <div class="accordion-body">
                  Our comprehensive audit includes: ASIN-level profitability analysis, keyword gap analysis, competitor benchmarking, conversion rate assessment, and a written roadmap with specific action items. It's a $2,000+ value, included free with our Professional Scaling tier.
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
              <button class="accordion-header" aria-expanded="false">
                <span>How do you protect against hijackers?</span>
                <svg class="accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M6 9l6 6 6-6"/>
                </svg>
              </button>
              <div class="accordion-content">
                <div class="accordion-body">
                  We use a multi-layered approach: proactive brand registry management, automated MAP violation monitoring, buy-box tracking, and rapid takedown procedures. Our average response time to hijacker identification is under 24 hours.
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
              <button class="accordion-header" aria-expanded="false">
                <span>Do you work with brands outside the US?</span>
                <svg class="accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M6 9l6 6 6-6"/>
                </svg>
              </button>
              <div class="accordion-content">
                <div class="accordion-body">
                  Absolutely. We have experience launching and managing accounts in the UK, EU, Canada, and Asian marketplaces. Global expansion is one of our core services.
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
              <button class="accordion-header" aria-expanded="false">
                <span>What's your minimum contract term?</span>
                <svg class="accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M6 9l6 6 6-6"/>
                </svg>
              </button>
              <div class="accordion-content">
                <div class="accordion-body">
                  We offer both project-based and monthly retainer options. Our Professional Scaling tier is month-to-month with a 30-day notice period. We believe in earning your business every month through results.
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
              <button class="accordion-header" aria-expanded="false">
                <span>How do we get started?</span>
              <svg class="accordion-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M6 9l6 6 6-6"/>
              </svg>
            </button>
            <div class="accordion-content">
              <div class="accordion-body">
                Book a free 15-minute strategy call using the form below. We'll discuss your current situation, goals, and determine if we're a good fit. If we are, we'll create a customized growth plan tailored to your brand.
              </div>
            </div>
          </div>
        </div>
        
        <div class="faq-cta fade-up">
          <div class="card faq-card">
            <h4>Still have questions?</h4>
            <p>Our team is here to help. Book a free strategy call and we'll answer all your questions.</p>
            <a href="#contact" class="btn btn-primary">Book Your Free Strategy Call</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       4.13 Contact Section (with Lead Qualification Form)
       ========================================================================= -->
  <section class="contact section section-dark" id="contact" aria-label="Contact us">
    <div class="container">
      <div class="contact-grid">
        <div class="contact-info fade-up">
          <span class="overline">GET STARTED</span>
          <h2>Claim Your Free Growth Audit</h2>
          <p class="contact-intro">Tell us about your brand. We'll analyze your account and create a customized growth roadmap—completely free.</p>
          
          <div class="contact-details">
            <div class="contact-item">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#47b2e4" stroke-width="2">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
              </svg>
              <div>
                <h5>Phone</h5>
                <p>+92 319 724 6978</p>
              </div>
            </div>

            <div class="contact-item">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#47b2e4" stroke-width="2">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
              </svg>
              <div>
                <h5>Address</h5>
                <p class="text-dim">Tulsa, Oklahoma</p>
              </div>
            </div>
            
            <div class="contact-item">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#47b2e4" stroke-width="2">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                <polyline points="22,6 12,13 2,6"/>
              </svg>
              <div>
                <h5>Email</h5>
                <p>contact@example.com</p>
              </div>
            </div>
          </div>
          
          <div class="contact-hours">
            <h5>Business Hours</h5>
            <p>Monday - Friday: 9am - 6pm CST</p>
            <p>Saturday: By appointment</p>
          </div>
        </div>
        
        <div class="contact-form-wrapper fade-up">
          <form id="contactForm" class="contact-form" action="forms/process.php" method="POST">
            <!-- Honeypot field (hidden from real users, traps bots) -->
            <div class="honeypot-field" style="display:none;">
              <label for="website_url">Website</label>
              <input type="text" id="website_url" name="website_url" tabindex="-1" autocomplete="off">
            </div>
            
            <!-- CSRF Token -->
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            
            <div class="form-row">
              <div class="form-group">
                <label for="first_name" class="form-label">First Name *</label>
                <input type="text" id="first_name" name="first_name" class="form-input" required>
              </div>
              <div class="form-group">
                <label for="last_name" class="form-label">Last Name *</label>
                <input type="text" id="last_name" name="last_name" class="form-input" required>
              </div>
            </div>
            
            <div class="form-group">
              <label for="email" class="form-label">Email Address *</label>
              <input type="email" id="email" name="email" class="form-input" required>
            </div>
            
            <div class="form-group">
              <label for="amazon_url" class="form-label">Amazon Store URL *</label>
              <input type="url" id="amazon_url" name="amazon_url" class="form-input" placeholder="https://amazon.com/shop/yourbrand" required>
            </div>
            
            <div class="form-group">
              <label for="revenue" class="form-label">Monthly Revenue *</label>
              <select id="revenue" name="revenue" class="form-input form-select" required>
                <option value="">Select monthly revenue...</option>
                <option value="under_10k">Under $10,000</option>
                <option value="10k_50k">$10,000 - $50,000</option>
                <option value="50k_100k">$50,000 - $100,000</option>
                <option value="100k_500k">$100,000 - $500,000</option>
                <option value="over_500k">$500,000+</option>
              </select>
            </div>
            
            <div class="form-group">
              <label for="acos" class="form-label">Current ACOS (if known)</label>
              <input type="text" id="acos" name="acos" class="form-input" placeholder="e.g., 35%">
            </div>
            
            <div class="form-group">
              <label for="goals" class="form-label">What are your main goals?</label>
              <textarea id="goals" name="goals" class="form-input form-textarea" rows="3" placeholder="Tell us what you want to achieve..."></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block" id="submitBtn">
              <span class="btn-text">Book Your Growth Audit</span>
              <span class="btn-loader" style="display:none;">
                <svg class="spinner" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="12" cy="12" r="10" stroke-opacity="0.25"/>
                  <path d="M12 2a10 10 0 0 1 10 10" stroke-linecap="round"/>
                </svg>
              </span>
            </button>
            
            <p class="form-disclaimer">By submitting this form, you agree to our <a href="#">Privacy Policy</a>. We respect your privacy and will never share your information.</p>
          </form>
          
          <div id="formSuccess" class="form-success" style="display:none;">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#47b2e4" stroke-width="2">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
              <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
            <h3>Thank You!</h3>
            <p>Your audit request has been received. We'll analyze your account and reach out within 24 hours to schedule your strategy call.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
