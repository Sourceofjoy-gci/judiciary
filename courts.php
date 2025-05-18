<?php
// Page-specific variables
$page_title = "Our Courts";
$pageStyles = ["assets/css/courts.css"];
$pageScripts = ["assets/js/courts.js"];

// Start output buffering to capture page content
ob_start();
?>

<!-- Hero Section -->
<section class="courts-hero parallax-hero">
    <div class="hero-overlay"></div>
    <div class="container">
        <h1>Our Courts</h1>
        <p class="subtitle">Discover the Eswatini Judicial System</p>
        <div class="hero-cta">
            <a href="#courts-explorer" class="btn btn-primary">Explore <i class="fas fa-arrow-down"></i></a>
        </div>
    </div>
</section>

<!-- Judicial Structure Section -->
<section class="content-section judicial-structure-section glass-effect" id="judicial-structure">
    <div class="container">
        <h2><i class="fas fa-sitemap"></i> Judicial Structure</h2>
        <p class="section-intro">The judiciary of Eswatini operates through a hierarchical court system designed to ensure efficient and fair administration of justice.</p>
        
        <div class="hierarchy-visualization">
            <div class="court-hierarchy-diagram">
                <div class="hierarchy-level apex-level">
                    <div class="court-node apex-court" data-court="supreme-court">
                        <div class="court-icon"><i class="fas fa-balance-scale"></i></div>
                        <h3>Supreme Court</h3>
                        <div class="court-label">Apex Court</div>
                    </div>
                </div>
                
                <div class="hierarchy-level superior-level">
                    <div class="court-node superior-court" data-court="high-court">
                        <div class="court-icon"><i class="fas fa-landmark"></i></div>
                        <h3>High Court</h3>
                        <div class="court-label">Superior Court</div>
                    </div>
                    <div class="court-node superior-court" data-court="industrial-court-appeal">
                        <div class="court-icon"><i class="fas fa-gavel"></i></div>
                        <h3>Industrial Court of Appeal</h3>
                        <div class="court-label">Superior Court</div>
                    </div>
                </div>
                
                <div class="hierarchy-level specialized-level">
                    <div class="court-node specialized-court" data-court="commercial-court">
                        <div class="court-icon"><i class="fas fa-briefcase"></i></div>
                        <h3>Commercial Court</h3>
                        <div class="court-label">Specialized Court</div>
                    </div>
                    <div class="court-node specialized-court" data-court="industrial-court">
                        <div class="court-icon"><i class="fas fa-industry"></i></div>
                        <h3>Industrial Court</h3>
                        <div class="court-label">Specialized Court</div>
                    </div>
                    <div class="court-node specialized-court" data-court="small-claims-court">
                        <div class="court-icon"><i class="fas fa-coins"></i></div>
                        <h3>Small Claims Court</h3>
                        <div class="court-label">Specialized Court</div>
                    </div>
                </div>
                
                <div class="hierarchy-level magistrate-level">
                    <div class="court-node magistrate-court" data-court="magistrate-courts">
                        <div class="court-icon"><i class="fas fa-university"></i></div>
                        <h3>Magistrate Courts</h3>
                        <div class="court-label">Magistrate Court</div>
                    </div>
                </div>
            </div>
            
            <div class="hierarchy-info">
                <div class="hierarchy-info-content active" id="info-supreme-court">
                    <h3>Supreme Court</h3>
                    <p>The highest court in Eswatini and the final court of appeal for all matters.</p>
                    <a href="supreme-court.php" class="btn btn-outline">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="hierarchy-info-content" id="info-high-court">
                    <h3>High Court</h3>
                    <p>Has original jurisdiction in civil and criminal matters, as well as appellate jurisdiction from subordinate courts.</p>
                    <a href="high-court.php" class="btn btn-outline">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="hierarchy-info-content" id="info-industrial-court-appeal">
                    <h3>Industrial Court of Appeal</h3>
                    <p>Hears appeals from the Industrial Court on matters related to employment and labor disputes.</p>
                    <a href="industrial-court-appeal.php" class="btn btn-outline">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="hierarchy-info-content" id="info-commercial-court">
                    <h3>Commercial Court</h3>
                    <p>A division of the High Court that specializes in business and commercial disputes.</p>
                    <a href="commercial-court.php" class="btn btn-outline">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="hierarchy-info-content" id="info-industrial-court">
                    <h3>Industrial Court</h3>
                    <p>Handles disputes related to employment, labor relations, and workplace issues.</p>
                    <a href="industrial-court.php" class="btn btn-outline">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="hierarchy-info-content" id="info-small-claims-court">
                    <h3>Small Claims Court</h3>
                    <p>Handles minor civil disputes with a simplified procedure to allow easier access to justice.</p>
                    <a href="small-claims-court.php" class="btn btn-outline">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="hierarchy-info-content" id="info-magistrate-courts">
                    <h3>Magistrate Courts</h3>
                    <p>The primary courts of first instance, handling a wide range of civil and criminal matters across the country.</p>
                    <a href="magistrate-court.php" class="btn btn-outline">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Courts Explorer Section -->
