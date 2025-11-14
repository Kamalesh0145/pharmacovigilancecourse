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
        
        @media (max-width: 768px) {
            .pharma-table-container {
                overflow-x: auto;
            }
            
            .pharma-table th,
            .pharma-table td {
                padding: 10px 15px;
                font-size: 13px;
            }
            
            .table-stats {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Pharmaceutical Elements Database</h2>
                    <div class="page_link">
                        <a href="index.php">Home</a>
                        <a href="elements.php">Elements</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
  .healthcare-section {
    background: #f8f9fb;
    padding: 60px 0;
    font-family: "Poppins", sans-serif;
  }

  .healthcare-container {
    width: 90%;
    max-width: 1100px;
    margin: auto;
  }

  .healthcare-title {
    text-align: center;
    font-size: 32px;
    font-weight: 700;
    color: #7b2cbf;
    margin-bottom: 40px;
  }

  .health-card {
    background: #ffffff;
    padding: 30px;
    border-radius: 16px;
    box-shadow: 0px 4px 20px rgba(0,0,0,0.08);
    margin-bottom: 20px;
  }

  .health-card h3 {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 15px;
    color: #444;
  }

  .health-card ul {
    margin: 0;
    padding-left: 18px;
  }

  .health-card ul li {
    margin-bottom: 6px;
    font-size: 15px;
    line-height: 1.6;
    color: #333;
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
    </div>

  </div>
</section>


    <section class="p_120">
        <div class="container">
            <div class="main_title">
                <h2>Healthcare & Pharmaceutical Products</h2>
                <p>Comprehensive database of pharmaceutical drugs, nutraceuticals, vitamins, minerals, and herbal products organized by therapeutic categories for pharmacovigilance studies and clinical research.</p>
            </div>
            
            <div class="pharma-table-container">
                <div class="table-header">
                    <h2><i class="fa fa-pills"></i> Drug Categories & Products</h2>
                </div>
                
                <div class="table-stats">
                    <div class="stat-item">
                        <div class="stat-number" id="totalCategories">0</div>
                        <div class="stat-label">Categories</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" id="totalDrugs">0</div>
                        <div class="stat-label">Total Products</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" id="filteredResults">0</div>
                        <div class="stat-label">Showing</div>
                    </div>
                </div>
                
                <div class="search-container">
                    <input type="text" class="search-input" id="searchInput" placeholder="Search by category or drug name...">
                    <i class="fa fa-search search-icon"></i>
                </div>
                
                <table class="pharma-table" id="pharmaTable">
                    <thead>
                        <tr>
                             <th>Si No</th>
                            <th>Category</th>
                            <th>Drug Name</th>
                           
                        </tr>
                    </thead>
                    <tbody>


                        <!-- HEALTHCARE: NUTRACEUTICALS -->
                        <!-- 1. Vitamins & Minerals -->
                        <tr><td class="sno-cell">1</td><td class="category-cell">VITAMINS & MINERALS</td><td class="drug-cell">Vitamin A (Palmitate)</td></tr>
                        <tr><td class="sno-cell">2</td><td class="category-cell">VITAMINS & MINERALS</td><td class="drug-cell">Vitamin A (Acetate)</td></tr>
                        <tr><td class="sno-cell">3</td><td class="category-cell">VITAMINS & MINERALS</td><td class="drug-cell">Vitamin A (Beta Carotene)</td></tr>
                        <tr><td class="sno-cell">4</td><td class="category-cell">VITAMINS & MINERALS</td><td class="drug-cell">Vitamin A & D Combinations</td></tr>
                        <tr><td class="sno-cell">5</td><td class="category-cell">VITAMINS & MINERALS</td><td class="drug-cell">Vitamin E (Natural)</td></tr>
                        <tr><td class="sno-cell">6</td><td class="category-cell">VITAMINS & MINERALS</td><td class="drug-cell">Vitamin E (Synthetic)</td></tr>
                        <tr><td class="sno-cell">7</td><td class="category-cell">VITAMINS & MINERALS</td><td class="drug-cell">Vitamin E (Water Dispersible)</td></tr>
                        <tr><td class="sno-cell">8</td><td class="category-cell">VITAMINS & MINERALS</td><td class="drug-cell">Vitamin E (Mixed Tocopherols)</td></tr>
                        <tr><td class="sno-cell">9</td><td class="category-cell">VITAMINS & MINERALS</td><td class="drug-cell">Vitamin B1</td></tr>
                        <tr><td class="sno-cell">10</td><td class="category-cell">VITAMINS & MINERALS</td><td class="drug-cell">Vitamin B2</td></tr>
                        <tr><td class="sno-cell">11</td><td class="category-cell">VITAMINS & MINERALS</td><td class="drug-cell">Vitamin B6</td></tr>
                        <tr><td class="sno-cell">12</td><td class="category-cell">VITAMINS & MINERALS</td><td class="drug-cell">Vitamin B12</td></tr>
                        <tr><td class="sno-cell">13</td><td class="category-cell">VITAMINS & MINERALS</td><td class="drug-cell">Nicotinamide</td></tr>
                        <tr><td class="sno-cell">14</td><td class="category-cell">VITAMINS & MINERALS</td><td class="drug-cell">Calcium Pantothenate</td></tr>
                        
                        <!-- 2. Herbal Concentrate Products -->
                        <tr><td class="sno-cell">15</td><td class="category-cell">HERBAL CONCENTRATES</td><td class="drug-cell">Garlic Oil</td></tr>
                        <tr><td class="sno-cell">16</td><td class="category-cell">HERBAL CONCENTRATES</td><td class="drug-cell">Odourless Garlic Extracts</td></tr>
                        <tr><td class="sno-cell">17</td><td class="category-cell">HERBAL CONCENTRATES</td><td class="drug-cell">Aloe Vera</td></tr>
                        <tr><td class="sno-cell">18</td><td class="category-cell">HERBAL CONCENTRATES</td><td class="drug-cell">Bilberry</td></tr>
                        <tr><td class="sno-cell">19</td><td class="category-cell">HERBAL CONCENTRATES</td><td class="drug-cell">Korean Ginseng</td></tr>
                        <tr><td class="sno-cell">20</td><td class="category-cell">HERBAL CONCENTRATES</td><td class="drug-cell">Siberian Ginseng</td></tr>
                        <tr><td class="sno-cell">21</td><td class="category-cell">HERBAL CONCENTRATES</td><td class="drug-cell">Milk Thistle</td></tr>
                        <tr><td class="sno-cell">22</td><td class="category-cell">HERBAL CONCENTRATES</td><td class="drug-cell">Grape Seed</td></tr>
                        <tr><td class="sno-cell">23</td><td class="category-cell">HERBAL CONCENTRATES</td><td class="drug-cell">Green Tea</td></tr>
                        <tr><td class="sno-cell">24</td><td class="category-cell">HERBAL CONCENTRATES</td><td class="drug-cell">Ginkgo Biloba</td></tr>
                        <tr><td class="sno-cell">25</td><td class="category-cell">HERBAL CONCENTRATES</td><td class="drug-cell">Lutein</td></tr>
                        <tr><td class="sno-cell">26</td><td class="category-cell">HERBAL CONCENTRATES</td><td class="drug-cell">Cranberry</td></tr>
                        <tr><td class="sno-cell">27</td><td class="category-cell">HERBAL CONCENTRATES</td><td class="drug-cell">Juniper Berry</td></tr>
                        
                        <!-- 3. Essential Fatty Acids -->
                        <tr><td class="sno-cell">27</td><td class="category-cell">ESSENTIAL FATTY ACIDS</td><td class="drug-cell">Flaxseed</td></tr>
                        <tr><td class="sno-cell">28</td><td class="category-cell">ESSENTIAL FATTY ACIDS</td><td class="drug-cell">Evening Primrose</td></tr>
                        <tr><td class="sno-cell">29</td><td class="category-cell">ESSENTIAL FATTY ACIDS</td><td class="drug-cell">Pumpkin Seed</td></tr>
                        <tr><td class="sno-cell">30</td><td class="category-cell">ESSENTIAL FATTY ACIDS</td><td class="drug-cell">Safflower</td></tr>
                        <tr><td class="sno-cell">31</td><td class="category-cell">ESSENTIAL FATTY ACIDS</td><td class="drug-cell">Sunflower</td></tr>
                        <tr><td class="sno-cell">32</td><td class="category-cell">ESSENTIAL FATTY ACIDS</td><td class="drug-cell">Coconut</td></tr>
                        <tr><td class="sno-cell">33</td><td class="category-cell">ESSENTIAL FATTY ACIDS</td><td class="drug-cell">Rice Bran</td></tr>
                        <tr><td class="sno-cell">34</td><td class="category-cell">ESSENTIAL FATTY ACIDS</td><td class="drug-cell">Avocado</td></tr>
                        <tr><td class="sno-cell">35</td><td class="category-cell">ESSENTIAL FATTY ACIDS</td><td class="drug-cell">Oregano</td></tr>
                        <tr><td class="sno-cell">36</td><td class="category-cell">ESSENTIAL FATTY ACIDS</td><td class="drug-cell">Black Currant</td></tr>
                        <tr><td class="sno-cell">37</td><td class="category-cell">ESSENTIAL FATTY ACIDS</td><td class="drug-cell">Borage</td></tr>
                        <tr><td class="sno-cell">38</td><td class="category-cell">ESSENTIAL FATTY ACIDS</td><td class="drug-cell">Hemp</td></tr>
                        <tr><td class="sno-cell">39</td><td class="category-cell">ESSENTIAL FATTY ACIDS</td><td class="drug-cell">Perilla</td></tr>
                        <tr><td class="sno-cell">40</td><td class="category-cell">ESSENTIAL FATTY ACIDS</td><td class="drug-cell">Pomegranate</td></tr>
                        <tr><td class="sno-cell">41</td><td class="category-cell">ESSENTIAL FATTY ACIDS</td><td class="drug-cell">Peppermint</td></tr>
                        <tr><td class="sno-cell">42</td><td class="category-cell">ESSENTIAL FATTY ACIDS</td><td class="drug-cell">Fennel</td></tr>
                        <tr><td class="sno-cell">43</td><td class="category-cell">ESSENTIAL FATTY ACIDS</td><td class="drug-cell">Ginger</td></tr>
                        <tr><td class="sno-cell">44</td><td class="category-cell">ESSENTIAL FATTY ACIDS</td><td class="drug-cell">Wheat Germ</td></tr>
                        <tr><td class="sno-cell">45</td><td class="category-cell">ESSENTIAL FATTY ACIDS</td><td class="drug-cell">Sea Buckthorn</td></tr>
                        
                        <!-- 4. Marine Lipid Concentrates -->
                        <tr><td class="sno-cell">46</td><td class="category-cell">MARINE LIPID CONCENTRATES</td><td class="drug-cell">Fish Oils (EPA/DHA variants)</td></tr>
                        <tr><td class="sno-cell">47</td><td class="category-cell">MARINE LIPID CONCENTRATES</td><td class="drug-cell">Cod Liver</td></tr>
                        <tr><td class="sno-cell">48</td><td class="category-cell">MARINE LIPID CONCENTRATES</td><td class="drug-cell">Salmon</td></tr>
                        <tr><td class="sno-cell">49</td><td class="category-cell">MARINE LIPID CONCENTRATES</td><td class="drug-cell">Tuna</td></tr>
                        <tr><td class="sno-cell">50</td><td class="category-cell">MARINE LIPID CONCENTRATES</td><td class="drug-cell">Krill</td></tr>
                        <tr><td class="sno-cell">51</td><td class="category-cell">MARINE LIPID CONCENTRATES</td><td class="drug-cell">Squalene</td></tr>
                        <tr><td class="sno-cell">52</td><td class="category-cell">MARINE LIPID CONCENTRATES</td><td class="drug-cell">Shark Liver</td></tr>
                        <tr><td class="sno-cell">53</td><td class="category-cell">MARINE LIPID CONCENTRATES</td><td class="drug-cell">Seal Oil</td></tr>
                        
                        <!-- 5. Speciality Products -->
                        <tr><td class="sno-cell">54</td><td class="category-cell">SPECIALITY PRODUCTS</td><td class="drug-cell">Co-Enzyme Q10 variants</td></tr>
                        <tr><td class="sno-cell">55</td><td class="category-cell">SPECIALITY PRODUCTS</td><td class="drug-cell">Collagen</td></tr>
                        <tr><td class="sno-cell">56</td><td class="category-cell">SPECIALITY PRODUCTS</td><td class="drug-cell">Hyaluronic Acid</td></tr>
                        <tr><td class="sno-cell">57</td><td class="category-cell">SPECIALITY PRODUCTS</td><td class="drug-cell">Lycopene</td></tr>
                        <tr><td class="sno-cell">58</td><td class="category-cell">SPECIALITY PRODUCTS</td><td class="drug-cell">Glucosamine-Chondroitin</td></tr>
                        <tr><td class="sno-cell">59</td><td class="category-cell">SPECIALITY PRODUCTS</td><td class="drug-cell">Nattokinase</td></tr>
                        <tr><td class="sno-cell">60</td><td class="category-cell">SPECIALITY PRODUCTS</td><td class="drug-cell">Policosanol</td></tr>
                        <tr><td class="sno-cell">61</td><td class="category-cell">SPECIALITY PRODUCTS</td><td class="drug-cell">Red Yeast Extract</td></tr>
                        <tr><td class="sno-cell">62</td><td class="category-cell">SPECIALITY PRODUCTS</td><td class="drug-cell">Bee Propolis</td></tr>
                        <tr><td class="sno-cell">63</td><td class="category-cell">SPECIALITY PRODUCTS</td><td class="drug-cell">Royal Jelly</td></tr>
                        
                        <!-- 6. Calcitriol & Calcium Capsules -->
                        <tr><td class="sno-cell">64</td><td class="category-cell">CALCITRIOL & CALCIUM</td><td class="drug-cell">Vitamin D3</td></tr>
                        <tr><td class="sno-cell">65</td><td class="category-cell">CALCITRIOL & CALCIUM</td><td class="drug-cell">Calcium Carbonate</td></tr>
                        <tr><td class="sno-cell">66</td><td class="category-cell">CALCITRIOL & CALCIUM</td><td class="drug-cell">Zinc</td></tr>
                        <tr><td class="sno-cell">67</td><td class="category-cell">CALCITRIOL & CALCIUM</td><td class="drug-cell">Supporting Minerals</td></tr>
                        
                        <!-- 7. Multivitamins & Multiminerals -->
                        <tr><td class="sno-cell">70</td><td class="category-cell">MULTIVITAMINS & MULTIMINERALS</td><td class="drug-cell">Basic Formulations</td></tr>
                        <tr><td class="sno-cell">71</td><td class="category-cell">MULTIVITAMINS & MULTIMINERALS</td><td class="drug-cell">Advanced Blends with Herbal Extracts</td></tr>
                        <tr><td class="sno-cell">72</td><td class="category-cell">MULTIVITAMINS & MULTIMINERALS</td><td class="drug-cell">Amino Acids</td></tr>
                        <tr><td class="sno-cell">73</td><td class="category-cell">MULTIVITAMINS & MULTIMINERALS</td><td class="drug-cell">Antioxidants</td></tr>
                        <tr><td class="sno-cell">74</td><td class="category-cell">MULTIVITAMINS & MULTIMINERALS</td><td class="drug-cell">Trace Elements</td></tr>
                        
                        <!-- 8. All types of herbs and herbal products -->
                        <tr><td class="sno-cell">75</td><td class="category-cell">HERBAL PRODUCTS</td><td class="drug-cell">All Types of Herbs</td></tr>
                        <tr><td class="sno-cell">76</td><td class="category-cell">HERBAL PRODUCTS</td><td class="drug-cell">Herbal Products</td></tr>
                        
                        <!-- PHARMACEUTICALS -->
                        <tr><td class="sno-cell">77</td><td class="category-cell">PHARMACEUTICALS</td><td class="drug-cell">Pharmaceutical Products (included, but not limited to)</td></tr>
                        <tr><td class="sno-cell">78</td><td class="category-cell">Anti cough</td><td class="drug-cell">Ambroxol + carbocistene</td></tr>
                        <tr><td class="sno-cell">79</td><td class="category-cell">Anti cough</td><td class="drug-cell">Paracetamol + CPM + Cetirizine + Detromethorphan HBR</td></tr>
                        <tr><td class="sno-cell">80</td><td class="category-cell">Anti cough</td><td class="drug-cell">Levocet + phenyleph + Ambroxol HCL + Guaiphenesin</td></tr>
                        <tr><td class="sno-cell">81</td><td class="category-cell">Anti cough</td><td class="drug-cell">Ambroxol + salbutamol + guaiphenesin</td></tr>
                        <tr><td class="sno-cell">82</td><td class="category-cell">Anti cough</td><td class="drug-cell">Cetirizine + Phenylephrine + Menthol + Dextromethorphan Hydrobromide</td></tr>
                        <tr><td class="sno-cell">83</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">Glibenclamide + Metformin hydrochloride</td></tr>
                        <tr><td class="sno-cell">84</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">GLIMEPRIDE + Metformin hydrochloride HCL</td></tr>
                        <tr><td class="sno-cell">85</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">GLIPIZIDE</td></tr>
                        <tr><td class="sno-cell">86</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">GLIPIZIDE + METFORMIN HYDROCHLORIDE</td></tr>
                        <tr><td class="sno-cell">87</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">PIOGLITAZONE HYDROCHLORIDE + METFORMIN HYDROCHLORIDE</td></tr>
                        <tr><td class="sno-cell">88</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">METFORMIN HYDROCHLORIDE</td></tr>
                        <tr><td class="sno-cell">89</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">PIOGLITAZONE + METFORMIN</td></tr>
                        <tr><td class="sno-cell">90</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">GLIMEPRIDE + PIOGLITAZONE + METFORMIN</td></tr>
                        <tr><td class="sno-cell">91</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">GLIMEPRIDE + PIOGLITAZONE</td></tr>
                        <tr><td class="sno-cell">92</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">Glimepride + Metformin</td></tr>
                        <tr><td class="sno-cell">93</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">Rosiglitazone + Metformin</td></tr>
                        <tr><td class="sno-cell">94</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">Metformin + Glimepride + Rosiglitazone</td></tr>
                        <tr><td class="sno-cell">95</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">Rosiglitazone + Gliclazide</td></tr>
                        <tr><td class="sno-cell">96</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">Acarbose</td></tr>
                        <tr><td class="sno-cell">97</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">Gliclazide + Metformin</td></tr>
                        <tr><td class="sno-cell">98</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">Metformin + Mecobalamin</td></tr>
                        <tr><td class="sno-cell">99</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">Glimepride Tablets</td></tr>
                        <tr><td class="sno-cell">100</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">Glimepiride + Metformin hydrochloride</td></tr>
                        <tr><td class="sno-cell">101</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">Pioglitazone HCL + Metformin HCL</td></tr>
                        <tr><td class="sno-cell">102</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">Glimepiride, Pioglitazone & Metformin HCL SR</td></tr>
                        <tr><td class="sno-cell">103</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">Pioglitazone + Metformin SR + Glimepiride</td></tr>
                        <tr><td class="sno-cell">104</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">Pioglitazone hydrochloride</td></tr>
                        <tr><td class="sno-cell">105</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">Pioglitazone HCL + Metformin HCL + Glimepiride</td></tr>
                        <tr><td class="sno-cell">106</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">Rosiglitazone maleate</td></tr>
                        <tr><td class="sno-cell">107</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">Glimepiride Pioglitazone & Metformin HCL SR</td></tr>
                        <tr><td class="sno-cell">108</td><td class="category-cell">Anti diabetic</td><td class="drug-cell">Metformin HCL SR + Pioglitazone + Glibenclamide</td></tr>
                        <tr><td class="sno-cell">109</td><td class="category-cell">Anti Emetic</td><td class="drug-cell">Mosapride</td></tr>
                        <tr><td class="sno-cell">110</td><td class="category-cell">Anti Emetic</td><td class="drug-cell">Domperidone</td></tr>
                        <tr><td class="sno-cell">111</td><td class="category-cell">Anti Emetic</td><td class="drug-cell">Granisetron</td></tr>
                        <tr><td class="sno-cell">112</td><td class="category-cell">Anti Emetic</td><td class="drug-cell">Ondensteron + Paracetamol</td></tr>
                        <tr><td class="sno-cell">113</td><td class="category-cell">Anti fungal</td><td class="drug-cell">CLOTRIMAZOLE CREAM</td></tr>
                        <tr><td class="sno-cell">114</td><td class="category-cell">Anti fungal</td><td class="drug-cell">Fluconazole</td></tr>
                        <tr><td class="sno-cell">115</td><td class="category-cell">Anti histaminic</td><td class="drug-cell">Levocetrizine + Phenylepherine HCL</td></tr>
                        <tr><td class="sno-cell">116</td><td class="category-cell">Anti histaminic</td><td class="drug-cell">Paracetamol + Levocetrizine + Phenylepherine</td></tr>
                        <tr><td class="sno-cell">117</td><td class="category-cell">Anti histaminic</td><td class="drug-cell">Fexofenadine</td></tr>
                        <tr><td class="sno-cell">118</td><td class="category-cell">Anti histaminic</td><td class="drug-cell">Diephen hydramine HCL + Ammonium Cl + Sodium Cit.</td></tr>
                        <tr><td class="sno-cell">119</td><td class="category-cell">Anti histaminic</td><td class="drug-cell">Levocetrizine</td></tr>
                        <tr><td class="sno-cell">120</td><td class="category-cell">Anti histaminic</td><td class="drug-cell">Cypropheptadine</td></tr>
                        <tr><td class="sno-cell">121</td><td class="category-cell">Anti histaminic</td><td class="drug-cell">Phenylepherine + Chlorphenyramine Maleate</td></tr>
                        <tr><td class="sno-cell">122</td><td class="category-cell">Anti histaminic</td><td class="drug-cell">Levocetrizine Dihydrochloride</td></tr>
                        <tr><td class="sno-cell">123</td><td class="category-cell">Anti histaminic</td><td class="drug-cell">Montelukast Sodium</td></tr>
                        <tr><td class="sno-cell">124</td><td class="category-cell">Anti histaminic</td><td class="drug-cell">Levocertirizine</td></tr>
                        <tr><td class="sno-cell">125</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">METOPROLOL SUCCINATE USP</td></tr>
                        <tr><td class="sno-cell">126</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Telmisartan</td></tr>
                        <tr><td class="sno-cell">127</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">TELMISARTAN + HYDROCHLOROTHIAZIDE</td></tr>
                        <tr><td class="sno-cell">128</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Metroprolol</td></tr>
                        <tr><td class="sno-cell">129</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Metroprolol + Amlodipine</td></tr>
                        <tr><td class="sno-cell">130</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Esamlodipine + Atendol</td></tr>
                        <tr><td class="sno-cell">131</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Esamlodipine + Losartan Potassium</td></tr>
                        <tr><td class="sno-cell">132</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Losartan Potassium</td></tr>
                        <tr><td class="sno-cell">133</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Metoprolol Hydrochlorthiazide</td></tr>
                        <tr><td class="sno-cell">134</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Metoprolol Succinate</td></tr>
                        <tr><td class="sno-cell">135</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Metoprolol + Amlodipine</td></tr>
                        <tr><td class="sno-cell">136</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Amlodipine + Bisoprolol</td></tr>
                        <tr><td class="sno-cell">137</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Losartan + HTZ</td></tr>
                        <tr><td class="sno-cell">138</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Amlodipine Besilate</td></tr>
                        <tr><td class="sno-cell">139</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Amlodipine + Benazepril</td></tr>
                        <tr><td class="sno-cell">140</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Amlodipine + Losartan Potassium</td></tr>
                        <tr><td class="sno-cell">141</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Amiodarone Tablet IP</td></tr>
                        <tr><td class="sno-cell">142</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Ramipril</td></tr>
                        <tr><td class="sno-cell">143</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Ramipril + Amlodipine</td></tr>
                        <tr><td class="sno-cell">144</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Metoprolol Succinate Extended Release</td></tr>
                        <tr><td class="sno-cell">145</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Metroprolol Succinate ER and Amlodipine Tablets</td></tr>
                        <tr><td class="sno-cell">146</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Amlodipine</td></tr>
                        <tr><td class="sno-cell">147</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Telmisartan + Amlodipine</td></tr>
                        <tr><td class="sno-cell">148</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Losartan Potassium + Amlodipine</td></tr>
                        <tr><td class="sno-cell">149</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">S(-) Amlodipine Besilate Tablets</td></tr>
                        <tr><td class="sno-cell">150</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Atorvastatin & Amlodipine Tablets</td></tr>
                        <tr><td class="sno-cell">151</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Losartan Potassium and Ramipril</td></tr>
                        <tr><td class="sno-cell">152</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Metroprolol Succinate (ER) and Amlodipine Besilate</td></tr>
                        <tr><td class="sno-cell">153</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Metroprolol Succinate (ER) and Hydrochlorothiazide</td></tr>
                        <tr><td class="sno-cell">154</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Ramipril & Hydrochlorothiazide</td></tr>
                        <tr><td class="sno-cell">155</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Propranolol HCL Sustained Release</td></tr>
                        <tr><td class="sno-cell">156</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Nifedipine Sustained Release</td></tr>
                        <tr><td class="sno-cell">157</td><td class="category-cell">Anti hypertensive</td><td class="drug-cell">Metoprolol Succinate (ER) and Amlodipine Besilate</td></tr>
                        <tr><td class="sno-cell">158</td><td class="category-cell">Anti Ilipedimic</td><td class="drug-cell">Atorvastatin</td></tr>
                        <tr><td class="sno-cell">159</td><td class="category-cell">Anti Ilipedimic</td><td class="drug-cell">Atorvastatin + Ezetimibe</td></tr>
                        <tr><td class="sno-cell">160</td><td class="category-cell">Anti Ilipedimic</td><td class="drug-cell">Atorvastatin + Fenofibrate</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <!-- jQuery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    
    <script>
        // Search functionality
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            const table = document.getElementById('pharmaTable');
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
            let visibleCount = 0;
            
            for (let i = 0; i < rows.length; i++) {
                const category = rows[i].cells[0].textContent.toLowerCase();
                const drug = rows[i].cells[1].textContent.toLowerCase();
                
                if (category.includes(searchTerm) || drug.includes(searchTerm)) {
                    rows[i].style.display = '';
                    visibleCount++;
                } else {
                    rows[i].style.display = 'none';
                }
            }
            
            // Update filtered results count
            document.getElementById('filteredResults').textContent = visibleCount;
        });
        
        // Count unique categories and total drugs on page load
        document.addEventListener('DOMContentLoaded', function() {
            const table = document.getElementById('pharmaTable');
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
            const categories = new Set();
            
            for (let i = 0; i < rows.length; i++) {
                const category = rows[i].cells[0].textContent.trim();
                categories.add(category);
            }
            
            document.getElementById('totalCategories').textContent = categories.size;
            document.getElementById('totalDrugs').textContent = rows.length;
            document.getElementById('filteredResults').textContent = rows.length;
        });
    </script>
</body>
</html>