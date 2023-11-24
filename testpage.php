<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title> Group 4 ILS | Test Site </title> 
<style>

.navbar {
    display: flex;
    justify-content: space-between;
    padding-right: 5%;
}

.navbar .logo {
    padding-top: 1%;
    text-decoration: none;
    color: black;
    font-family: 'Open Sans', 'Regular';
    font-size: 18px;
    margin-right: auto; /* Pushes the logo (image) to the left. */
}

.navbar a {
    padding-top: 2%;
    text-decoration: none;
    color: #050778;
    font-family: 'Open Sans', 'Regular';
    font-size: 18px;
    margin-left: 75px;
    transition: 0.3s ease-in-out;
}

.navbar .logo img {
    width: 90px;
}

.navbar a:hover {
    color: #edb51a;
}


.side_Filter_Bar {
    width: 20%;
    height: 75%;
    margin-top: 5%;
    font-family: 'Roboto', sans-serif;
    padding-left: 2%;
}

.side_Filter_Bar > .sort_By_Options {
    display: flex;
    flex-direction: column;
    margin-bottom: 5%;
}

.side_Filter_Bar > #sort_By_Title {
    margin-bottom: 8%;
    font-size: 13px;
}
.side_Filter_Bar > .sort_By_Options > a {
    text-decoration: none;
    color: #8c8c8e;
    font-size: 15px;
    margin-bottom: 2%;
} 

.side_Filter_Bar > .sort_By_Options > a:last-child {
    margin-bottom: 0;
}

.side_Filter_Bar > .sort_By_Options > a:hover {
    text-decoration: underline;
    color: black;
}

.side_Filter_Bar > .editor {
    display: flex;
    flex-direction: row;
    margin-top: 20%;
    margin-bottom: 5%;
}
.side_Filter_Bar > .editor > #filter_Title {
    font-size: 13px;
}

.side_Filter_Bar > .editor > #clear_Filter {
    color: #8c8c8e;
    font-size: 13px;
    margin-top: 4%;
    margin-left: 70%;
}

.side_Filter_Bar > hr {
    color: #8c8c8e;
    margin-bottom: 10%;
    margin-top: 12%;
}

.side_Filter_Bar > #first_HR {
    margin-top: 0;
}

.side_Filter_Bar > #grade_Level_Title,
.side_Filter_Bar > #uniform_Type_Title,
.side_Filter_Bar > #category_Title,
.side_Filter_Bar > #strand_Title,
.side_Filter_Bar > #course_Title,
.side_Filter_Bar > #gender_Title {
    font-size: 16px;
}

.side_Filter_Bar > .grade_Level,
.side_Filter_Bar > .uniform_Type,
.side_Filter_Bar > .category,
.side_Filter_Bar > .strand,
.side_Filter_Bar > .course,
.side_Filter_Bar > .gender {
    display: flex;
    flex-direction: column;
    font-size: 15px;
    color: #8c8c8e;
}

.products {
    font-family: 'Roboto', sans-serif;
    width: 70%;
    margin-left: 3%;
}

.products > .product {
    display: flex;
    flex-direction: column;
    width: 20%;
}

.products > .product > img {
    width: 350px;
    height: 425px;
    outline: 3px solid black;
}

.products > .product > h3 {
    color: black;
    font-size: 16px;
}

.product > span {
    font-size: 16px;
}

.product > span > #bought {
    color: #8c8c8e;
}

.divider {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    width: 100%;
}




</style>
</head>
<body>

    <header>
        <div class="navbar">
            <a href="index.html" class="logo"><img src="stilogo.png" alt="STI Logo"></a>
            <a href="uniforms.html">Uniforms</a>
            <a href="about2.html">About</a>
        </div>
    </header>

