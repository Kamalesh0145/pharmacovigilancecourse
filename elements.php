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
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
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
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
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
            padding: 3px 25px;
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
            background: rgba(255, 255, 255, 0.2);
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
                                PHARMACEUTICAL - PRODUCTS
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
                    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
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
                    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
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
                    <h2 class="healthcare-title">Our High-quality pharmaceutical products for global healthcare markets</h2>
                    <p style="text-align: center; font-size: 16px; color: #666; margin-bottom: 40px;">Comprehensive database organized by therapeutic categories for pharmacovigilance studies and clinical research.</p>
                    <div class="search-container">
                        <input type="text" class="search-input" id="searchInput" placeholder="Search by category or drug name...">
                        <i class="fa fa-search search-icon"></i>
                    </div>

                    <!-- 1 Alcohol antagonist -->
                    <div class="category-section" data-category="anti-lipidemic">
                        <div class="category-header">
                            <h3><i class="fa fa-chart-line"></i> Alcohol antagonist</h3>
                            <span class="product-count">1 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Seleno methionine</div>
                        </div>
                    </div>

                    <!-- 2 Anti Cancer Products -->
                    <div class="category-section" data-category="anti-cancer">
                        <div class="category-header">
                            <h3><i class="fa fa-ribbon"></i> Anti Cancer Products</h3>
                            <span class="product-count">34 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Cisplatin</div>
                            <div class="product-item">Oxaliplatin</div>
                            <div class="product-item">Carbonplatin</div>
                            <div class="product-item">Doxorubicin</div>
                            <div class="product-item">Epirubicin</div>
                            <div class="product-item">Paclitaxel</div>
                            <div class="product-item">Docetaxel</div>
                            <div class="product-item">Zoledronic Acid </div>
                            <div class="product-item">Gemcitabine</div>
                            <div class="product-item">Cyclophosphamide</div>
                            <div class="product-item">Leucovarine calicum</div>
                            <div class="product-item">Etoposide</div>
                            <div class="product-item">Bortezomib</div>
                            <div class="product-item">Pemetrexed</div>
                            <div class="product-item">Bleomycin</div>
                            <div class="product-item">Dacarbazine</div>
                            <div class="product-item">Curcumin</div>
                            <div class="product-item">Hydroxy Urea</div>
                            <div class="product-item">Voriconazole</div>
                            <div class="product-item">Anastrazole</div>
                            <div class="product-item">Methotrexate</div>
                            <div class="product-item">Biclutamide</div>
                            <div class="product-item">Melphalan</div>
                            <div class="product-item">Temozolomide</div>
                            <div class="product-item">Imatinib</div>
                            <div class="product-item">Gefitinib</div>
                            <div class="product-item">Capectabine</div>
                            <div class="product-item">Magestrol Acetate</div>
                            <div class="product-item">Lenalidomide</div>
                            <div class="product-item">Thalidomide</div>
                            <div class="product-item">Erlotimib</div>
                            <div class="product-item">Brotizumab</div>
                            <div class="product-item">Premetrexed</div>
                            <div class="product-item">Aleocin</div>
                        </div>
                    </div>

                    <!--3 Anti Cough Category -->
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
                            <div class="product-item">Cetirizine+Phenylephrine+Menthol+Dextromethorphan Hydrobromide</div>
                        </div>
                    </div>

                    <!-- 4 Anti Diabetic Category -->
                    <div class="category-section" data-category="anti-diabetic">
                        <div class="category-header">
                            <h3><i class="fa fa-heartbeat"></i> Anti Diabetic</h3>
                            <span class="product-count">25 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item"> Glibenclamide + Metformin hydrochloride</div>
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
                            <div class="product-item">Metformin HCL SR + Pioglitazone + Glibenclamide</div>
                        </div>
                    </div>

                    <!--5 Anti Emetic Category -->
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

                    <!--6 Anti Fungal Category -->
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

                    <!--7 Anti Histaminic Category -->
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

                    <!--8 Anti Hypertensive Category -->
                    <div class="category-section" data-category="anti-hypertensive">
                        <div class="category-header">
                            <h3><i class="fa fa-heart"></i> Anti Hypertensive</h3>
                            <span class="product-count">35 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">METOPROLOL SUCCINATE USP</div>
                            <div class="product-item">Telmisartan</div>
                            <div class="product-item">TELMISARTAN + HYDROCHLOROTHIAZIDE</div>
                            <div class="product-item">Metroprolol</div>
                            <div class="product-item">Metroprolol + Amoldipine</div>
                            <div class="product-item">Esamlodipne + Atendol</div>
                            <div class="product-item">Esamlodipne + Losartan Potassium</div>
                            <div class="product-item">Losartian Potassium</div>
                            <div class="product-item">Metoprolol Hydrochlorthiazide</div>
                            <div class="product-item">Metoprolol Succinate</div>
                            <div class="product-item">Metoprolol + Amlodipine</div>
                            <div class="product-item">Amloclipine + Bisoprolol</div>
                            <div class="product-item">Losartan + HTZ</div>
                            <div class="product-item">Amoldipine Besitate</div>
                            <div class="product-item">Amoldipine + Benazepril</div>
                            <div class="product-item">Amoldipine + Losartan Potassium</div>
                            <div class="product-item">Amiodarone Tablet IP</div>
                            <div class="product-item">Ramipril</div>
                            <div class="product-item">Ramipril + Amoldipine</div>
                            <div class="product-item">Metoprolol Succinate Extended Release</div>
                            <div class="product-item">Metroprolol Succinate ER and Amoldipine Tablets</div>
                            <div class="product-item">Amoldipine</div>
                            <div class="product-item">Losartian Potassium</div>
                            <div class="product-item">Telmisartan + Amlodipine</div>
                            <div class="product-item">Loasartian Potassium + Amlodipine</div>
                            <div class="product-item">S(-) Amlodipine Besliate Tablets</div>
                            <div class="product-item">Atorvastatin & Amlodipine Tablets</div>
                            <div class="product-item">Telmisartan + Amlodipine</div>
                            <div class="product-item">Loasartian Potassium and Rampril</div>
                            <div class="product-item">Metroprolol Succinate (ER) and Amlodipine Besliate</div>
                            <div class="product-item">Metroprolol Succinate (ER) and Hydrochlorothiazide</div>
                            <div class="product-item">Ramipril</div>
                            <div class="product-item">Ramipril & Hydrochlorothiazide</div>
                            <div class="product-item">Propranolol HCL Sustained Release</div>
                            <div class="product-item">Losartan Potassium</div>
                            <div class="product-item">Nifedipine Sustained Release</div>
                            <div class="product-item">Metoprolol Succinated (ER) and Amlodipine Besilate</div>
                        </div>
                    </div>

                    <!--9 Anti Ilipedimic  Category -->
                    <div class="category-section" data-category="anti-lipidemic">
                        <div class="category-header">
                            <h3><i class="fa fa-chart-line"></i> Anti Lipidemic</h3>
                            <span class="product-count">12 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Atorvasatin</div>
                            <div class="product-item">Atorvasatin + Ezetimbe</div>
                            <div class="product-item">Atorvasatin + Fenofibrate</div>
                            <div class="product-item">Imvaststin + Ezetimbe</div>
                            <div class="product-item">Simvaststin</div>
                            <div class="product-item">Atorvasatin and Aspirin Capsules</div>
                            <div class="product-item">Atorvasatin and Fenofibrate (Micronised) Tablets</div>
                            <div class="product-item">Atorvasatin Calcium Tablets</div>
                            <div class="product-item">Atorvastatin + clopidogrel + Aspririn</div>
                            <div class="product-item">Atorvastatin + Ramiprill + Asprinin</div>
                            <div class="product-item">Clopidogrel</div>
                            <div class="product-item">Clopidogrel + Aspirin</div>
                        </div>
                    </div>

                    <!--10 Anti infective/ Anti biotic -->
                    <div class="category-section" data-category="anti-infective">
                        <div class="category-header">
                            <h3><i class="fa fa-bacteria"></i> Anti infective/ Anti biotic</h3>
                            <span class="product-count">32 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Ofloxacin ornidazole</div>
                            <div class="product-item">Gatifloxacin Sesquihydrate + Ornidazole</div>
                            <div class="product-item">Levofloxation</div>
                            <div class="product-item">Doxycycline Hydro Chloride</div>
                            <div class="product-item">Levofloxacin + Ambroxol</div>
                            <div class="product-item">Levofloxacin + Ornidazole</div>
                            <div class="product-item">Ofloxacin + Ornidazole</div>
                            <div class="product-item">Levofloxacin + Ambroxol</div>
                            <div class="product-item">Levofloxacin</div>
                            <div class="product-item">Ofloxacin + Ornidazole</div>
                            <div class="product-item">Secnidazole</div>
                            <div class="product-item">Amoxycillin Trihydrate</div>
                            <div class="product-item">Amoxycillin + Dicloxacillin</div>
                            <div class="product-item">Amoxycillin Trihydrate + Clavulanic Acid</div>
                            <div class="product-item">Amoxycillin Trihydrate + Potassium Clavulanate</div>
                            <div class="product-item">Amoxycillin Trihydrate + Clavulanic Potassium</div>
                            <div class="product-item">Amoxycillin Dispersible</div>
                            <div class="product-item">Amoxycillin & Dicloxacillin Dispersible</div>
                            <div class="product-item">Cefixime + Lactic Acid Bacillus</div>
                            <div class="product-item">Cefixime + Dicloxacillin + Lactic Acid Bacillus</div>
                            <div class="product-item">Cefuroxime Axetil</div>
                            <div class="product-item">Cefixime + Dicloxacillin</div>
                            <div class="product-item">Cefixime</div>
                            <div class="product-item">Cefuroxime Axetil</div>
                            <div class="product-item">Cefuroxime + Lactic Acid Bacillus</div>
                            <div class="product-item">Cephalexin</div>
                            <div class="product-item">Cefixime</div>
                            <div class="product-item">Roxithromycin</div>
                            <div class="product-item">Azithromycin</div>
                            <div class="product-item">Azithromycin + Ambroxol</div>
                            <div class="product-item">Roxithromycin</div>
                            <div class="product-item">Secnidazole + Fluconazole + Azithromycin</div>
                        </div>
                    </div>

                    <!--11 Anti Inflammatory / Analgesic / Antipyretic -->
                    <div class="category-section" data-category="anti-inflammatory">
                        <div class="category-header">
                            <h3><i class="fa fa-fire"></i> Anti Inflammatory / Analgesic / Antipyretic</h3>
                            <span class="product-count">40 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Tramadol</div>
                            <div class="product-item">Acetaminophen + Dexibuprofen</div>
                            <div class="product-item">Acetaminophen</div>
                            <div class="product-item">Mefenamic Acid</div>
                            <div class="product-item">Diclofenac Gel</div>
                            <div class="product-item">Diclofenac Diethylamine Gel</div>
                            <div class="product-item">Diclofenac Linoleic Acid, Methyl Salicylate, Capsaicin, Menthol, and Benzyl Alcohol</div>
                            <div class="product-item">Fluticasone Dipropionate</div>
                            <div class="product-item">Serratiopeptidase</div>
                            <div class="product-item">Aceclofenac + Paracetamol</div>
                            <div class="product-item">Paracetamol + Aceclofenac + Serratiopeptidase</div>
                            <div class="product-item">Aceclofenac + Serratiopeptidase</div>
                            <div class="product-item">Paracetamol + Aceclofenac</div>
                            <div class="product-item">Trypsin + Chymotrypsin</div>
                            <div class="product-item">Aceclofenac</div>
                            <div class="product-item">Aceclofenac Sustained Release Tablets</div>
                            <div class="product-item">Aceclo + Paracetamol</div>
                            <div class="product-item">Aceclofenac 200 mg</div>
                            <div class="product-item">Tramadol + Paracetamol</div>
                            <div class="product-item">Indomethacin</div>
                            <div class="product-item">Medoxicam</div>
                            <div class="product-item">Medoxicam + Paracetamol</div>
                            <div class="product-item">Methylprednisolone</div>
                            <div class="product-item">Diclofenac Sodium</div>
                            <div class="product-item">Tramadol Hydrochloride & Paracetamol</div>
                            <div class="product-item">Prednisolone</div>
                            <div class="product-item">Aceclofence</div>
                            <div class="product-item">Trypsin + Chymotrypsin + Diclofenac Potassium</div>
                            <div class="product-item">Dexibuprofen + Paracetamol</div>
                            <div class="product-item">Nimesulide + Paracetamol</div>
                            <div class="product-item">Paracetamol + Aceclofence</div>
                            <div class="product-item">Aceclofence + Serratiopeptidase</div>
                            <div class="product-item">Serratiopeptidase</div>
                            <div class="product-item">Aceclofence + Paracetamol</div>
                            <div class="product-item">Tramadol Hydrochloride + Paracetamol</div>
                            <div class="product-item">Acetoaminophen</div>
                            <div class="product-item">Paracetamol</div>
                            <div class="product-item">Mefenamic Acid + Paracetamol</div>
                            <div class="product-item">Tramadol Hydrochloride + Paracetamol</div>
                            <div class="product-item">Paracetamol + Aceclofenac + Serratiopeptidase</div>
                        </div>
                    </div>

                    <!--12 Anti inflammatory anti fungal  -->
                    <div class="category-section" data-category="anti-fungal">
                        <div class="category-header">
                            <h3><i class="fa fa-shield-alt"></i> Anti inflammatory anti fungal</h3>
                            <span class="product-count">1 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">CLORTRIMA + BECLOMETHASONE DIPROPIONATE IP</div>
                        </div>
                    </div>

                    <!--13 Anti Malarial   -->
                    <div class="category-section" data-category="anti-fungal">
                        <div class="category-header">
                            <h3><i class="fa fa-shield-alt"></i> Anti Malarial </h3>
                            <span class="product-count">1 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Artemether + lumifantrine</div>
                        </div>
                    </div>

                    <!--14 Anti secretory / spamodic   -->
                    <div class="category-section" data-category="anti-fungal">
                        <div class="category-header">
                            <h3><i class="fa fa-shield-alt"></i> Anti secretory / spamodic </h3>
                            <span class="product-count">1 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Ranitidine + Clidinium bromide + Dicyclomine + Chlordiazepoxide</div>
                        </div>
                    </div>

                    <!--15 Anti spamodic  -->
                    <div class="category-section" data-category="anti-fungal">
                        <div class="category-header">
                            <h3><i class="fa fa-shield-alt"></i>Anti spamodic</h3>
                            <span class="product-count">1 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Drotaverine + paracetamol</div>
                        </div>
                    </div>

                    <!--16 Appetizer  -->
                    <div class="category-section" data-category="anti-fungal">
                        <div class="category-header">
                            <h3><i class="fa fa-shield-alt"></i>Appetizer</h3>
                            <span class="product-count">1 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Cyproheptadine</div>
                        </div>
                    </div>

                    <!--17 Benign prostatic hyperplasia (BPH)   -->
                    <div class="category-section" data-category="anti-fungal">
                        <div class="category-header">
                            <h3><i class="fa fa-shield-alt"></i>Benign prostatic hyperplasia (BPH) </h3>
                            <span class="product-count">2 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Tamsulosin</div>
                            <div class="product-item">Tamsulosin + Finasteride</div>
                        </div>
                    </div>


                    <!--18 Bronchodilator   -->
                    <div class="category-section" data-category="anti-fungal">
                        <div class="category-header">
                            <h3><i class="fa fa-shield-alt"></i>Bronchodilator </h3>
                            <span class="product-count">1 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Doxofylline</div>
                        </div>
                    </div>

                    <!--19 Cardio active / Cardio protective   -->
                    <div class="category-section" data-category="anti-fungal">
                        <div class="category-header">
                            <h3><i class="fa fa-shield-alt"></i>Cardio active / Cardio protective </h3>
                            <span class="product-count">1 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Minoxidill</div>
                            <div class="product-item">Aspirin + Isosorbide monoitrate</div>
                            <div class="product-item">Nitroglycerin</div>
                            <div class="product-item">Lisnopril</div>
                            <div class="product-item">Glyceryl trinitrate Sorbitrate</div>
                            <div class="product-item">Glyceryl trinitrate (GTN)</div>
                        </div>
                    </div>


                    <!--20 Diabetic Neuropathy -->
                    <div class="category-section" data-category="diabetic-neuropathy">
                        <div class="category-header">
                            <h3><i class="fa fa-brain"></i> Diabetic Neuropathy</h3>
                            <span class="product-count">22 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">chromium picolinate + vitamins</div>
                            <div class="product-item">DULOXETINE HYDROCHLORIDE + MTHYLCOBALAMIN</div>
                            <div class="product-item">Gabapentin + mecobalamin </div>
                            <div class="product-item">DULOXETINE HYDROCHLORIDE + MTHYLCOBALAMIN</div>
                            <div class="product-item">Amoxycillin + dicloxacillin</div>
                            <div class="product-item">GABAPENTIN & ALPHA LIPOIC ACID + METHYLCOBALAMIN+PYRIDOXINEHYDROCHLORIDE</div>
                            <div class="product-item">Gabapentin + mecobalamin</div>
                            <div class="product-item">Mecobalamin + Alpha-lipoic acid + Folic acid</div>
                            <div class="product-item">Pregabalin + mecobalamin + Folic acid</div>
                            <div class="product-item">pregabalin + alpha-lipoic acid</div>
                            <div class="product-item">pregabalin + mecobalamin</div>
                            <div class="product-item">pregabalin & methylcobalamin</div>
                            <div class="product-item">Multivitamins</div>
                            <div class="product-item">Gabapentine</div>
                            <div class="product-item">Gabapentine + mecobalamin</div>
                            <div class="product-item">Mecobalamin + Folic acid + B6</div>
                            <div class="product-item">Mecobalamin + gabapentine</div>
                            <div class="product-item">Pregabalin</div>
                            <div class="product-item">Duloxetine</div>
                            <div class="product-item">Gabapentin</div>
                            <div class="product-item">Pregabalin</div>
                            <div class="product-item">Gabapentin + mecobalamin </div>
                        </div>
                    </div>


                    <!--21 Diuretics   -->
                    <div class="category-section" data-category="anti-fungal">
                        <div class="category-header">
                            <h3><i class="fa fa-shield-alt"></i>Diuretics </h3>
                            <span class="product-count">1 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Trosemide + spironolactone</div>
                        </div>
                    </div>

                    <!--22 Drugs acting in central nervous system (CNS) -->
                    <div class="category-section" data-category="cns-drugs">
                        <div class="category-header">
                            <h3><i class="fa fa-head-side-virus"></i> Drugs acting in central nervous system (CNS)</h3>
                            <span class="product-count">38 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Citicholine + MCBM + B6 + FA + Metoprolol</div>
                            <div class="product-item">Escitalopram + Clonazepam</div>
                            <div class="product-item">Clopidorgrel + MCBM</div>
                            <div class="product-item">Divalporex Sodium</div>
                            <div class="product-item">Divalporex Sodium ER Tablet</div>
                            <div class="product-item">Amitryptyline</div>
                            <div class="product-item">Oxcarbazepine</div>
                            <div class="product-item">Oxcarbazepine Extended Release Tablets</div>
                            <div class="product-item">Escitalopram</div>
                            <div class="product-item">Levocertirizine</div>
                            <div class="product-item">Lamotrigine</div>
                            <div class="product-item">Clonazepam</div>
                            <div class="product-item">Mirtazepin</div>
                            <div class="product-item">Topiramate</div>
                            <div class="product-item">Olanzipine</div>
                            <div class="product-item">Resperidone</div>
                            <div class="product-item">Clozapin</div>
                            <div class="product-item">Topirmate</div>
                            <div class="product-item">Amitriptyline HCL + Chlordiazepoxide</div>
                            <div class="product-item">Amitriptyline Hydrochloride</div>
                            <div class="product-item">Divalproex Sodium</div>
                            <div class="product-item">Imipramine, Chlordiazepodixe, Trihexyphenidyl</div>
                            <div class="product-item">Escitalopram Oxalate + Clonazepam</div>
                            <div class="product-item">Sodium Valporate + Valproic Acid</div>
                            <div class="product-item">Fluxentine</div>
                            <div class="product-item">Escitalopram Oxalate</div>
                            <div class="product-item">Piracetam</div>
                            <div class="product-item">Clonazepam</div>
                            <div class="product-item">Olanzipine</div>
                            <div class="product-item">Paroxetine Hydrochloride</div>
                            <div class="product-item">Risperidone + Trihexyphenidyl</div>
                            <div class="product-item">Risperidone Tablets</div>
                            <div class="product-item">Sertraline Hydrochloride Equivalent to Sertraline</div>
                            <div class="product-item">Lithium Carbonate</div>
                            <div class="product-item">Doxepin HCI</div>
                            <div class="product-item">Aripiprazole</div>
                            <div class="product-item">Lamotrigine</div>
                            <div class="product-item">Betaahistine Dihydrochloride</div>
                        </div>
                    </div>

                    <!--23 Drugs for renal diseases  -->
                    <div class="category-section" data-category="cns-drugs">
                        <div class="category-header">
                            <h3><i class="fa fa-head-side-virus"></i>Drugs for renal diseases </h3>
                            <span class="product-count">1 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Lanthanum carbonate</div>
                        </div>
                    </div>

                    <!--24 Gastro protectives / anti ulcer / anti acids  -->
                    <div class="category-section" data-category="gastro-protectives">
                        <div class="category-header">
                            <h3><i class="fa fa-stomach"></i>Gastro protectives / anti ulcer / anti acids</h3>
                            <span class="product-count">14 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Pantoprazole + Domperidone SR</div>
                            <div class="product-item">Esomeprazole</div>
                            <div class="product-item">Mosapride + Pantoprazole</div>
                            <div class="product-item">Ofloxacin + Ornidazole</div>
                            <div class="product-item">Omeprazole</div>
                            <div class="product-item">Pantoprazole + Domperidone</div>
                            <div class="product-item">Pantoprazole and Mosapride Citrate Capsules</div>
                            <div class="product-item">Rabeprazole</div>
                            <div class="product-item">Pantoprazole + Domperidone</div>
                            <div class="product-item">Omeprazole + Domperidone</div>
                            <div class="product-item">Pantoprazole</div>
                            <div class="product-item">Famotidine</div>
                            <div class="product-item">Rabeprazole + Domperidone</div>
                            <div class="product-item">Rabeprazole</div>
                        </div>
                    </div>

                    <!--25 Gynaec -->
                    <div class="category-section" data-category="muscle-relaxants">
                        <div class="category-header">
                            <h3><i class="fa fa-fish"></i>Gynaec</h3>
                            <span class="product-count">5 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Tranexamic acid + mefenamic acid</div>
                            <div class="product-item">Desogestrol + cyptosterone acetate</div>
                            <div class="product-item">Misoprestol + diclofenac pot</div>
                            <div class="product-item">Desogestrol</div>
                            <div class="product-item">Tranexamic acid + etamsylate</div>
                        </div>
                    </div>

                    <!--26 Gynaec/Haemostasis  -->
                    <div class="category-section" data-category="muscle-relaxants">
                        <div class="category-header">
                            <h3><i class="fa fa-bone"></i>Gynaec/Haemostasis</h3>
                            <span class="product-count">1 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Tranexamic acid + mefenamic acid</div>
                        </div>
                    </div>

                    <!--27 Haemostatic  -->
                    <div class="category-section" data-category="muscle-relaxants">
                        <div class="category-header">
                            <h3><i class="fa fa-tablets"></i>Haemostatic</h3>
                            <span class="product-count">4 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">TRANEXAMIC ACID + MEFENAMIC TABLET</div>
                            <div class="product-item">Tranexamic acid</div>
                            <div class="product-item">Calicum dobesilate</div>
                            <div class="product-item">Calicum dobesilate + zinc + hydrochloride</div>
                        </div>
                    </div>

                    <!--28 HP KIT  -->
                    <div class="category-section" data-category="muscle-relaxants">
                        <div class="category-header">
                            <h3><i class="fa fa-dumbbell"></i>HP KIT</h3>
                            <span class="product-count">2 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Pantoprazole + clarithromycine + metronidazole</div>
                            <div class="product-item">Pantoprazole + amoxy + clarithromycine</div>
                        </div>
                    </div>

                    <!--29 Immuno suppresants  -->
                    <div class="category-section" data-category="muscle-relaxants">
                        <div class="category-header">
                            <h3><i class="fa fa-dumbbell"></i>Immuno suppresants</h3>
                            <span class="product-count">5 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Pemecrolinus</div>
                            <div class="product-item">Tacrolimus</div>
                            <div class="product-item">My cophenolate mofetil</div>
                            <div class="product-item">My cophenolate sodium</div>
                            <div class="product-item">My cophenolate sodium Entric coated tablets</div>
                        </div>
                    </div>

                    <!--30 Iron supplements  -->
                    <div class="category-section" data-category="muscle-relaxants">
                        <div class="category-header">
                            <h3><i class="fa fa-dumbbell"></i>Iron supplements </h3>
                            <span class="product-count">4 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Carbonyl iron, folic acid (FA), and zinc</div>
                            <div class="product-item">Ferrous sulphate + vitamins</div>
                            <div class="product-item">Ferrous ascorbate & folic acid tablets</div>
                            <div class="product-item">Iron, folic acid & vitamins B12 tablets</div>
                        </div>
                    </div>

                    <!--31 Laxative  -->
                    <div class="category-section" data-category="muscle-relaxants">
                        <div class="category-header">
                            <h3><i class="fa fa-capsules"></i>Laxative</h3>
                            <span class="product-count">1 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Bisacodyl tablets I.P</div>
                        </div>
                    </div>

                    <!--32 Memory booster  -->
                    <div class="category-section" data-category="muscle-relaxants">
                        <div class="category-header">
                            <h3><i class="fa fa-star"></i>Memory booster</h3>
                            <span class="product-count">1 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">MCBM, L-glutamic acid, B1, pyridoxine HCL, calicum 'D' pantothenate and folic acid</div>
                        </div>
                    </div>

                    <!--33 Muscle Relaxants   -->
                    <div class="category-section" data-category="muscle-relaxants">
                        <div class="category-header">
                            <h3><i class="fa fa-dumbbell"></i>Muscle Relaxants </h3>
                            <span class="product-count">4 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Diclofenac sod + paracetamol + chlorzoxazone</div>
                            <div class="product-item">Diclo sod+chlorzoxazone + paracetamol</div>
                            <div class="product-item">Diclofenac sodlum &chlorzoxazone</div>
                            <div class="product-item">Aceclofenace + thiocolchicoside</div>
                        </div>
                    </div>

                    <!--34 Rheumatoid/Osteo arthritis -->
                    <div class="category-section" data-category="muscle-relaxants">
                        <div class="category-header">
                            <h3><i class="fa fa-dumbbell"></i>Rheumatoid/Osteo arthritis </h3>
                            <span class="product-count">8 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Combikit of calicum, calcitriol, zinc and Ibandronic acid</div>
                            <div class="product-item">Diacerein</div>
                            <div class="product-item">Diacerein + Methylsulfonylmethane + Glucosamine</div>
                            <div class="product-item">Methylsulfonylmethane + Glucosamine + chondroitin</div>
                            <div class="product-item">Leflunomide</div>
                            <div class="product-item">Methylsulfonylmethane + Glucosamine</div>
                            <div class="product-item">S- ADENOSAL METHONNE TABLET</div>
                            <div class="product-item">Glucosamine sulphate potassium chloride, Methylsulfonylmethane and diacerein </div>
                        </div>
                    </div>

                    <!--35 Scabies -->
                    <div class="category-section" data-category="muscle-relaxants">
                        <div class="category-header">
                            <h3><i class="fa fa-seedling"></i>Scabies </h3>
                            <span class="product-count">1 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Permethrin</div>
                        </div>
                    </div>

                    <!--36 Steroidal Anti inflammaory  -->
                    <div class="category-section" data-category="muscle-relaxants">
                        <div class="category-header">
                            <h3><i class="fa fa-dumbbell"></i>Steroidal Anti inflammaory </h3>
                            <span class="product-count">1 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Dexamethasone</div>
                        </div>
                    </div>

                    <!--37 Stool softener   -->
                    <div class="category-section" data-category="muscle-relaxants">
                        <div class="category-header">
                            <h3><i class="fa fa-dumbbell"></i>Stool softener </h3>
                            <span class="product-count">1 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Calcium sennosoide + Docussate sodium</div>
                        </div>
                    </div>

                    <!--38 Thyrocare -->
                    <div class="category-section" data-category="thyrocare">
                        <div class="category-header">
                            <h3><i class="fa fa-dna"></i> Thyrocare</h3>
                            <span class="product-count">2 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Levothyroxine</div>
                            <div class="product-item">Thyroxine Sodium</div>
                        </div>
                    </div>

                    <!--39 Topical Anti Infective -->
                    <div class="category-section" data-category="thyrocare">
                        <div class="category-header">
                            <h3><i class="fa fa-leaf"></i> Topical Anti Infective</h3>
                            <span class="product-count">2 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Povidone + lodine</div>
                            <div class="product-item">Sliver sulfadioxide + povidone lodine</div>
                        </div>
                    </div>

                    <!--40 vitamin supplement -->
                    <div class="category-section" data-category="thyrocare">
                        <div class="category-header">
                            <h3><i class="fa fa-spa"></i>Vitamin Supplement</h3>
                            <span class="product-count">17 Products</span>
                        </div>
                        <div class="products-grid">
                            <div class="product-item">Methylcobalamin</div>
                            <div class="product-item">Thiamine Mononitrate + Riboflavine + Pyridoxine Hydrochloride + LAB</div>
                            <div class="product-item">Multi Vitamin</div>
                            <div class="product-item">Alpha Lipoic Acid + Benfotiamine + Inositol + Methylcobalamin + Vitamin B6 (Pyridoxine)</div>
                            <div class="product-item">Biotic + Vitamin E + Vitamin C</div>
                            <div class="product-item">Mecobalamin + FA</div>
                            <div class="product-item">Biotic Vitamin</div>
                            <div class="product-item">Folic Acid</div>
                            <div class="product-item">Mecobalamin + Pyridoxine HCL</div>
                            <div class="product-item">Mecobalamin + Alpha Lipoic Acid + Folic Acid + B6</div>
                            <div class="product-item">Mecobalamin + Pyridoxine HCL</div>
                            <div class="product-item">L-Cystine, L-Methionine and Multi Vitamins</div>
                            <div class="product-item">Multi Vitamin</div>
                            <div class="product-item">Biotic + Vitamins</div>
                            <div class="product-item">Folic Acid</div>
                            <div class="product-item">Mecobalamin, Alpha Lipoic Acid and Folic Acid</div>
                            <div class="product-item">Antioxidant, Multi Vitamins & Multi Minerals</div>
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