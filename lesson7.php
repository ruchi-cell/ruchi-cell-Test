<!doctype html>
<html lang="en">
  <head><meta charset="windows-1252">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Anchanto Coding questions">
    <meta name="author" content="LearnByExample">
    <title>Lesson7</title>
    <!-- Fontawesome -->
    <link type="text/css" href="../vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!--<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">-->
<meta name="keywords" content="electronics and communication, signal and systems, artificial intelligence, examples are the best way to learn, physics, chemistry, math, electromagentic, antenna teory, LEARNBYEXAMPLE, data structures, data structures LBE, data science, HTMl, CSS LBE, JavaScript, Web Development, wireless communication, ,learnbyexample.in, learnbyexample, learn by example, learnbyexample.org, python learnbyexample,learnby example, learnbyexample. org">
<meta name="description" content="Anchanto Coding questions">


<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css/prism.css" rel="stylesheet">
<!--Extras-->
<link href="css/doc1.css" rel="stylesheet">
<link href="css/docs.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
         
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>


  <body>
    <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
  <!--<a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="LearnByExample">LBE</a>-->

  <div class="navbar-nav-scroll">
    <ul class="navbar-nav bd-navbar-nav flex-row">
      <li class="nav-item">
        <a class="nav-link " href="/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Bootstrap');">LearnByExample</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');" target="_blank" rel="noopener">Blog</a>
      </li>
    </ul>
  </div>

  <ul class="navbar-nav ml-md-auto">
    
    <li class="nav-item">
      <a class="nav-link px-1 mx-1 py-3 my-n2" href="https://www.facebook.com/learnbexample/" target="_blank" rel="noopener" aria-label="Facebook"><span aria-hidden="true" class="fab fa-facebook"></span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link px-1 mx-1 py-3 my-n2" href="https://www.instagram.com/_learnbyexample_/" target="_blank" rel="noopener" aria-label="Instagram"><span aria-hidden="true" class="fab fa-instagram"></span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link pl-2 pr-1 mx-1 py-3 my-n2" href="https://github.com/LBE-official" target="_blank" rel="noopener" aria-label="GitHub"><svg xmlns="http://www.w3.org/2000/svg" class="navbar-nav-svg" viewBox="0 0 512 499.36" role="img" focusable="false"><title>GitHub</title><path fill="currentColor" fill-rule="evenodd" d="M256 0C114.64 0 0 114.61 0 256c0 113.09 73.34 209 175.08 242.9 12.8 2.35 17.47-5.56 17.47-12.34 0-6.08-.22-22.18-.35-43.54-71.2 15.49-86.2-34.34-86.2-34.34-11.64-29.57-28.42-37.45-28.42-37.45-23.27-15.84 1.73-15.55 1.73-15.55 25.69 1.81 39.21 26.38 39.21 26.38 22.84 39.12 59.92 27.82 74.5 21.27 2.33-16.54 8.94-27.82 16.25-34.22-56.84-6.43-116.6-28.43-116.6-126.49 0-27.95 10-50.8 26.35-68.69-2.63-6.48-11.42-32.5 2.51-67.75 0 0 21.49-6.88 70.4 26.24a242.65 242.65 0 0 1 128.18 0c48.87-33.13 70.33-26.24 70.33-26.24 14 35.25 5.18 61.27 2.55 67.75 16.41 17.9 26.31 40.75 26.31 68.69 0 98.35-59.85 120-116.88 126.32 9.19 7.9 17.38 23.53 17.38 47.41 0 34.22-.31 61.83-.31 70.23 0 6.85 4.61 14.81 17.6 12.31C438.72 464.97 512 369.08 512 256.02 512 114.62 397.37 0 256 0z"></path></svg></a>
    </li>
    <!--<li class="nav-item">-->
    <!--  <a class="nav-link px-1 mx-1 py-3 my-n2" href="https://twitter.com/getbootstrap" target="_blank" rel="noopener" aria-label="Twitter"><svg xmlns="http://www.w3.org/2000/svg" class="navbar-nav-svg" viewBox="0 0 512 416.32" role="img" focusable="false"><title>Twitter</title><path fill="currentColor" d="M160.83 416.32c193.2 0 298.92-160.22 298.92-298.92 0-4.51 0-9-.2-13.52A214 214 0 0 0 512 49.38a212.93 212.93 0 0 1-60.44 16.6 105.7 105.7 0 0 0 46.3-58.19 209 209 0 0 1-66.79 25.37 105.09 105.09 0 0 0-181.73 71.91 116.12 116.12 0 0 0 2.66 24c-87.28-4.3-164.73-46.3-216.56-109.82A105.48 105.48 0 0 0 68 159.6a106.27 106.27 0 0 1-47.53-13.11v1.43a105.28 105.28 0 0 0 84.21 103.06 105.67 105.67 0 0 1-47.33 1.84 105.06 105.06 0 0 0 98.14 72.94A210.72 210.72 0 0 1 25 370.84a202.17 202.17 0 0 1-25-1.43 298.85 298.85 0 0 0 160.83 46.92"></path></svg></a>-->
    <!--</li>-->
    
  </ul>

  <a class="btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="http://learnbyexample.in/intern.php">Internship</a>
