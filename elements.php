<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmaceutical Elements - Pharmacovigilance Course</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <style>
        .pharma-table-container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            overflow: hidden;
            margin: 30px 0;
        }
        
        .pharma-table {
            width: 100%;
            border-collapse: collapse;
            margin: 0;
        }
        
        .pharma-table thead {
            background: linear-gradient(135deg, #7b2cbf 0%, #5a1d91 100%);
            color: #fff;
        }
        
        .pharma-table th {
            padding: 15px 20px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 14px;
            border: none;
        }
        
        .pharma-table td {
            padding: 12px 20px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
            color: #555;
            transition: all 0.3s ease;
        }
        
        .pharma-table tbody tr:hover {
            background: #f8f9ff;
            transform: translateY(-1px);
            box-shadow: 0 2px 8px rgba(123, 44, 191, 0.1);
        }
        
        .pharma-table tbody tr:nth-child(even) {
            background: #fafbff;
        }
        
        .pharma-table tbody tr:nth-child(even):hover {
            background: #f0f2ff;
        }
        
        .category-cell {
            font-weight: 600;
            color: #7b2cbf;
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 0.5px;
        }
        
        .drug-cell {
            font-weight: 500;
            color: #333;
        }
        
        .search-container {
            margin: 20px 0;
            position: relative;
        }
        
        .search-input {
            width: 100%;
            padding: 12px 45px 12px 20px;
            border: 2px solid #e0e6ed;
            border-radius: 25px;
            font-size: 14px;
            transition: all 0.3s ease;
        }
        
        .search-input:focus {
            outline: none;
            border-color: #7b2cbf;
            box-shadow: 0 0 0 3px rgba(123, 44, 191, 0.1);
        }
        
        .search-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #7b2cbf;
            font-size: 16px;
        }
        
        .table-header {
            background: linear-gradient(135deg, #7b2cbf 0%, #5a1d91 100%);
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        .table-header h2 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }
        
        .table-stats {
            display: flex;
            justify-content: space-around;
            padding: 15px;
            background: #f8f9ff;
            border-bottom: 1px solid #eee;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-number {
            font-size: 20px;
            font-weight: 700;
            color: #7b2cbf;
        }
        
        .stat-label {
            font-size: 12px;
            color: #666;
            text-transform: uppercase;
        }
        
        .category-section {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            margin-bottom: 25px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .category-section:hover {
            box-shadow: 0 8px 25px rgba(123, 44, 191, 0.15);
            transform: translateY(-2px);
        }
        
        .category-header {
            background: linear-gradient(135deg, #7b2cbf 0%, #5a1d91 100%);
            color: #fff;
            padding:3px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .category-header h3 {
            margin: 0;
            font-size: 18px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .product-count {
            background: rgba(255,255,255,0.2);
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: 500;
        }
        
        .products-grid {
            padding: 20px 25px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 12px;
        }
        
        .product-item {
            background: #f8f9ff;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            color: #333;
            border-left: 4px solid #7b2cbf;
            transition: all 0.3s ease;
        }
        
        .product-item:hover {
            background: #e8ebff;
            transform: translateX(5px);
        }
        
        @media (max-width: 768px) {
            .category-header {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }
            
            .products-grid {
                grid-template-columns: 1fr;
                padding: 15px 20px;
            }
            
            .product-item {
                font-size: 13px;
                padding: 10px 14px;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
  <section class="banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
      <div class="banner_content text-center">
        <h2>products</h2>
        <div class="page_link">
          <a href="index.php">Home</a>
          <a href="elements.php">products</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Company Description Section -->
<section class="company-description py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="description-content">
                    <div class="company-text">
                        <strong>Cyntureglobal</strong> is a well-established and trusted exporter of high-quality pharmaceutical and
                        nutraceutical products, with over <strong>5 years</strong> of strong expertise in supplying to various international
                        markets.<br><br>
                        We firmly believe that every patient deserves access to safe, effective, and affordable medicines—
                        and our mission is to make that a reality. Based on the customer's requirements, we can supply a
                        wide range of pharmaceutical and nutraceutical products manufactured in facilities approved by
                        leading global regulatory authorities.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Tabs Section -->
<section class="product-tabs-section py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs product-nav-tabs justify-content-center" id="productTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="healthcare-tab" data-toggle="tab" href="#healthcare" role="tab" aria-controls="healthcare" aria-selected="true">
                            Healthcare - Nutraceuticals
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pharmaceutical-tab" data-toggle="tab" href="#pharmaceutical" role="tab" aria-controls="pharmaceutical" aria-selected="false">
                            Pharmaceutical Categories Database
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="tab-content" id="productTabsContent">
    <!-- Healthcare Tab Content -->
    <div class="tab-pane fade show active" id="healthcare" role="tabpanel" aria-labelledby="healthcare-tab">

    <style>
        .company-description {
            background: #f8f9fa;
        }
        
        .company-text {
            font-size: 17px;
            line-height: 1.8;
            color: #444;
            margin: 0;
            padding: 40px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            text-align: center;
            border-left: 5px solid #7b2cbf;
            position: relative;
        }
        
        .company-text::before {
            content: '🏥';
            font-size: 30px;
            position: absolute;
            top: 15px;
            left: 20px;
        }
        
        .company-text strong {
            color: #7b2cbf;
            font-weight: 600;
        }
        
        .product-tabs-section {
            background: #fff;
            /* border-bottom: 1px solid #eee; */
        }
        
        /* .product-nav-tabs {
            border-bottom: 2px solid #7b2cbf;
        }
         */
        .product-nav-tabs .nav-link {
            color: #666;
            font-weight: 600;
            padding: 15px 30px;
            border: none;
            border-radius: 0;
            background: transparent;
            transition: all 0.3s ease;
        }
        
        .product-nav-tabs .nav-link:hover {
            color: #7b2cbf;
            background: #f8f9ff;
        }
        
        .product-nav-tabs .nav-link.active {
            color: blue;
            background: #fff;
            border-bottom: 2px solid blue;
        }
        
        .tab-content {
            background: #f8f9fb;
        }
  .healthcare-section {
    background: #f8f9fb;
    padding: 60px 0;
    font-family: "Poppins", sans-serif;
  }

  .healthcare-container {
    width: 90%;
    max-width: 1100px;
    margin: auto;
    margin-top: 0px;
  }

  .healthcare-title {
    text-align: center;
    font-size: 30px;
    font-weight: 700;
    color: #7b2cbf;
    margin-bottom: 40px;
  }

  .health-card {
    background: #ffffff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    margin-bottom: 20px;
    border-left: 5px solid #7b2cbf;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  .health-card:hover {
    box-shadow: 0 8px 25px rgba(123, 44, 191, 0.15);
    transform: translateY(-3px);
  }

  .health-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(135deg, #7b2cbf 0%, #5a1d91 100%);
  }

  .health-card h3 {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 18px;
    color: #7b2cbf;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .health-card h3::before {
    content: '💊';
    font-size: 18px;
  }

  .health-card ul {
    margin: 0;
    padding-left: 0;
    list-style: none;
  }

  .health-card ul li {
    margin-bottom: 8px;
    font-size: 14px;
    line-height: 1.6;
    color: #555;
    padding: 8px 12px;
    background: #f8f9ff;
    border-radius: 6px;
    border-left: 3px solid #7b2cbf;
    transition: all 0.2s ease;
  }

  .health-card ul li:hover {
    background: #e8ebff;
    transform: translateX(5px);
  }
 table td.sno-cell,
table th.sno-cell {
    width: 60px !important;
    min-width: 60px !important;
    max-width: 60px !important;
    text-align: center !important;
    font-weight: 600 !important;
    white-space: nowrap !important;
}



</style>

<section class="healthcare-section">
  <div class="healthcare-container">
    <h2 class="healthcare-title">Healthcare - Nutraceuticals</h2>
    <p style="text-align: center; font-size: 16px; color: #666; margin-bottom: 40px;">High-quality nutraceutical products for global healthcare markets</p>

    <!-- Card 1 -->
    <div class="health-card">
      <h3>Vitamins & Minerals</h3>
      <ul>
        <li>Vitamin A (Palmitate, Acetate, Beta Carotene)</li>
        <li>Vitamin A & D combinations</li>
        <li>Vitamin E variants (natural and synthetic)</li>
        <li>Vitamin E (Water Dispersible, Mixed Tocopherols)</li>
        <li>Vitamin B1, B2, B6, B12</li>
        <li>Nicotinamide</li>
        <li>Calcium Pantothenate</li>
      </ul>
    </div>

    <!-- Card 2 -->
    <div class="health-card">
      <h3>Herbal Concentrate Products</h3>
      <ul>
        <li>Garlic oil and odourless garlic extracts</li>
        <li>Aloe Vera, Bilberry, Ginseng (Korean, Siberian), Milk Thistle</li>
        <li>Grape Seed, Green Tea, Ginkgo Biloba, Lutein, Cranberry, Juniper Berry, etc.</li>
      </ul>
    </div>

    <!-- Card 3 -->
    <div class="health-card">
      <h3>Essential Fatty Acids</h3>
      <ul>
        <li>Flaxseed, Evening Primrose, Pumpkin Seed, Safflower, Sunflower, Coconut</li>
        <li>Rice Bran, Avocado, Oregano, Black Currant, Borage, Hemp, Perilla</li>
        <li>Pomegranate, Peppermint, Fennel, Ginger, Wheat Germ, Sea Buckthorn, etc.</li>
      </ul>
    </div>

    <!-- Card 4 -->
    <div class="health-card">
      <h3>Marine Lipid Concentrates</h3>
      <ul>
        <li>Fish Oils (EPA/DHA variants), Cod Liver, Salmon, Tuna, Krill</li>
        <li>Squalene, Shark Liver, Seal Oil, etc.</li>
      </ul>
    </div>

    <!-- Card 5 -->
    <div class="health-card">
      <h3>Specialty Products</h3>
      <ul>
        <li>Co-Enzyme Q10 variants, Collagen, Hyaluronic Acid, Lycopene</li>
        <li>Glucosamine–Chondroitin, Nattokinase, Policosanol</li>
        <li>Red Yeast Extract, Bee Propolis, Royal Jelly, etc.</li>
      </ul>
    </div>

    <!-- Card 6 -->
    <div class="health-card">
      <h3>Calcitriol & Calcium Capsules</h3>
      <ul>
        <li>Formulations combining Vitamin D3, Calcium Carbonate, Zinc, and supporting minerals</li>
      </ul>
    </div>

    <!-- Card 7 -->
    <div class="health-card">
      <h3>Multivitamins & Multiminerals</h3>
      <ul>
        <li>Basic formulations to advanced blends with herbal extracts, amino acids, antioxidants, and trace elements</li>
      </ul>
    </div>

    <!-- Card 8 -->
    <div class="health-card">
      <h3>All Types of Herbs & Herbal Products</h3>
      <ul>
        <li>Comprehensive herbal product database</li>
      </ul>
    </div>

  </div>
</section>
    </div>
    
    <!-- Pharmaceutical Tab Content -->
    <div class="tab-pane fade" id="pharmaceutical" role="tabpanel" aria-labelledby="pharmaceutical-tab">
    <section class="healthcare-section">
        <div class="healthcare-container">
            <h2 class="healthcare-title">Pharmaceutical Categories Database</h2>
            <p style="text-align: center; font-size: 16px; color: #666; margin-bottom: 40px;">Comprehensive database organized by therapeutic categories for pharmacovigilance studies and clinical research.</p>
        
            <div class="search-container">
                <input type="text" class="search-input" id="searchInput" placeholder="Search by category or drug name...">
                <i class="fa fa-search search-icon"></i>
            </div>
            
            <!-- Vitamins & Minerals Category -->
            <div class="category-section" data-category="vitamins-minerals">
                <div class="category-header">
                    <h3><i class="fa fa-capsules"></i> Vitamins & Minerals</h3>
                    <span class="product-count">14 Products</span>
                </div>
                <div class="products-grid">
                    <div class="product-item">Vitamin A (Palmitate)</div>
                    <div class="product-item">Vitamin A (Acetate)</div>
                    <div class="product-item">Vitamin A (Beta Carotene)</div>
                    <div class="product-item">Vitamin A & D Combinations</div>
                    <div class="product-item">Vitamin E (Natural)</div>
                    <div class="product-item">Vitamin E (Synthetic)</div>
                    <div class="product-item">Vitamin E (Water Dispersible)</div>
                    <div class="product-item">Vitamin E (Mixed Tocopherols)</div>
                    <div class="product-item">Vitamin B1</div>
                    <div class="product-item">Vitamin B2</div>
                    <div class="product-item">Vitamin B6</div>
                    <div class="product-item">Vitamin B12</div>
                    <div class="product-item">Nicotinamide</div>
                    <div class="product-item">Calcium Pantothenate</div>
                </div>
            </div>
            
            <!-- Herbal Concentrates Category -->
            <div class="category-section" data-category="herbal-concentrates">
                <div class="category-header">
                    <h3><i class="fa fa-leaf"></i> Herbal Concentrates</h3>
                    <span class="product-count">13 Products</span>
                </div>
                <div class="products-grid">
                    <div class="product-item">Garlic Oil</div>
                    <div class="product-item">Odourless Garlic Extracts</div>
                    <div class="product-item">Aloe Vera</div>
                    <div class="product-item">Bilberry</div>
                    <div class="product-item">Korean Ginseng</div>
                    <div class="product-item">Siberian Ginseng</div>
                    <div class="product-item">Milk Thistle</div>
                    <div class="product-item">Grape Seed</div>
                    <div class="product-item">Green Tea</div>
                    <div class="product-item">Ginkgo Biloba</div>
                    <div class="product-item">Lutein</div>
                    <div class="product-item">Cranberry</div>
                    <div class="product-item">Juniper Berry</div>
                </div>
            </div>
            
            <!-- Essential Fatty Acids Category -->
            <div class="category-section" data-category="essential-fatty-acids">
                <div class="category-header">
                    <h3><i class="fa fa-seedling"></i> Essential Fatty Acids</h3>
                    <span class="product-count">19 Products</span>
                </div>
                <div class="products-grid">
                    <div class="product-item">Flaxseed</div>
                    <div class="product-item">Evening Primrose</div>
                    <div class="product-item">Pumpkin Seed</div>
                    <div class="product-item">Safflower</div>
                    <div class="product-item">Sunflower</div>
                    <div class="product-item">Coconut</div>
                    <div class="product-item">Rice Bran</div>
                    <div class="product-item">Avocado</div>
                    <div class="product-item">Oregano</div>
                    <div class="product-item">Black Currant</div>
                    <div class="product-item">Borage</div>
                    <div class="product-item">Hemp</div>
                    <div class="product-item">Perilla</div>
                    <div class="product-item">Pomegranate</div>
                    <div class="product-item">Peppermint</div>
                    <div class="product-item">Fennel</div>
                    <div class="product-item">Ginger</div>
                    <div class="product-item">Wheat Germ</div>
                    <div class="product-item">Sea Buckthorn</div>
                </div>
            </div>
            
            <!-- Marine Lipid Concentrates Category -->
            <div class="category-section" data-category="marine-lipids">
                <div class="category-header">
                    <h3><i class="fa fa-fish"></i> Marine Lipid Concentrates</h3>
                    <span class="product-count">8 Products</span>
                </div>
                <div class="products-grid">
                    <div class="product-item">Fish Oils (EPA/DHA variants)</div>
                    <div class="product-item">Cod Liver</div>
                    <div class="product-item">Salmon</div>
                    <div class="product-item">Tuna</div>
                    <div class="product-item">Krill</div>
                    <div class="product-item">Squalene</div>
                    <div class="product-item">Shark Liver</div>
                    <div class="product-item">Seal Oil</div>
                </div>
            </div>
            
            <!-- Specialty Products Category -->
            <div class="category-section" data-category="specialty-products">
                <div class="category-header">
                    <h3><i class="fa fa-star"></i> Specialty Products</h3>
                    <span class="product-count">10 Products</span>
                </div>
                <div class="products-grid">
                    <div class="product-item">Co-Enzyme Q10 variants</div>
                    <div class="product-item">Collagen</div>
                    <div class="product-item">Hyaluronic Acid</div>
                    <div class="product-item">Lycopene</div>
                    <div class="product-item">Glucosamine-Chondroitin</div>
                    <div class="product-item">Nattokinase</div>
                    <div class="product-item">Policosanol</div>
                    <div class="product-item">Red Yeast Extract</div>
                    <div class="product-item">Bee Propolis</div>
                    <div class="product-item">Royal Jelly</div>
                </div>
            </div>
            
            <!-- Calcitriol & Calcium Category -->
            <div class="category-section" data-category="calcitriol-calcium">
                <div class="category-header">
                    <h3><i class="fa fa-bone"></i> Calcitriol & Calcium</h3>
                    <span class="product-count">4 Products</span>
                </div>
                <div class="products-grid">
                    <div class="product-item">Vitamin D3</div>
                    <div class="product-item">Calcium Carbonate</div>
                    <div class="product-item">Zinc</div>
                    <div class="product-item">Supporting Minerals</div>
                </div>
            </div>
            
            <!-- Multivitamins & Multiminerals Category -->
            <div class="category-section" data-category="multivitamins">
                <div class="category-header">
                    <h3><i class="fa fa-tablets"></i> Multivitamins & Multiminerals</h3>
                    <span class="product-count">5 Products</span>
                </div>
                <div class="products-grid">
                    <div class="product-item">Basic Formulations</div>
                    <div class="product-item">Advanced Blends with Herbal Extracts</div>
                    <div class="product-item">Amino Acids</div>
                    <div class="product-item">Antioxidants</div>
                    <div class="product-item">Trace Elements</div>
                </div>
            </div>
            
            <!-- Herbal Products Category -->
            <div class="category-section" data-category="herbal-products">
                <div class="category-header">
                    <h3><i class="fa fa-spa"></i> Herbal Products</h3>
                    <span class="product-count">2 Products</span>
                </div>
                <div class="products-grid">
                    <div class="product-item">All Types of Herbs</div>
                    <div class="product-item">Herbal Products</div>
                </div>
            </div>
            
            <!-- Anti Cough Category -->
            <div class="category-section" data-category="anti-cough">
                <div class="category-header">
                    <h3><i class="fa fa-lungs"></i> Anti Cough</h3>
                    <span class="product-count">5 Products</span>
                </div>
                <div class="products-grid">
                    <div class="product-item">Ambroxol + carbocistene</div>
                    <div class="product-item">Paracetamol + CPM + Cetirizine + Detromethorphan HBR</div>
                    <div class="product-item">Levocet + phenyleph + Ambroxol HCL + Guaiphenesin</div>
                    <div class="product-item">Ambroxol + salbutamol + guaiphenesin</div>
                    <div class="product-item">Cetirizine + Phenylephrine + Menthol + Dextromethorphan Hydrobromide</div>
                </div>
            </div>
            
            <!-- Anti Diabetic Category -->
            <div class="category-section" data-category="anti-diabetic">
                <div class="category-header">
                    <h3><i class="fa fa-heartbeat"></i> Anti Diabetic</h3>
                    <span class="product-count">31 Products</span>
                </div>
                <div class="products-grid">
                    <div class="product-item">Glibenclamide + Metformin hydrochloride</div>
                    <div class="product-item">GLIMEPRIDE + Metformin hydrochloride HCL</div>
                    <div class="product-item">GLIPIZIDE</div>
                    <div class="product-item">GLIPIZIDE + METFORMIN HYDROCHLORIDE</div>
                    <div class="product-item">PIOGLITAZONE HYDROCHLORIDE + METFORMIN HYDROCHLORIDE</div>
                    <div class="product-item">METFORMIN HYDROCHLORIDE</div>
                    <div class="product-item">PIOGLITAZONE + METFORMIN</div>
                    <div class="product-item">GLIMEPRIDE + PIOGLITAZONE + METFORMIN</div>
                    <div class="product-item">GLIMEPRIDE + PIOGLITAZONE</div>
                    <div class="product-item">Glimepride + Metformin</div>
                    <div class="product-item">Rosiglitazone + Metformin</div>
                    <div class="product-item">Metformin + Glimepride + Rosiglitazone</div>
                    <div class="product-item">Rosiglitazone + Gliclazide</div>
                    <div class="product-item">Acarbose</div>
                    <div class="product-item">Gliclazide + Metformin</div>
                    <div class="product-item">Metformin + Mecobalamin</div>
                    <div class="product-item">Glimepride Tablets</div>
                    <div class="product-item">Glimepiride + Metformin hydrochloride</div>
                    <div class="product-item">Pioglitazone HCL + Metformin HCL</div>
                    <div class="product-item">Glimepiride, Pioglitazone & Metformin HCL SR</div>
                    <div class="product-item">Pioglitazone + Metformin SR + Glimepiride</div>
                    <div class="product-item">Pioglitazone hydrochloride</div>
                    <div class="product-item">Pioglitazone HCL + Metformin HCL + Glimepiride</div>
                    <div class="product-item">Rosiglitazone maleate</div>
                    <div class="product-item">Glimepiride Pioglitazone & Metformin HCL SR</div>
                    <div class="product-item">Metformin HCL SR + Pioglitazone + Glibenclamide</div>
                </div>
            </div>
            
            <!-- Anti Emetic Category -->
            <div class="category-section" data-category="anti-emetic">
                <div class="category-header">
                    <h3><i class="fa fa-pills"></i> Anti Emetic</h3>
                    <span class="product-count">4 Products</span>
                </div>
                <div class="products-grid">
                    <div class="product-item">Mosapride</div>
                    <div class="product-item">Domperidone</div>
                    <div class="product-item">Granisetron</div>
                    <div class="product-item">Ondensteron + Paracetamol</div>
                </div>
            </div>
            
            <!-- Anti Fungal Category -->
            <div class="category-section" data-category="anti-fungal">
                <div class="category-header">
                    <h3><i class="fa fa-shield-alt"></i> Anti Fungal</h3>
                    <span class="product-count">2 Products</span>
                </div>
                <div class="products-grid">
                    <div class="product-item">CLOTRIMAZOLE CREAM</div>
                    <div class="product-item">Fluconazole</div>
                </div>
            </div>
            
            <!-- Anti Histaminic Category -->
            <div class="category-section" data-category="anti-histaminic">
                <div class="category-header">
                    <h3><i class="fa fa-allergies"></i> Anti Histaminic</h3>
                    <span class="product-count">10 Products</span>
                </div>
                <div class="products-grid">
                    <div class="product-item">Levocetrizine + Phenylepherine HCL</div>
                    <div class="product-item">Paracetamol + Levocetrizine + Phenylepherine</div>
                    <div class="product-item">Fexofenadine</div>
                    <div class="product-item">Diephen hydramine HCL + Ammonium Cl + Sodium Cit.</div>
                    <div class="product-item">Levocetrizine</div>
                    <div class="product-item">Cypropheptadine</div>
                    <div class="product-item">Phenylepherine + Chlorphenyramine Maleate</div>
                    <div class="product-item">Levocetrizine Dihydrochloride</div>
                    <div class="product-item">Montelukast Sodium</div>
                    <div class="product-item">Levocertirizine</div>
                </div>
            </div>
            
            <!-- Anti Hypertensive Category -->
            <div class="category-section" data-category="anti-hypertensive">
                <div class="category-header">
                    <h3><i class="fa fa-heart"></i> Anti Hypertensive</h3>
                    <span class="product-count">33 Products</span>
                </div>
                <div class="products-grid">
                    <div class="product-item">METOPROLOL SUCCINATE USP</div>
                    <div class="product-item">Telmisartan</div>
                    <div class="product-item">TELMISARTAN + HYDROCHLOROTHIAZIDE</div>
                    <div class="product-item">Metroprolol</div>
                    <div class="product-item">Metroprolol + Amlodipine</div>
                    <div class="product-item">Esamlodipine + Atendol</div>
                    <div class="product-item">Esamlodipine + Losartan Potassium</div>
                    <div class="product-item">Losartan Potassium</div>
                    <div class="product-item">Metoprolol Hydrochlorthiazide</div>
                    <div class="product-item">Metoprolol Succinate</div>
                    <div class="product-item">Metoprolol + Amlodipine</div>
                    <div class="product-item">Amlodipine + Bisoprolol</div>
                    <div class="product-item">Losartan + HTZ</div>
                    <div class="product-item">Amlodipine Besilate</div>
                    <div class="product-item">Amlodipine + Benazepril</div>
                    <div class="product-item">Amlodipine + Losartan Potassium</div>
                    <div class="product-item">Amiodarone Tablet IP</div>
                    <div class="product-item">Ramipril</div>
                    <div class="product-item">Ramipril + Amlodipine</div>
                    <div class="product-item">Metoprolol Succinate Extended Release</div>
                    <div class="product-item">Metroprolol Succinate ER and Amlodipine Tablets</div>
                    <div class="product-item">Amlodipine</div>
                    <div class="product-item">Telmisartan + Amlodipine</div>
                    <div class="product-item">Losartan Potassium + Amlodipine</div>
                    <div class="product-item">S(-) Amlodipine Besilate Tablets</div>
                    <div class="product-item">Atorvastatin & Amlodipine Tablets</div>
                    <div class="product-item">Losartan Potassium and Ramipril</div>
                    <div class="product-item">Metroprolol Succinate (ER) and Amlodipine Besilate</div>
                    <div class="product-item">Metroprolol Succinate (ER) and Hydrochlorothiazide</div>
                    <div class="product-item">Ramipril & Hydrochlorothiazide</div>
                    <div class="product-item">Propranolol HCL Sustained Release</div>
                    <div class="product-item">Nifedipine Sustained Release</div>
                    <div class="product-item">Metoprolol Succinate (ER) and Amlodipine Besilate</div>
                </div>
            </div>
            
            <!-- Anti Lipidemic Category -->
            <div class="category-section" data-category="anti-lipidemic">
                <div class="category-header">
                    <h3><i class="fa fa-chart-line"></i> Anti Lipidemic</h3>
                    <span class="product-count">3 Products</span>
                </div>
                <div class="products-grid">
                    <div class="product-item">Atorvastatin</div>
                    <div class="product-item">Atorvastatin + Ezetimibe</div>
                    <div class="product-item">Atorvastatin + Fenofibrate</div>
                </div>
            </div>
        </div>
    </section>
    </div>
</div>

    <?php include 'includes/footer.php'; ?>

    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    
    <script>
        // Search functionality
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            const sections = document.querySelectorAll('.category-section');
            
            sections.forEach(section => {
                const categoryName = section.querySelector('.category-header h3').textContent.toLowerCase();
                const products = section.querySelectorAll('.product-item');
                let hasVisibleProducts = false;
                
                products.forEach(product => {
                    const productName = product.textContent.toLowerCase();
                    if (categoryName.includes(searchTerm) || productName.includes(searchTerm)) {
                        product.style.display = '';
                        hasVisibleProducts = true;
                    } else {
                        product.style.display = 'none';
                    }
                });
                
                section.style.display = hasVisibleProducts ? '' : 'none';
            });
        });
    </script>
</body>
</html>