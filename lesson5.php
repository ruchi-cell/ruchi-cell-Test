<!doctype html>
<html lang="en">
  <head><meta charset="windows-1252">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Anchanto Coding questions">
    <meta name="author" content="LearnByExample">
    <title>Lesson5</title>
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
          
            <h2 id="definition">Lesson 5: Selection</h2>
            <p>
              by
            </p>
            <h5 id="push">Akos Ledeczi and Mike Fitzpatrick </h5><br>
            <h2 class="bd-title" id="content">Control Flow</h2>
            <h3 id="push"> Sequential control   </h3>
            <p>
            <li> Sequence of commands executed one after the other </li>
            </p>
            <h3 id="push"> MATLAB interpreter </h3>
            <p>
            <li> Part of the MATLAB program that interprets<br>
             and executes the various commands </li>
            <li> Sequential control: default </li>
            </p>
            <h3 id="push"> Control construct  </h3>
            <p>
                <ul>
                    <li> A method by which the interpreter selects the next command to execute </li>
                    <li>Sequential control: default</li>
                    <li> Selection or Branching </li>
                </ul>
            </p><br>
            <h2 class="bd-title" id="content">if-statement</h2>
            <p>
             Most common selection construct: if-statement<br>
              Example:<br>
              <span style="color:#0000FF">function </span>guess_my_number(x) <br>
              <span style="color:#0000FF"> if</span> x == 2 <br>
               fprintf( <span style="color:#FF69B4">'Congrats! You guessed my number.\n' </span>);<br>
               <span style="color:#0000FF"> end</span><br>
              Begins with control statement <br>
              ◦ <span style="color:#0000FF"> if </span>keyword followed by a condition <br>
               Ends with statement:  <span style="color:#0000FF">end</span> <br>
               In between: statements to be executed if and <br>
              only if condition is true <br>
            </p>
            <h2 class="bd-title" id="content">Schematic of an if-statement</h2><br>
             <!--Image -->
             <img src="imagess/Screenshot (121).png">
                    </a><br>
             <h2 class="bd-title" id="content">Condition: <span style="color:#FF0000"> true</span></h2>
             <!--Image -->
             <img src="imagess/Screenshot (122).png">
                    </a><br>
              <h2 class="bd-title" id="content">Condition: <span style="color:#FF0000">false</span></h2>
             <!--Image -->
             <img src="imagess/Screenshot (123).png">
                    </a><br>
             <h2 class="bd-title" id="content">if-else-statement</h2>
             <p>
              Executing a different set of statements based<br>
              on the condition: <br><br>
 
              <span style="color:#0000FF"> function</span> guess_my_number(x)<br>
              <span style="color:#0000FF"> if</span> x == 2 
               fprintf(<span style="color:#FF69B4">  'Congrats! You guessed my number!\n'</span>);<br>
               <span style="color:#0000FF">else </span> <br>
                fprintf(<span style="color:#FF69B4">  'Not right, but a good guess.\n'</span>);<br>
                <span style="color:#0000FF">  end </span><br><br>
                 <h2 class="bd-title" id="content">if-else-statement</h2>
             <!--Image -->
             <img src="imagess/Screenshot (124).png">
                    </a><br>
                    <h2 class="bd-title" id="content">Condition: <span style="color:#FF0000"> true</span></h2>
             <!--Image -->
             <img src="imagess/Screenshot (125).png">
                    </a><br>
                    <h2 class="bd-title" id="content">Condition:<span style="color:#FF0000"> false</span></h2>
             <!--Image -->
             <img src="imagess/Screenshot (126).png">
                    </a><br>
                    <h2 class="bd-title" id="content">if-else-statement</h2>
             <p>
              if-statement: <br><br>
             <span style="color:#0000FF">if  </span>conditional <br>
             block<br>
             <span style="color:#0000FF"> end </span> <br>
            <h2 class="bd-title" id="content">Relational Operators</h2>
             <p>
              Produces a result that depends on the <br>
             relation between its two operands<br>
               It can appear outside if-statements! <br>
              </p>
             <!--Image -->
             <img src="imagess/Screenshot (127).png">
                  </a><br><br>
            <h2 class="bd-title" id="content">Logical Operators</h2>
             <p>
              Logical values: <br>
             ◦ Non-zero: true <br>
             ◦ Zero:    false <br>
             ◦ MATLAB returns 1 for true <br>
              How to combine logical values? <br>
               Logical operators: <br>
              </p>
             <!--Image -->
             <img src="imagess/Screenshot (128).png">
                  </a><br><br>
            <h2 class="bd-title" id="content">Truth table</h2>
             <p>
              not:  <br>
             ◦ flips the value of its (single) operand <br>
               and:  <br>
               ◦ true if and only if both of its operands are true <br>
                 or:  <br>
                 ◦ false if and only if both of its operands are false  <br>
             </p>
             <!--Image -->
             <img src="imagess/Screenshot (129).png">
                  </a><br><br>
            <h2 class="bd-title" id="content">Truth table</h2>
             <p>
              not:  <br>
             ◦ flips the value of its (single) operand <br>
               and:  <br>
               ◦ true if and only if both of its operands are true <br>
                 or:  <br>
                 ◦ false if and only if both of its operands are false  <br>
             </p>
             <!--Image -->
             <img src="imagess/Screenshot (130).png">
                  </a><br><br>
                  <h2 class="bd-title" id="content">Precedence revisited</h2>
            
             <!--Image -->
             <img src="imagess/Screenshot (131).png">
                  </a><br><br>
                  <h2 class="bd-title" id="content">Precedence revisited</h2>
                  <p>
                  >> help<span style="color:#FF69B4">  precedence  </span> <br>   
                    1. transpose (.'), power (.^), complex conjugate   <br>   
                      transpose ('), matrix power (^)   <br>     
                     2. unary plus (+), unary minus (-), logical negation (~)    <br>  
                    3. multiplication (.*), right division (./), left   <br>  
                        division (.\), matrix multiplication (*), matrix right <br>      
                        division (/), matrix left division (\)    <br>  
              4. addition (+), subtraction (-)     <br>  
                        5. colon operator (:)   <br>     
                 6. less than (<), less than or equal to (<=),   <br>   
                         greater than(>), greater than or equal to (>=),     <br>  
                           equal to (==), not equal to (~=)    <br>    
                      7. element-wise logical AND (&)     <br>   
                         8. element-wise logical OR (|)      <br>  
                            9. short-circuit logical AND (&&)    <br>  
                                10. short-circuit logical OR (||) <br>  
                  </p>
                  <h2 class="bd-title" id="content">Nested if-statements</h2>
                  <p>
                   if-statements can contain other if-statements  <br>  
                   Consider the example with a single if-elseif- <br>  
                  else statement:  <br>   <br>  
 
                  <span style="color:#0000FF"> function </span> ultimate_question(x)<br>
                  <span style="color:#0000FF"> if </span> x == 42 <br>
                    fprintf(<span style="color:#FF69B4">'Wow! You answered the question.\n'</span>);<br>
                    <span style="color:#0000FF"> elseif </span> x < 42 <br>
                      fprintf(<span style="color:#FF69B4">'Too small. Try again.\n'</span>); <br>
                      <span style="color:#0000FF"> else </span> <br>
                       fprintf(<span style="color:#FF69B4">'Too big. Try again.\n'</span>); <br>
                       <span style="color:#0000FF"> end  </span></p><br><br>
                  <p>
                  <h2 class="bd-title" id="content">Nested if-statements</h2>
                   Here is a version with nesting:  <br> <br>
 
                  <span style="color:#0000FF"> function  </span>ultimate_question_nested(x)  <br>
                  <span style="color:#0000FF"> if </span> x == 42  <br>
                   fprintf(<span style="color:#FF69B4">'Wow! You answered the question.\n'</span>); <br>
                   <span style="color:#0000FF">else  </span> <br>
                   <span style="color:#0000FF">if </span> x < 42  <br> 
                      fprintf(<span style="color:#FF69B4">'Too small. Try again.\n'</span>);  <br>
                      <span style="color:#0000FF"> else   </span> <br>
                        fprintf(<span style="color:#FF69B4">'Too big. Try again.\n'</span>);  <br>
                        <span style="color:#0000FF"> end  </span><br>
                        <span style="color:#0000FF">  end </span> </p> <br> <br>
                  <p>
                  <h2 class="bd-title" id="content">Nested if-statements</h2>
                   Here is another version with nesting:  <br> <br>
 
                  <span style="color:#0000FF"> function  </span>ultimate_question_nested(x)  <br>
                  <span style="color:#0000FF"> if </span> x == 42  <br>
                   fprintf(<span style="color:#FF69B4">'Wow! You answered the question.\n'</span>); <br>
                   <span style="color:#0000FF">else  </span> <br>
                   <span style="color:#0000FF">if </span> x < 42  <br> 
                      fprintf(<span style="color:#FF69B4">'Too small. Try again.\n'</span>);  <br>
                      <span style="color:#0000FF"> else   </span> <br>
                        fprintf(<span style="color:#FF69B4">'Too big. Try again.\n'</span>);  <br>
                        <span style="color:#0000FF"> end  </span><br>
                        </p> <br> <br>
                          <h2 class="bd-title" id="content">Polymorphic functions</h2>
                  <p>
                   Functions that behave differently based on  <br>
                  ◦ Number of input or output arguments  <br>
                  ◦ Type of input or output arguments <br>
                    Many built-in functions are polymorphic  <br>
                   (sqrt, max, size, plot, etc.)  <br>
                    How do we make our functions <br>
                    polymorphic?  </p><br> <br>
                    <h2 class="bd-title" id="content">Number of arguments</h2>
                  <p>
                   Two built-in functions:  <br>
                  ◦ nargin: returns the number of actual input <br>
                   arguments that the function was called with <br>
                    ◦ nargout: returns the number of output arguments <br>
                     that the function caller requested </p> <br> <br>
                     <h2 class="bd-title" id="content">Example : multiplication table</h2>
                  <p>
                  <span style="color:#0000FF">function </span>[table summa] = multable(n, m) <br>
                   The function multable returns an n-by-m<br>
                   multiplication table in the output argument table <br>
                    Optionally, it can return the sum of all elements<br>
                    in the output argument summa<br>
                      If m is not provided, it returns and n-by-n matrix
                     </p><br><br>
                     <h2 class="bd-title" id="content">Example</h2>
                  <p>
                  <span style="color:#0000FF"> function</span> [table summa] = multable(n, m)  <br>
                  <span style="color:#0000FF">if</span> nargin < 2   <br>
              m = n;  <br>
              <span style="color:#0000FF"> end </span> <br>
               table = (1:n)' * (1:m);  <br>
               <span style="color:#0000FF">if </span>nargout == 2     <br>
                 summa = sum(table(:)); <br>
                 <span style="color:#0000FF"> end </span> <br> <br>
                  <h2 class="bd-title" id="content">Robustness</h2>
                  <p>
                   A function declaration specifies:<br>
                   ◦ Name of the function,<br>
                    ◦ Number of input arguments, and <br>
                    ◦ Number of output arguments <br>
                     Function code and documentation specify:<br>
                     ◦ What the function does, and <br>
                     ◦ The type of the arguments <br>
                     ◦ What the arguments represent <br>
                      Robustness <br>
                     ◦ A function is robust if it handles erroneous input and <br>
                     output arguments, and<br>
                      ◦ Provides a meaningful error message <br><br>
                      <h2 class="bd-title" id="content">Example</h2>
                  <p>
                  <span style="color:#0000FF">function</span> [table summa] = multable(n, m) <br><br>
                  <span style="color:#0000FF">if </span>nargin < 1   <br>
                    error(<span style="color:#FF69B4">'must have at least one input argument'</span>); <br>
                    <span style="color:#0000FF"> end</span> <br>
                    <span style="color:#0000FF">if</span> nargin < 2  <br> 
                      m = n; <br>
                      <span style="color:#0000FF"> elseif </span>~isscalar(m) || m < 1 || m ~= fix(m)  <br>
                         error(<span style="color:#FF69B4">'m needs to be a positive integer'</span>);<br>
                         <span style="color:#0000FF"> end</span> <br>
                         <span style="color:#0000FF"> if </span>~isscalar(n) || n < 1 || n ~= fix(n)  <br>  
                           error(<span style="color:#FF69B4">'n needs to be a positive integer'</span>); <br>
                           <span style="color:#0000FF">end </span><br>
                table = (1:n)' * (1:m); <br>

                <span style="color:#0000FF"> if</span> nargout == 2  <br>
                   summa = sum(table(:));<br>
                <span style="color:#0000FF"> end</span><br><br>
                 <h2 class="bd-title" id="content">Comments</h2>
                  <p> 
                   Extra text that is not part of the code <br>
                   MATLAB disregards it<br>
                    Anything after a % is a comment until the end <br>
                   of the line <br>
                    Purpose: <br>
                    ◦ Extra information for human reader<br>
                     ◦ Explain important or complicated parts of the program <br>
                     ◦ Provide documentation of your functions <br>
                      Comments right after the function declaration<br> 
                     are used by the built-in help function<br><br>
                     <h2 class="bd-title" id="content">Example</h2>
                  <p> 
                  <span style="color:#0000FF">function</span> [table summa] = multable(n, m) <br><br>
                   <span style="color:#32CD32"> %MULTABLE multiplication table.<br>
                    % T = MULTABLE(N) returns an N-by-N matrix<br>
                     % containing the multiplication table for <br>
                     % the integers 1 through N.<br>
                      % MULTABLE(N,M) returns an N-by-M matrix.<br>
                       % Both input arguments must be positive<br>
                        % integers.<br>
                         % [T SM] = MULTABLE(...) returns the matrix<br>
                     % containing the multiplication table in T <br>
                     % and the sum of all its elements in SM.</span> <br><br>
                     <span style="color:#0000FF"> if</span> nargin < 1   <br>
                     error(<span style="color:#FF69B4">'must have at least one input argument'</span>);<br>
                     <span style="color:#0000FF"> end</span> <br>
                     …<br>
                                                             >> help multable<br><br>
                    <h2 class="bd-title" id="content">Persistent variable</h2>
                  <p> 
                   Variables: <br>
                  ◦ Local <br>
                  ◦ Global <br>
                  ◦ Persistent <br>
                   Persistent variable: <br> 
                  ◦ It’s a local variable, but its value persists from one<br>
                   call of the function to the next. <br>
                    ◦ Relatively rarely used<br>
                     ◦ None of the bad side effects of global variables.<br><br>       
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