</header>
<div class="container-fluid">
      <div class="row flex-xl-nowrap">
        <div class="col-md-3 col-xl-2 bd-sidebar">
          <form role="search" class="bd-search d-flex align-items-center">
  <span class="algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;"><input type="search" class="form-control ds-input" id="search-input" placeholder="Search..." aria-label="Search for..." autocomplete="off" data-docs-version="4.5" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: normal; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span class="ds-dropdown-menu" role="listbox" id="algolia-autocomplete-listbox-0" style="position: absolute; top: 100%; z-index: 100; display: none; left: 0px; right: auto;"><div class="ds-dataset-1"></div></span></span>
  <button class="btn bd-search-docs-toggle d-md-none p-0 ml-3" type="button" data-toggle="collapse" data-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg></button>
</form>
        </div>
        
          <main class="col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <div class="d-md-flex flex-md-row-reverse align-items-center justify-content-between">
            <h1 class="bd-title" id="content">Computer Programming with MATLAB</h1>
          </div>
          <p class="bd-lead"></p>
          
            <h2 id="definition">Lesson 7: Data Types</h2>
            <p>
              by
            </p>
            <h5 id="push">Akos Ledeczi and Mike Fitzpatrick </h5><br>
            <h2 class="bd-title" id="content">The Limitation of Computers</h2>
            <p>
           <h3 id="push ">  Real numbers in mathematics:</h3> 
            ◦ Can be infinitely large <br>
            ◦ Have infinitely fine resolution 
            <h3 id="push"> Computers: Finite memory</h3>
             ◦ Upper limit on the largest number that can be <br>
             represented <br>
             ◦ Lower limit on the absolute value of any non-zero <br>
             number
             <h3 id="push"> The set of values that can be represented by<br>
               a MATLAB variable is finite.</h3>
            </p><br><br><br>
            <h2 class="bd-title" id="content">Data Types</h2>
            <p>
            <h3 id="push "> MATLAB:</h3> many different data types
            <h3 id="push ">   A data type is defined by:</h3>
             ◦ Set of values <br>
              ◦ Set of operations that can be performed on those values <br>
              <h3 id="push ">  MATLAB:</h3>
               ◦ All elements of a given array must be of the same type<br>
                ◦ Elementary type <br>
                <h3 id="push "> Type of a MATLAB array is defined by</h3>
                ◦ Number of dimensions<br>
                ◦ Size in each dimension<br>
                 ◦ Elementary type<br>
            </p><br><br><br>
            <h2 class="bd-title" id="content">Numerical Types</h2>
            <p>
            <h3 id="push "> double</h3> 
            ◦ Default type in MATLAB <br>
            ◦ Floating point representation <br>
              Example: 12.34 = 1234 * 10-2 <br>
              Mantissa and exponent <br>
             ◦ 64 bits (8 bytes) <br>
             <h3 id="push "> single </h3>
             ◦ 32-bit floating point <br>
             <h3 id="push "> Integer types</h3>
              ◦ Signed, unsigned <br>
              ◦ 8-, 16-, 32-, 64-bit long <br>
            </p><br><br><br>
            <h2 class="bd-title" id="content">Range of Values</h2>
             <!--Image -->
             <img src="imagess/Screenshot (175).png">
                    </a><br><br><br>
             <h2 class="bd-title" id="content">Range of Values</h2>
             <!--Image -->
             <img src="imagess/Screenshot (176).png">
                    </a><br><br><br>
             <h2 class="bd-title" id="content">Useful functions</h2>
              <p>
              <h3 id="push "> Type check:</h3>
              ◦ class <br>
              ◦ isa <br>
               >> isa(x,’double’) <br>
               <h3 id="push ">   Range check:</h3> 
                ◦ intmax, intmin <br>
                ◦ realmax, realmin <br>
                 >> intmax(’uint32’) <br>
                 <h3 id="push ">  Conversion: </h3>
                 ◦ Name of function = name of desired data type<br>
                 ◦ int8(x), uint32(x), double(x), etc.<br>
              </p><br><br>
              <h2 class="bd-title" id="content">Operators</h2>
              <p>
              <h3 id="push "> Arithmetic operators </h3>
              ◦ Operands of the same data type: No problem<br>
               ◦ Different data types: <br>
                 “mixed-mode arithmetic” <br>
                 Many rules and restrictions<br>
                <h3 id="push ">  Relational operators</h3>
                 ◦ Different data types are always allowed <br>
                 ◦ Result is always of logical type <br>
              </p><br><br>
              <h2 class="bd-title" id="content">Strings</h2>
              <p>
              <h3 id="push "> Text: string</h3>
              <h3 id="push ">  We have used them already: </h3>
               ◦ Argument to fprintf and other functions<br>
               <h3 id="push ">  String: vector of char-s</h3>
               <h3 id="push "> Numerical type</h3>
               ◦ Uses an encoding scheme <br>
               ◦ Each character is represented by a number <br>
               ◦ ASCII scheme <br>
              </p><br><br>
              <h2 class="bd-title" id="content">ASCII code</h2>
              <p>
               American Standard Code<br>
               for Information<br>
                Interchange <br>
                 Developed in the1960’s <br>
                 7 bits, 128 characters:<br>
                  ◦ Latin alphabet <br>
                  ◦ Digits <br>
                  ◦ Punctuation<br>
                   ◦ Special characters <br>
                    Newer schemes with far <br>
                   more characters <br>
                    ASCII is a subset of them<br>
              </p><br><br>
              <!--Image -->
             <img src="imagess/Screenshot (177).png">
                    </a><br><br><br>
             <h2 class="bd-title" id="content">Exercise</h2>
              <p>
               Print out the visible characters of the ASCII <br>
              table: <br><br>
              <span style="color:#0000FF"> function </span>char_codes <br>
              <span style="color:#0000FF">for</span> ii = 33:126  <br>
                  fprintf(<span style="color:#FF69B4">'%s'</span>,char(ii));<br>
                  <span style="color:#0000FF">end</span><br>
                    fprintf(<span style="color:#FF69B4">'\n'</span>);<br>
              </p><br><br>
             <h2 class="bd-title" id="content">String functions</h2>
              <!--Image -->
             <img src="imagess/Screenshot (178).png">
                    </a><br><br><br>
             <h2 class="bd-title" id="content">Structs</h2>
              <p>
              <h3 id="push ">  An array must be homogeneous: </h3>
               ◦ It cannot contain elements of multiple types.<br>
               <h3 id="push ">  A struct can be heterogeneous: </h3>
                 ◦ It can contain multiple types.<br>
                 <h3 id="push "> A struct is different from an array: </h3>
                   ◦ fields, not elements <br>
                   ◦ field names, not indices <br>
                   ◦ Fields in the same struct can have different types.<br>
                   <h3 id="push ">  Versatility inside:  </h3>
                    ◦ A field of a struct can contain another struct.<br>
              </p><br><br>
              <h2 class="bd-title" id="content">Structs in action</h2>
              <p>
              >> r.ssn = 12345678<br>
               r =  <br>
               ssn: 12345678 <br>
               >> class(r) <br>
               ans = <br>
                struct<br>
                 >> class(r.ssn)<br>
                  ans = <br>
                   double <br>
                   >> r.name = 'Homer Simpson'<br>
                    r = <br>
                     ssn: 12345678 <br>
                      name: 'Homer Simpson‘ <br>
                      >> r.address.street = '742 Evergreen Terrace' <br>
                      r =  <br>
                      ssn: 12345678 <br>
                       name: 'Homer Simpson' <br>
                        address: [1x1 struct]<br>
              </p><br><br>
              <h2 class="bd-title" id="content">Structs</h2>
              <p>
              <h3 id="push "> An array must be homogeneous:  </h3>
               ◦ It cannot contain elements of multiple types. <br> </h3> <br>
                 ◦ It can contain multiple types. <br>
                 <h3 id="push "> A struct is different from an array:  </h3>
                  ◦ fields, not elements  <br>
                  ◦ field names, not indices  <br>
                  ◦ Fields in the same struct can have different types.  <br>
                  <h3 id="push "> Versatility inside:  </h3>
                  ◦ A field of a struct can contain another struct.   <br>
                  ◦ Structs can hold arrays, and arrays can hold structs.  <br>
              </p><br><br>
              <h2 class="bd-title" id="content">String functions</h2>
              <!--Image -->
             <img src="imagess/Screenshot (179).png">
                    </a><br><br><br>
             <h2 class="bd-title" id="content">Pointers</h2>
              <p>
              <h3 id="push "> How to store a page of text? </h3>
              ◦ Each line should be a separate string <br>
              ◦ Cannot use an array of chars: <br>
                Each line would have to have the same length<br>
                ◦ A vector of objects with each referring to one line <br>
                <h3 id="push "> Pointer </h3>
               ◦ Each variable (scalar, vector, array, etc.) is stored in<br>
                the computer memory. <br>
                ◦ Each memory location has a unique address. <br>
                ◦ A pointer is a variable that stores an address.<br>
                 ◦ MATLAB calls a pointer a “cell”. <br>
              </p><br><br>
              <h2 class="bd-title" id="content">Cells</h2>
              <p>
              <h3 id="push "> MATLAB has a restrictive pointer model</h3>
              ◦ Strict rules on what can be done with cells<br>
               ◦ Harder to make mistakes<br>
               <h3 id="push ">   But it is a powerful way to store<br>
                 heterogeneous data</h3>
                  ◦ Cell arrays <br>
                  ◦ Used more frequently than structs<br>
                  <h3 id="push ">  New syntax: </h3>
                    ◦ To access the data a cell points to, use: { }<br>
                    </p><br><br>
                    <h2 class="bd-title" id="content">Cell array example</h2>
                    <p>
                    >> p = cell(2,3)<br>
                     p =  <br> 
                       []      []      []  <br>
                         []      []      []<br>
                          >>     <br>
                          </p>
                           <!--Image -->
             <img src="imagess/Screenshot (180).png">
                    </a><br><br><br>
                    <h2 class="bd-title" id="content">Cell array example</h2>
                    <p>
                    >> p = cell(2,3) <br>
                    p =   <br>
                      []      []      [] <br>
                         []      []      [] <br>
                         >> p{2,1} = pi<br>
                          p =  <br>
                             []      []      []  <br>
                               [3.14]  []      [] <br>
                               >><br>
                          </p>
                           <!--Image -->
             <img src="imagess/Screenshot (181).png">
                    </a><br><br><br>

                    <h2 class="bd-title" id="content">Cell array example</h2>
                    <p>
                    >> p = cell(2,3)<br>
                     p =  <br>
                        []      []      [] <br>
                           []      []      [] <br>
                           >> p{2,1} = pi <br>
                           p =    <br>
                            []      []      []<br>  
                              [3.14]  []      []<br>
                               >> p{1,1} = int8(-17) <br>
                               p =  <br>
                                  [-17]  []      []  <br>
                                    [3.14]  []      [] <br>
                                    >><br>
                    </p>
                           <!--Image -->
             <img src="imagess/Screenshot (182).png">
                    </a><br><br><br>
                    <h2 class="bd-title" id="content">Cell array example</h2>
                    <p>
                    >> p = cell(2,3) <br>
                    p =    <br>
                     []      []      [] <br>
                        []      []      []<br>
                         >> p{2,1} = pi <br>
                         p =    <br>
                          []      []      []  <br>
                            [3.14]  []      [] <br>
                            >> p{1,1} = -17 <br>
                            p =   <br>
                              [-17]  []      []<br>   
                               [3.14]  []      []<br>
                                >> p{2,2} = 'Awesome'<br>
                                 P =     <br>
                                  [-17]  []      []  <br>
                                    [3.14] 'Awesome'[]<br>
                    </p>
                           <!--Image -->
             <img src="imagess/Screenshot (183).png">
                    </a><br><br><br>
                    <h2 class="bd-title" id="content">Cell array example</h2>
                    <p>
                    >> p{2,3} = [2 4; 6 8; 10 12]<br>
                     P =  <br>
                         [-17]  []      []  <br>
                           [3.14] ‘Awesome’[3x2 double] <br>
                     >> <br>
 </p>
                           <!--Image -->
             <img src="imagess/Screenshot (184).png">
                    </a><br><br><br>
                    <h2 class="bd-title" id="content">Cell array example</h2>
                    <p>
                    >> p{2,3} = [2 4; 6 8; 10 12] <br>
                    P =   <br>
                       [-17]  []      []  <br> 
                        [3.14] ‘Awesome’[3x2 double] <br>
                        >> p{1,3} = sum(p{2,3}); <br>
                        >>
 </p>
                           <!--Image -->
             <img src="imagess/Screenshot (185).png">
                    </a><br><br><br>
                    <h2 class="bd-title" id="content">Cell array example</h2>
                    <p>
                    >> p{2,3} = [2 4; 6 8; 10 12] <br>
                    P =  <br>
                        [-17]  []      [] <br>
                           [3.14] ‘Awesome’[3x2 double] <br>
                   >> p{1,3} = sum(p{2,3});<br>
                    >> P{1,2} = 1/0;<br>
                     >><br>
 </p>
                           <!--Image -->
             <img src="imagess/Screenshot (186).png">
                    </a><br><br><br>
                    <h2 class="bd-title" id="content">Cell array example</h2>
                    <p>
                    >> p{2,3} = [2 4; 6 8; 10 12]<br>
                   P =   <br>
                      [-17]  []      [] <br>
                         [3.14] ‘Awesome’[3x2 double] <br>
                   >> p{1,3} = sum(p{2,3});<br>
                    >> P{1,2} = 1/0; <br>
                    >> class(p) <br>
                    ans =<br>
                      cell<br>
                       >><br>
 </p>
                           <!--Image -->
             <img src="imagess/Screenshot (187).png">
                    </a><br><br><br>
                    <h2 class="bd-title" id="content">Cell array example</h2>
                    <p>
                    >> p{2,3} = [2 4; 6 8; 10 12]<br>
                    P =<br>
                          [-17]  []      []<br>
                              [3.14] ‘Awesome’[3x2 double] <br>
                    >> p{1,3} = sum(p{2,3});<br>
                     >> P{1,2} = 1/0;<br>
                      >> class(p)<br>
                       ans = <br>
                        cell<br>
                         >> class(p{1,2}) <br>
                         ans = <br>
                          double<br>
                           >><br>
 </p>
                           <!--Image -->
             <img src="imagess/Screenshot (188).png">
                    </a><br><br><br>
                    <h2 class="bd-title" id="content">Cell array example</h2>
                    <p>
                    >> p{2,3} = [2 4; 6 8; 10 12]<br>
                     P =   <br>
                        [-17]  []      []  <br>
                          [3.14] ‘Awesome’[3x2 double] <br>
                    >> p{1,3} = sum(p{2,3});<br>
                     >> P{1,2} = 1/0;<br>
                      >> class(p)<br>
                       ans = <br>
                        cell<br>
                         >> class(p{1,2})<br>
                          ans = <br>
                           double <br>
                           >> class(p(1,2))<br>
                            ans = <br>
                             cell <br>
                             >><br>
 </p>
                           <!--Image -->
             <img src="imagess/Screenshot (189).png">
                    </a><br><br><br>
                    <h2 class="bd-title" id="content">Cell array example</h2>
                    <p>
                    >> p{2,3}(3,2)<br>
                     ans =  <br>
                      12 <br>
                      >><br>
 </p>
                           <!--Image -->
             <img src="imagess/Screenshot (190).png">
                    </a><br><br><br>
                    <h2 class="bd-title" id="content">Cell functions</h2>
                           <!--Image -->
             <img src="imagess/Screenshot (191).png">
                    </a><br><br><br>
                   
    </main>
    </div>
    </div>   
            
                
    <footer class="footer mt-auto py-3">
  <div class="container-fluid">
    <span class="text-muted">&copy; LearnByExample, Some Rights Reserved</span>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="js/vendor/jquery.slim.min.js"><\/script>')</script><script src="dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="js/dashboard.js"></script>
        <script src="js/doc.min.js"></script>
        <script src="js/docsearch.min.js"></script>
        <script src="js/prism.js"></script></body>
</html>
