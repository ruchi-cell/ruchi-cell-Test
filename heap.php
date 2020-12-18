<!doctype html>
<html lang="en">
  <head><meta charset="windows-1252">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Anchanto Coding questions">
    <meta name="author" content="LearnByExample">
    <title>HEAP</title>
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

<nav class="collapse bd-links" id="bd-docs-nav" aria-label="Main navigation"><div class="bd-toc-item active">
      <a class="bd-toc-link" href="#">
        Heap and its types
      </a>

      <ul class="nav bd-sidenav"><li>
            <a href="google.php">
            Max-heap
            </a>
          </li>
          <li>
            <a href="anchanto.php">
            Min-heap
            </a>
          </li>
          <li>
            <a href="anchanto.php">
            Time complexity
            </a>
          </li>
          <li>
            <a href="anchanto.php">
            Space complexity
            </a>
          </li>
          <li>
            <a href="anchanto.php">
            Insertion
            </a>
          </li>
          <li>
            <a href="anchanto.php">
            Deletion
            </a>
          </li>
        </ul>
    </div></nav>

        </div>
        
         


        <main class="col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <div class="d-md-flex flex-md-row-reverse align-items-center justify-content-between">
            <a class="btn btn-sm btn-bd-light my-2 my-md-0" href="google.php" title="Previous Tutorial" target="_blank" rel="noopener">Previous</a>
            <h1 class="bd-title" id="content">HEAP</h1>
          </div>
          <p class="bd-lead"></p>
          
          <span style="background-color:#ffb6c1"><h2>What is Heap?</h2></span><br><br>
            <p>
            Heap is  a complete binary tree. Complete means If we look at the tree there should not <br>
           be void from left to right. Don’t be confused that there should be children for every node. <br>
           What I am trying to say is that if there exists any left uncle (left parent) for a child then <br>
           that uncle must have children. However, the right uncle may /maynot have children. Or <br>
           in short, at every level there should not be void while traversing from left to right. For<br>
           any child it’s  predecessor must be filled.<br><br><br>


         -> Heap is an abstract data type as the underlying data structure for heap is an array.<br>
         -> Heap is of two type: i) Max Heap ii) Min Heap<br>
         -> Max heap: In max heap , each parent node’s value or key is greater than its children.<br>
          Important thing here to note is that we don’t need to bother about leftChild or rightChild<br>
           as in the case of Binary Search Tree we have rightChild > leftChild. But here any node <br>
           between leftChild and rightChild can be greater. But whatever be the scenario,<br>
            parentNode is always greater than childrenNode.<br><br>

          -> Min heap: In mean heap, each parent node’s value or key is smaller than its children.<br> 
          Important thing here to note is that we don’t need to bother about leftChild or rightChild <br>
          as in the case of Binary Search Tree we have rightChild > leftChild. But here any node<br>
           between leftChild and rightChild can be greater. But whatever be the scenario <br>
           parentNode is always smaller than the childrenNode.<br>
            </p>
            <span style="background-color:#00FEFE"><h2>Time and Space Complexity:</h2></span><br><br>

               <p>
                    -> Space complexity = O(n)
                    -> Time complexity to build a heap = O(n) + O(logn) = O(n).<br>
                    -> Time complexity to get Max element from max heap = O(1)<br>
                     -> Time complexity to get Min element from min heap = O(1)<br>
                     -> Time complexity to remove an element from root = O(1) +  O(logn) = O(logn)<br>
                     -> Time complexity to remove any element except root = O(n) + O(logn) = O(n)<br>
                     -> Time complexity for Heapsort = O(nlogn)

                   <p style="color:green"><h2>Insertion:</h2><br></p>
                    We can insert any element into heap in O(1) as the underlying data structure for heap is<br>
                     an array. And array indexes can be accessed in O(1). But then after inserting we have<br>
                      to check the heap property. We call that operation heapify. So it’s going to visit the<br>
                       height of the tree. So time complexity for visiting a complete binary tree is going to take<br>
                        O(logn). Therefore, <br><span style="background-color:#00FEFE">Inserting an element into the heap is going to take O(logn) time.</span><br><br>
                    </p>
                    <p style="color:green"><h2>Deletion:</h2><br></p>
               <p>
               
               Generally we are interested in deleting the root element from the heap. Because heap is <br>
               most of the time used as auxiliary data structure for graph related algorithms such as<br>
                shortest path algorithms. We can take out the root element in O(1), but it’s going to<br>
                 create a void at that place. So to delete the root element we first store the root element <br>
                 into a temp variable then we put the last leaf node at root and decrease the size by 1 <br>
                 then  apply heapify. As we know heapify takes O(logn). <span style="background-color:#ffb6c1">So, Deleting a root element from <br>
                  the heap is going to take O(logn) + O(1) = O(logn).</span><br><br>
                 

                  <p style="color:green"><strong>code:</strong><br></p>
                  <p style="color:blue"><h2>i) Heap.java</h2><br></p>
                   <!--If you want to write code use this block-->
            <div class="bd-clipboard"><button type="button" class="btn-clipboard" title="" data-original-title="Copy to clipboard">Copy</button></div>
            
                  <pre>
                <code class="language-java">
                    
              
