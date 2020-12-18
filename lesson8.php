<!doctype html>
<html lang="en">
  <head><meta charset="windows-1252">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Anchanto Coding questions">
    <meta name="author" content="LearnByExample">
    <title>Lesson8</title>
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
          
            <h2 id="definition">Lesson 8: File Input/Output</h2>
            <p>
              by
            </p>
            <h5 id="push">Akos Ledeczi and Mike Fitzpatrick </h5><br>
            <h2 class="bd-title" id="content">File Input/Output</h2>
            <p>
            <h3 id="push"> File: </h3>
               ◦ Area in permanent storage (disk drive)<br>
               ◦ Stores information <br>
               ◦ Managed by the operating system <br>
               ◦ Can be copied or moved <br>
               ◦ Can be accessed by programs<br>
            <h3 id="push">  File Input/Output (I/O) </h3> 
                ◦ Data exchange between programs and computers <br>
                ◦ Data exchange between the physical world and computers<br>
                ◦ Saving your work so you can continue with it later  <br>
             <h3 id="push">  MATLAB can handle  </h3>
                ◦ Mat-files and M-files AND text, binary, and Excel files<br>
            </p><br><br>
            <h2 class="bd-title" id="content">Excel files</h2>
            <p>
             Microsoft Excel® is a widely used data-analysis tool <br>
             Many other programs support reading and writing <br>
            Excel files<br>
              MATLAB does too with two built-in functions<br>
             ◦ xlsread <br>
             ◦ xlswrite <br>
            </p><br><br>
            <h2 class="bd-title" id="content">Reading Excel files</h2>
             <!--Image -->
             <img src="imagess/Screenshot (140).png">
                    </a><br><br>
             <p> >> [num,txt,raw] = xlsread(<span style="color:#FF69B4">'Nashville_climate.xlsx'</span>);</p><br><br>
             <h2 class="bd-title" id="content">Numerical</h2>
             <p> 
              >> num<br>
              num = <br>
               46   28    3.98<br>
               51    31    3.7<br>
               61    39    4.88<br>
               70    47    3.94  <br>
               78    57    5.08<br>
                85    65    4.09 <br>     
                NaN   NaN    NaN  <br>  
                NaN   NaN    NaN <br>
                 89    69    3.78 <br>
                 88    68    3.27 <br>
                 82    61    3.58 <br>
                 71    49    2.87 <br>
                59    40    4.45<br> 
                 49    31    4.53</p><br><br>
             <!--Image -->
             <img src="imagess/Screenshot (141).png">
                    </a><br><br><br>
             <h2 class="bd-title" id="content">Numerical</h2>
             <p> 
              >> num<br>
              num = <br>
               46    28    3.98<br>
               51    31    3.7<br>
               61    39    4.88<br>
               70    47    3.94  <br>
               78    57    5.08<br>
                85    65    4.09 <br>     
                NaN   NaN    NaN  <br>  
                NaN   NaN    NaN <br>
                 89    69    3.78 <br>
                 88    68    3.27 <br>
                 82    61    3.58 <br>
                 71    49    2.87 <br>
                59    40    4.45<br> 
                 49    31    4.53</p><br><br>
             <!--Image -->
             <img src="imagess/Screenshot (143).png">
                    </a><br><br><br>
            <h2 class="bd-title" id="content">Numerical</h2>
             
             <!--Image -->
             <img src="imagess/Screenshot (145).png">
                    </a><br><br><br>
             <h2 class="bd-title" id="content">Text</h2>
             <p>
             >> txt =<br> 
             txt =    <br>
                 [1x30 char] ''      ''              ''             ''     <br>
                 [1x40 char] ''      ''              ''             ''  <br>
                 ''          ''      ''              ''             ''    <br>
                 ''          ''      'High temp (F)' 'Low temp (F)' 'Precip (in)'  <br> 
                ''          'Jan'   ''              ''             ''     <br> 
                 ''          'Feb'   ''              ''             ''    <br>
                 ''          'March' ''              ''             ''    <br> 
                ''          'April' ''              ''             ''    <br>  
                 ''          'May'   ''              ''             ''<br>
                ''          'June'  ''              ''             ''     <br> 
                ''          ''      ''              ''             ''  <br>
                 ''          ''      'High temp (F)' 'Low temp (F)' 'Precip (in)' <br> 
                 ''          'July‘  ''              ''             ''   <br>   
                ''          'Aug'   ''              ''             ''  <br>   
                ''          'Sep'   ''              ''             ''     <br>
                ''          'Oct'   ''              ''             ''   <br>  
                 ''          'Nov'   ''              ''             ''    <br>
                 ''          'Dec'   ''              ''             ''<br>
             </p><br><br>
             <h2 class="bd-title" id="content">All data: cell array</h2>
             <p>
             >> raw 
             raw =     
               [1x30 char] [ NaN] [ NaN]          [ NaN]       [ NaN]   <br>
               [1x40 char] [ NaN] [ NaN]       [ NaN]         [ NaN]  <br>  
                [ NaN]    [ NaN] [ NaN]          [ NaN]         [ NaN]  <br>  
                [ NaN]      [ NaN] 'High temp (F)' 'Low temp (F)' 'Precip (in)'   <br> 
                [ NaN]     'Jan'   [ 46]           [ 28]          [ 3.98]    <br> 
                [ NaN]     'Feb'   [ 51]           [ 31]          [ 3.7]   <br>  
                [ NaN]     'March' [ 61]           [ 39]          [ 4.88]   <br>
                [ NaN]     'April' [ 70]           [ 47]          [ 3.94]   <br>
                [ NaN]     'May'   [ 78]           [ 57]          [ 5.08]  <br>  
                 [ NaN]     'June‘  [ 85]           [ 65]          [ 4.09]    <br>
                 [ NaN]     [ NaN]  [ NaN]          [ NaN]         [ NaN]      <br>
                 [ NaN]     [ NaN]  'High temp (F)' 'Low temp (F)' 'Precip (in)'  <br>
                 [ NaN]     'July‘  [ 89]           [ 69]          [ 3.78]   <br>  
                [ NaN]     'Aug'   [ 88]           [ 68]          [ 3.27] <br>   
                [ NaN]     'Sep'   [ 82]           [ 61]          [ 3.58]  <br>   
                [ NaN]     'Oct'   [ 71]           [ 49]          [ 2.87]    <br>
                [ NaN]     'Nov'   [ 59]           [ 40]          [ 4.45]   <br> 
                 [ NaN]     'Dec'   [ 49]           [ 31]          [ 4.53] <br>
             </p><br><br>
             <h2 class="bd-title" id="content">Text files</h2>
             <p>
              Text files contain characters<br>
               They use an encoding scheme: <br>
               ◦ ASCII or <br>
               ◦ Any one of many other schemes <br>
               ◦ MATLAB takes care of encoding and decoding <br>
                Before using a text file, we need to open it <br>
                Once done with the file, we need to close it<br>
             </p><br><br>
             <h2 class="bd-title" id="content">Opening text files</h2>
             <p>
              Opening:  fid = fopen(filename, permission) <br>
              Closing: fclose(fid)<br>
               fid: Unique file identifier for accessing file <br>
               Permission: what we want to do with the file—<br>
               ◦ read, write, overwrite, append, etc. <br>
             </p><br><br>
             <!--Image -->
             <img src="imagess/Screenshot (146).png">
                    </a><br><br><br>
            <h2 class="bd-title" id="content">Reading text files</h2>
             <p>
              One line at a time  <br>
              type prints a text file in the command window  <br>
              Let’s re-implement it:   <br> <br>  
             <span style="color:#0000FF"> function </span>view_text_file(filename) <br>
              fid = fopen(filename,<span style="color:#FF69B4">'rt'</span>); <br>
              <span style="color:#0000FF">if </span>fid < 0  <br>  
             error(<span style="color:#FF69B4">'error opening file %s\n\n'</span>, filename);  <br>
             <span style="color:#0000FF"> end </span>  <br> <br>
             <span style="color:#32CD32"> % Read file as a set of strings, one string per line:</span> <br>
            oneline = fgets(fid);  <br>
            <span style="color:#0000FF">while </span>ischar(oneline)    <br>
             fprintf(<span style="color:#FF69B4">'%s'</span>,oneline) <span style="color:#32CD32">% display one line  </span>  <br>
             oneline = fgets(fid); <br>
             <span style="color:#0000FF"> end</span> <br>
            fprintf(<span style="color:#FF69B4">'\n'</span>);  <br>
             fclose(fid);</p> <br> <br>
             <h2 class="bd-title" id="content">Reading text files</h2>
             <p>
              Reading lines into string variables is easy <br>
              Parsing these strings to get numerical data is<br>
              much harder<br>
              Not covered <br>
              Binary files are more suited for numerical data <br>
              </p><br> <br><br>
              <h2 class="bd-title" id="content">Binary files</h2>
             <p>
              Binary file = “not a text file” <br>
              Many different ways to represent numbers<br>
              All we need to know are their types.<br>
              Binary files need to be <br>
               ◦ Opened with fopen<br>
               ◦ Closed with fclose</p><br><br>
                <!--Image -->
             <img src="imagess/Screenshot (147).png">
                    </a><br><br><br>
                    </p><br> <br><br>
              <h2 class="bd-title" id="content">Writing binary files</h2>
             <p>
              Data type is important <br>
              Example: write a double array into a binary file <br><br>
             <span style="color:#0000FF">function </span>write_array_bin(A,filename) <br>
             fid = fopen(filename, <span style="color:#FF69B4">'w+'</span>); <br>
             <span style="color:#0000FF">if</span> fid < 0    <br> 
             error( <span style="color:#FF69B4">'error opening file %s\n‘</span>, filename);<br>
             <span style="color:#0000FF"> end </span><br><br>
             fwrite(fid,A, <span style="color:#FF69B4">'double'</span>); <br><br>
             fclose(fid);</p><br><br>
             <h2 class="bd-title" id="content">Reading binary files</h2>
             <p>
              Example: read a double array from a binary file <br><br>
             <span style="color:#0000FF">function</span> A = read_bin_file(filename,data_type) <br>
             fid = fopen(filename,'r');<br>
             <span style="color:#0000FF"> if </span>fid < 0     <br>
              error( <span style="color:#FF69B4">'error opening file %s\n'</span>,filename);<br>
              <span style="color:#0000FF"> end</span> </span><br><br>
             A = fread(fid,inf,data_type); <br><br>
             fclose(fid);</p><br><br>          
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