<section class="content-section courts-explorer-section glass-effect" id="courts-explorer">
    <div class="container">
        <h2><i class="fas fa-search"></i> Explore Our Courts</h2>
        <p class="section-intro">Discover the different courts that make up Eswatini's judicial system. Filter by court type or search for specific courts to learn more about their functions and locations.</p>
        
        <div class="explorer-controls">
            <div class="view-toggle">
                <button class="toggle-btn active" data-view="grid"><i class="fas fa-th"></i> Grid</button>
                <button class="toggle-btn" data-view="list"><i class="fas fa-list"></i> List</button>
            </div>
            
            <div class="filter-dropdown">
                <label for="court-filter">Filter by:</label>
                <select id="court-filter">
                    <option value="all">All Courts</option>
                    <option value="apex">Apex Court</option>
                    <option value="superior">Superior Courts</option>
                    <option value="specialized">Specialized Courts</option>
                    <option value="magistrate">Magistrate Courts</option>
                </select>
            </div>
            
            <div class="search-box">
                <input type="text" id="court-search" placeholder="Search courts...">
                <button type="button" aria-label="Search"><i class="fas fa-search"></i></button>
            </div>
        </div>
        
        <div class="courts-results-info">
            <p><span id="results-count">7</span> courts found</p>
            <div class="sorting">
                <label for="sort-courts">Sort by:</label>
                <select id="sort-courts">
                    <option value="hierarchy">Hierarchy</option>
                    <option value="name">Name (A-Z)</option>
                    <option value="established">Established (Oldest first)</option>
                </select>
            </div>
        </div>
        
        <div class="courts-grid" id="courts-container">
            <!-- Supreme Court -->
            <div class="court-card" data-type="apex" data-established="1968">
                <div class="court-card-header">
                    <div class="court-type">Apex Court</div>
                    <div class="court-icon"><i class="fas fa-balance-scale"></i></div>
                </div>
                <div class="court-card-body">
                    <h3>Supreme Court</h3>
                    <p>The Supreme Court is the highest court in Eswatini and the final court of appeal for all matters. It hears appeals from the High Court and the Industrial Court of Appeal.</p>
                    <div class="court-metadata">
                        <div class="metadata-item">
                            <i class="fas fa-map-marker-alt"></i> <span>Mbabane</span>
                        </div>
                        <div class="metadata-item">
                            <i class="fas fa-calendar-alt"></i> <span>Est. 1968</span>
                        </div>
                        <div class="metadata-item">
                            <i class="fas fa-gavel"></i> <span>Final Appellate Court</span>
                        </div>
                    </div>
                </div>
                <div class="court-card-footer">
                    <a href="supreme-court.php" class="btn btn-outline">View Details</a>
                </div>
            </div>
            
            <!-- High Court -->
            <div class="court-card" data-type="superior" data-established="1954">
                <div class="court-card-header">
                    <div class="court-type">Superior Court</div>
                    <div class="court-icon"><i class="fas fa-landmark"></i></div>
                </div>
                <div class="court-card-body">
                    <h3>High Court</h3>
                    <p>The High Court has original jurisdiction in civil and criminal matters, as well as appellate jurisdiction from subordinate courts. It handles serious criminal cases and complex civil matters.</p>
                    <div class="court-metadata">
                        <div class="metadata-item">
                            <i class="fas fa-map-marker-alt"></i> <span>Mbabane</span>
                        </div>
                        <div class="metadata-item">
                            <i class="fas fa-calendar-alt"></i> <span>Est. 1954</span>
                        </div>
                        <div class="metadata-item">
                            <i class="fas fa-balance-scale"></i> <span>Original & Appellate</span>
                        </div>
                    </div>
                </div>
                <div class="court-card-footer">
                    <a href="high-court.php" class="btn btn-outline">View Details</a>
                </div>
            </div>
            
            <!-- Industrial Court of Appeal -->
            <div class="court-card" data-type="superior" data-established="1980">
                <div class="court-card-header">
                    <div class="court-type">Superior Court</div>
                    <div class="court-icon"><i class="fas fa-gavel"></i></div>
                </div>
                <div class="court-card-body">
                    <h3>Industrial Court of Appeal</h3>
                    <p>The Industrial Court of Appeal hears appeals from the Industrial Court on matters related to employment and labor disputes.</p>
                    <div class="court-metadata">
                        <div class="metadata-item">
                            <i class="fas fa-map-marker-alt"></i> <span>Mbabane</span>
                        </div>
                        <div class="metadata-item">
                            <i class="fas fa-calendar-alt"></i> <span>Est. 1980</span>
                        </div>
                        <div class="metadata-item">
                            <i class="fas fa-briefcase"></i> <span>Labor Appeals</span>
                        </div>
                    </div>
                </div>
                <div class="court-card-footer">
                    <a href="industrial-court-appeal.php" class="btn btn-outline">View Details</a>
                </div>
            </div>
            
            <!-- Commercial Court -->
            <div class="court-card" data-type="specialized" data-established="2005">
                <div class="court-card-header">
                    <div class="court-type">Specialized Court</div>
                    <div class="court-icon"><i class="fas fa-briefcase"></i></div>
                </div>
                <div class="court-card-body">
                    <h3>Commercial Court</h3>
                    <p>The Commercial Court is a division of the High Court that specializes in business and commercial disputes, providing focused expertise for complex business matters.</p>
                    <div class="court-metadata">
                        <div class="metadata-item">
                            <i class="fas fa-map-marker-alt"></i> <span>Mbabane</span>
                        </div>
                        <div class="metadata-item">
                            <i class="fas fa-calendar-alt"></i> <span>Est. 2005</span>
                        </div>
                        <div class="metadata-item">
                            <i class="fas fa-chart-line"></i> <span>Business Disputes</span>
                        </div>
                    </div>
                </div>
                <div class="court-card-footer">
                    <a href="commercial-court.php" class="btn btn-outline">View Details</a>
                </div>
            </div>
            
            <!-- Industrial Court -->
            <div class="court-card" data-type="specialized" data-established="1980">
                <div class="court-card-header">
                    <div class="court-type">Specialized Court</div>
                    <div class="court-icon"><i class="fas fa-industry"></i></div>
                </div>
                <div class="court-card-body">
                    <h3>Industrial Court</h3>
                    <p>The Industrial Court handles disputes related to employment, labor relations, and workplace issues, ensuring fair resolution of workplace conflicts.</p>
                    <div class="court-metadata">
                        <div class="metadata-item">
                            <i class="fas fa-map-marker-alt"></i> <span>Mbabane</span>
                        </div>
                        <div class="metadata-item">
                            <i class="fas fa-calendar-alt"></i> <span>Est. 1980</span>
                        </div>
                        <div class="metadata-item">
                            <i class="fas fa-user-tie"></i> <span>Employment Matters</span>
                        </div>
                    </div>
                </div>
                <div class="court-card-footer">
                    <a href="industrial-court.php" class="btn btn-outline">View Details</a>
                </div>
            </div>
            
            <!-- Small Claims Court -->
            <div class="court-card" data-type="specialized" data-established="1998">
                <div class="court-card-header">
                    <div class="court-type">Specialized Court</div>
                    <div class="court-icon"><i class="fas fa-coins"></i></div>
                </div>
                <div class="court-card-body">
                    <h3>Small Claims Court</h3>
                    <p>The Small Claims Court handles minor civil disputes with a simplified procedure to allow easier access to justice for cases involving smaller monetary values.</p>
                    <div class="court-metadata">
                        <div class="metadata-item">
                            <i class="fas fa-map-marker-alt"></i> <span>Multiple locations</span>
                        </div>
                        <div class="metadata-item">
                            <i class="fas fa-calendar-alt"></i> <span>Est. 1998</span>
                        </div>
                        <div class="metadata-item">
                            <i class="fas fa-money-bill-wave"></i> <span>Minor Disputes</span>
                        </div>
                    </div>
                </div>
                <div class="court-card-footer">
                    <a href="small-claims-court.php" class="btn btn-outline">View Details</a>
                </div>
            </div>
            
            <!-- Magistrate Courts -->
            <div class="court-card" data-type="magistrate" data-established="1907">
                <div class="court-card-header">
                    <div class="court-type">Magistrate Court</div>
                    <div class="court-icon"><i class="fas fa-university"></i></div>
                </div>
                <div class="court-card-body">
                    <h3>Magistrate Courts</h3>
                    <p>Magistrate Courts are the primary courts of first instance, handling a wide range of civil and criminal matters across the country, serving as the most accessible level of the judiciary.</p>
                    <div class="court-metadata">
                        <div class="metadata-item">
                            <i class="fas fa-map-marker-alt"></i> <span>Multiple locations</span>
                        </div>
                        <div class="metadata-item">
                            <i class="fas fa-calendar-alt"></i> <span>Est. 1907</span>
                        </div>
                        <div class="metadata-item">
                            <i class="fas fa-gavel"></i> <span>First Instance</span>
                        </div>
                    </div>
                </div>
                <div class="court-card-footer">
                    <a href="magistrate-court.php" class="btn btn-outline">View Details</a>
                </div>
            </div>
        </div>
        
        <div class="no-results-message" style="display: none;">
            <div class="message-icon"><i class="fas fa-search"></i></div>
            <h3>No courts found</h3>
            <p>No courts match your current search criteria. Try adjusting your filters or search term.</p>
            <button class="btn btn-primary reset-filters">Reset Filters</button>
        </div>
    </div>
</section>

<?php
// Remaining sections will be added in separate files
$pageContent = ob_get_clean();
include('template.php');
?>