class Heap {<br>
    private Integer[] heap;<br>
    private int currentPosition = -1;<br>
    private String type;<br><br>
    
    public Heap(int size,String type){<br>
        this.heap = new Integer[size];<br>
        this.type = type;<br>
    }<br><br>
    
    public void insert(int data){<br>
        if(isFull()){<br>
            throw new RuntimeException("Heap is Full.");<br>
        }<br>
        this.heap[++currentPosition] = data;<br>
        fixUp(currentPosition);<br>
    }<br><br>
    
    public void fixUp(int pos){<br>
        if(pos == 0){<br>
            return;<br>
        }<br>
        int parent = (pos-1)/2 ;<br><br>
        
        if(type == "MAX"){<br>
            if(this.heap[parent] < this.heap[pos]){<br>
                int temp = heap[parent];<br>
                this.heap[parent] = this.heap[pos];<br>
                this.heap[pos] = temp;<br>
                fixUp(parent);<br>
            }<br>
        }else if(type == "MIN"){<br>
            if(this.heap[parent] > this.heap[pos]){<br>
                int temp = heap[parent];<br>
                this.heap[parent] = this.heap[pos];<br>
                this.heap[pos] = temp;<br>
                fixUp(parent);<br>
            }<br>
        }<br>
    }<br><br>
    
    public int getRoot(){<br>
        return this.heap[0];<br>
    }<br><br>
    
    public int getMax() {<br>
        int res = this.heap[0];<br>
        this.heap[0] = this.heap[currentPosition];<br>
        this.heap[currentPosition--] = null;<br>
        fixDown(0);<br>
        return res;<br>
    }<br>
    private void fixDown(int index){<br>
        if(index >= this.currentPosition){<br>
            return;<br>
        }<br>
        int leftChild = 2*index + 1;<br>
        int rightChild = 2*index + 2;<br><br>
        
        if(rightChild>currentPosition){<br>
            if(leftChild>currentPosition){<br>
                return;<br>
            }else{<br>
                int max = leftChild;<br>
                // if(this.heap[leftChild]<this.heap[rightChild])>{  <br><br>
  
                //     max = rightChild;<br>
                // }<br>
                if(this.heap[max]>this.heap[index]){ <br>
                    int temp = this.heap[leftChild];<br>
                    this.heap[max] =  this.heap[index];<br>
                    this.heap[index] = temp;<br>
                    index = max;<br>
                    fixDown(index);<br>
                }<br>
            }<br>
        }<br>
        else{<br>
            int max = leftChild;<br>
            if(this.heap[leftChild]<this.heap[rightChild])>{ <br>
                max = rightChild;<br>
            }<br>
            if(this.heap[max]>this.heap[index]){<br>
                int temp = this.heap[max];<br>
                this.heap[max] = this.heap[index];<br>
                this.heap[index] = temp;<br>
                index = max;<br>
                fixDown(index);<br>
            }<br>
        }<br><br><br>
        
        
    }<br><br>
    
    public void heapsort() {<br>
        while(this.currentPosition>=0){<br>
            int temp = this.heap[0];<br>
            System.out.print(temp+" ");<br>
            this.heap[0] =  this.heap[currentPosition--];<br>
            fixDown(0);<br><br>
            
        }<br>
    }<br><br>
    
    private boolean isFull(){<br>
        return this.currentPosition == this.heap.length;<br>
    }<br><br>
    
    public void getHeap(){<br>
        for (int i =0;i<=this.currentPosition;i++)<br>
        System.out.print(heap[i]+" ");<br>
    }<br><br><br>
    
    
}<br><br>
</code>
            </pre>
            <!--Block Ends-->
           

<p style="color:blue"><h2>ii) Main.java</h2><br></p>
 <!--If you want to write code use this block-->
 <div class="bd-clipboard"><button type="button" class="btn-clipboard" title="" data-original-title="Copy to clipboard">Copy</button></div>
                             
<pre>
       <code class="language-java">
public class Main<br>
{<br>
    public static void main(String[] args) {<br>
        String type = "MAX"; // For min type = "MIN"<br>
        Heap h = new Heap(10,type);<br>
        h.insert(20);<br>
        h.insert(5);<br>
        h.insert(10);<br>
        h.insert(15);<br>
        h.insert(13);<br>
        h.insert(25);<br>
        h.insert(30);<br>
        h.insert(100);<br>
        h.insert(50);<br>
        h.insert(200);<br><br>
        
        h.getHeap();<br>
        System.out.println();<br>
        System.out.print("Root: "+h.getMax());<br>
        System.out.println();<br>
        h.getHeap();<br>
        System.out.println();<br>
//         for(int i =0;i<9;i++)>{ <br>
//             System.out.println("Root: " +h.getMax());<br>
//             h.getHeap();<br>
//             System.out.println();<br>
//         }<br>
        h.heapsort();<br><br>
        
    }<br>
}<br><br>
</code>
            </pre>
             <!--Block Ends-->

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



            
   