<div class="divider">
    <div class="side_Filter_Bar">
        
        <h3 id="sort_By_Title"> SORT BY </h3>
        <div class="sort_By_Options">
            <a href="unkown.html" id="best_Sellers"> Best Sellers </a>
            <a href="unkown.html" id="latest"> Latest </a>
            <a href="unkown.html" id="price_Low_To_High"> Price $ - $$ </a>
            <a href="unkown.html" id="price_High_To_Low"> Price $$ - $ </a> 
        </div>

        <div class="editor"> 
            <h3 id="filter_Title"> FILTER </h3>
            <a href="index.htm" id="clear_Filter"> Clear All </a>
        </div>
        
        <hr id="first_HR">

        <h3 id="grade_Level_Title"> Grade Level </h3>
            <form class="grade_Level" action=""> 
                <input type="radio" name="shs" id="shs">
                    <label for="shs"> Senior High School </label>
                <input type="radio" name="college" id="college">
                    <label for="college"> College </label>
            </form>
            
        <hr>

        <h3 id="uniform_Type_Title"> Uniform Type </h3>
            <form class="uniform_Type" action="">
                <input type="radio" name="casual_Uniform" id="casual_Uniform">
                    <label for="casual_Uniform"> Casual Uniform </label>
                <input type="radio" name="pe_Uniform" id="pe_Uniform">
                    <label for="pe_Uniform"> P.E. Uniform </label>
            </form>

        <hr>
        
        <h3 id="category_Title"> Category </h3>
            <form class="category"> 
                <input type="radio" name="hat" id="hat">
                    <label for="hat"> Hat </label>
                <input type="radio" name="polo" id="polo">
                    <label for="polo"> Polo </label>
                <input type="radio" name="vest" id="vest">
                    <label for="vest"> Vest </label>
                <input type="radio" name="pants" id="pants">
                    <label for="pants"> Pants </label>
            </form>

        <hr>

        <h3 id="strand_Title"> Strand </h3>
            <form class="strand">
                <input type="radio" name="stem_Strand" id="stem_Strand">
                    <label for="stem_Strand"> STEM </label>
                <input type="radio" name="it_Strand" id="it_Strand">
                    <label for="it_Strand"> IT </label> 
                <input type="radio" name="abm_Strand" id="abm_Strand">
                    <label for="abm_Strand"> ABM </label> 
                <input type="radio" name="digital_Art_Strand" id="stem_Strand">
                    <label for="digital_Art_Strand"> Digital Art </label>
                <input type="radio" name="culinary_Art_Strand" id="culinary_Art_Strand">
                    <label for="culinary_Art_Strand"> Culinary Art </label>
            </form>

        <hr>

        <h3 id="course_Title"> Course </h3>
            <form class="course">
                <input type="radio" name="ict_course" id="ict_course">
                    <label for="ict_course"> Information & Communications Technology </label>
                <input type="radio" name="bm_course" id="bm_course">
                    <label for="bm_course"> Business & Management </label>
                <input type="radio" name="hm_course" id="hm_course">
                    <label for="hm_course"> Hospitality Management </label>
                <input type="radio" name="tm_course" id="tm_course">
                    <label for="tm_course"> Tourism Management </label>
                <input type="radio" name="engineering_course" id="engineering_course">
                    <label for="engineering_course"> Engineering </label>
                <input type="radio" name="as_course" id="as_course">
                    <label for="as_course"> Arts & Sciences </label>
                <input type="radio" name="maritime_course" id="maritime_course">
                    <label for="maritime_course"> Maritime </label>
            </form>

        <hr>

        <h3 id="gender_Title"> Gender </h3>
            <form class="gender">
                <input type="radio" name="male" id="male">
                    <label for="male"> Male </label>
                <input type="radio" name="female" id="female">
                    <label for="female"> Female </label>
                <input type="radio" name="unisex" id="unisex">
                    <label for="unisex"> Unisex </label>
            </form>

        <hr>

    </div>

    <div class="products">
        <div class="product product_1">
            <img src="Daily_Uniform_SHS.jpg" alt="Product Image" id="product_Image">
            <h3 id="product_Name"> Product Name </h3>
            <h3 id="product_Price"> Product Price </h3>
            <span id="rating"> Rating </span> <span id="bought"> (309) </span>
        </div>

        <div class="product product_2">
            <img src="Daily_Uniform_SHS.jpg" alt="Product Image" id="product_Image">
            <h3 id="product_Name"> Product Name </h3>
            <h3 id="product_Price"> Product Price </h3>
            <span id="rating"> Rating </span> <span id="bought"> (309) </span>
        </div>

        <div class="product product_3">
            <img src="Daily_Uniform_SHS.jpg" alt="Product Image" id="product_Image">
            <h3 id="product_Name"> Product Name </h3>
            <h3 id="product_Price"> Product Price </h3>
            <span id="rating"> Rating </span> 
            <span id="bought"> (309) </span>
        </div>
    </div>
</div>

</body>
</html>