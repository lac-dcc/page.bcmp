<html>

  <head>

    <title>Angha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" type="text/css" href="include/css/00_reset.css">
    <link rel="stylesheet" type="text/css" href="include/css/10_home-default.css">
    <link rel="stylesheet" type="text/css" href="include/css/20_fluff.css">
    <link rel="stylesheet" type="text/css" href="include/css/30_mobile.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <link rel="apple-touch-icon" sizes="180x180" href="include/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="include/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="include/icons/favicon-16x16.png">
    <link rel="manifest" href="include/icons/site.webmanifest">
    <link rel="mask-icon" href="include/icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <script src="src/jquery-3.4.1.js"></script>

  </head>


  <body>

    <div id="div-body-wrapper" style="width: 100%;"> <!-- Div Header -->

			<!-- ------------------------Header Logo Image------------------------ -->
      <div id="div-header-logo"><img src="include/icons/angha_logo.png" style="width: 100px;"></div>

    <!-- ==============================section============================== -->

      <div id="div-col-01" class="section">

        <div>
          <h3>Angha Project</h3>
          The goal of the Angha Project is to generate C benchmarks out of open
          source repositories. To this end, we download programs from these
          repositories, split them into individual functions and reconstruct
          missing declarations to ensure that they compile. This page contains
          530K samples of programs that we have generated in this way. You can
          compile them all into object files using clang or gcc. Additionally,
          we provide all the machinery for those interested in producing
          more benchmarks. For comparison, we also provide actual C benchmarks,
          and synthetic programs produced by various benchmark generators. We
          have extracted feature vectors (59 different features) for all these
          benchmarks, in case the interested reader wants to use them to
          autotune compilers. The passes used in the extraction are:
          <i><nobr>-mem2reg</nobr> <nobr>-O0</nobr> <a href="https://github.com/condekind/llvm-ep" target="_blank"><nobr>-VarCounter*</nobr>
          <nobr>-EdgeCounter*</nobr></a> <nobr>-stats</nobr></i>.
        </div>

        <div>
          <div style="padding-top: 1em; padding-bottom: 0.8em;">
            We provide charts relating different characteristics of the
            benchmarks available in this page. Inside each collection featured 
            on the "Available Benchmarks" section, click the 'data analysis' 
            link to have access to them. These charts show relations between 
            the following program features:
          </div>

          <div style="padding-right: 0.8em; padding-left: 0.8em; font-size: 90%">
            <table>
              <tr>
                <td>
                  Number of store instructions:
                </td>
                <td>
                  How many store operations appear in the LLVM representation of the
                  program.
                </td>
              </tr>

              <tr>          
                <td>
                  Number of load instructions:
                </td>
                <td>
                  How many load operations appear in the LLVM representation of the
                  program.
                </td>
              </tr>
                
              <tr>          
                <td>
                  Number of basic blocks:
                </td>
                <td>
                  Number of <a href="https://en.wikipedia.org/wiki/Basic_block" target="blank">basic blocks</a> in
                  the LLVM representation of the program.
                </td>
              </tr>
                
              <tr>          
                <td>
                  Number of instructions:
                </td>
                <td>
                  Quantity of LLVM instructions in the intermediate representation of
                  each program.
                </td>
              </tr>
                
              <tr>          
                <td>
                  Number of named variables:
                </td>
                <td>
                  Quantity of SSA-form variables in the LLVM representation of each
                  program.
                </td>
              </tr>
                
              <tr>          
                <td>
                  Number of variable uses:
                </td>
                <td>
                  Sum of the number of times that each named variable appears as an
                  operand in some instruction in the LLVM representation of the
                  program.
                </td>
              </tr>
                
              <tr>          
                <td>
                  Number of edges:
                </td>
                <td>
                  Number of edges in the <a href="https://en.wikipedia.org/wiki/Control-flow_graph" target="blank">Control Flow Graph</a> of
                  each program.
                </td>
              </tr>
            </table>
          </div>
        </div>

        <hr style="visibility:hidden;">

        <!-- --------------------------------------------------------------- -->
        <!-- ------------extracted feature table used to go here------------ -->
        <!-- --------------------------------------------------------------- -->
        
      </div> <!-- div-col-01 -->

    <!-- ==============================section============================== -->

      <div id="div-col-02" class="section">

      <div>
        <h3>Available Benchmarks</h3>
    The following benchmark suites are being used in our work:
      </div>


      <!-- <hr style="visibility:hidden;"> -->


      <ul> <!-- ----------------------list of contents---------------------- -->
        <li> <!-- ---------------------------item--------------------------- -->
          <!-- content title -->
          <label class="label-expand">
            <i class="icon-expand material-icons m">expand_more</i>
            <b>Angha-Bench (10K largest functions)</b>
          </label>

          <!-- content, hidden by default -->
          <div class="div-hidden-expandable">
            The 10.000 largest compilable C functions extracted from
            programs, mined from popular github repositories.

            <!-- links & more -->
            <div style="display: flex;">
              <a href="#" style="width: 50%" class="a-expand">Data analysis</a>
              <span style="width: 50%; text-align: right">
                17 MB
                <a href="http://cuda.dcc.ufmg.br/angha/src/suites/angha_kernels_largest_10k.tar.gz" target="_blank"><i class="material-icons m">archive</i></a>
              </span>
            </div>

            <!-- images -->
            <div class="div-hidden-expandable img-grid" style="display: grid">
              <img src="include/pics/charts/largest10_01_load_store.png" alt="" class="chart-img">
              <img src="include/pics/charts/largest10_02_allinstcnt_bb.png" alt="" class="chart-img">
              <img src="include/pics/charts/largest10_03_varuse_namedvars.png" alt="" class="chart-img">
              <img src="include/pics/charts/largest10_04_edges_bb.png" alt="" class="chart-img">
            </div>

          </div>
        </li> <!-- -----------------------end of item----------------------- -->
        

        <li> <!-- ---------------------------item--------------------------- -->
          <label class="label-expand">
            <i class="icon-expand material-icons m">expand_more</i>
            <b>Angha-Bench (530K functions)</b>
          </label>

          <!-- content, hidden by default -->
          <div class="div-hidden-expandable">
            Several (aprox. 530.000) single function C files extracted from
            programs, mined from popular github repositories.

            <!-- links & more -->
            <div style="display: flex;">
              <a href="#" style="width: 50%" class="a-expand">Data analysis</a>
              <span style="width: 50%; text-align: right">
                464 MB
                <a href="http://cuda.dcc.ufmg.br/angha/src/suites/angha_kernels_all_530k.tar.gz" target="_blank"><i class="material-icons m">archive</i></a>
              </span>
            </div>

            <!-- images -->
            <div class="div-hidden-expandable img-grid" style="display: grid">
              <img src="include/pics/charts/angha530k_01_load_store.png" alt="" class="chart-img">
              <img src="include/pics/charts/angha530k_02_allinstcnt_bb.png" alt="" class="chart-img">
              <img src="include/pics/charts/angha530k_03_varuse_namedvars.png" alt="" class="chart-img">
              <img src="include/pics/charts/angha530k_04_edges_bb.png" alt="" class="chart-img">
            </div>

          </div>
        </li> <!-- -----------------------end of item----------------------- -->

        <li> <!-- ---------------------------item--------------------------- -->
          <label class="label-expand">
            <i class="icon-expand material-icons m">expand_more</i>
            <b>Angha-Bench (All functions)</b>
          </label>

          <!-- content, hidden by default -->
          <div class="div-hidden-expandable">
            One million single function C files extracted from
            programs, mined from popular github repositories.

            <!-- links & more -->
            <div style="display: flex;">
			  <span style="width: 50%;"></span>
              <span style="width: 50%; text-align: right">
                241 MB
                <a href="http://cuda.dcc.ufmg.br/angha/src/suites/angha_kernels_all_1million.tar.gz" target="_blank"><i class="material-icons m">archive</i></a>
              </span>
            </div>

          </div>
        </li> <!-- -----------------------end of item----------------------- -->
        
        <li> <!-- ---------------------------item--------------------------- -->
          <label class="label-expand">
            <i class="icon-expand material-icons m">expand_more</i>
            <b>Angha-Bench (15K whole programs)</b>
          </label>

          <!-- content, hidden by default -->
          <div class="div-hidden-expandable">
            All the (aprox.) 15.000 reconstructed compilable C programs,
            mined from popular github repositories.

            <!-- links & more -->
            <div style="display: flex;">
              <a href="#" style="width: 50%" class="a-expand">Data analysis</a>
              <span style="width: 50%; text-align: right">
                15 MB
                <a href="http://cuda.dcc.ufmg.br/angha/src/suites/angha_wholefiles_all_15k.tar.gz" target="_blank"><i class="material-icons m">archive</i></a>
              </span>
            </div>

            <!-- images -->
            <div class="div-hidden-expandable img-grid" style="display: grid">
              <img src="include/pics/charts/anghawhole_01_load_store.png" alt="" class="chart-img">
              <img src="include/pics/charts/anghawhole_02_allinstcnt_bb.png" alt="" class="chart-img">
              <img src="include/pics/charts/anghawhole_03_varuse_namedvars.png" alt="" class="chart-img">
              <img src="include/pics/charts/anghawhole_04_edges_bb.png" alt="" class="chart-img">
            </div>

          </div>
        </li> <!-- -----------------------end of item----------------------- -->

        <li> <!-- ---------------------------item--------------------------- -->
          <label class="label-expand">
            <i class="icon-expand material-icons m">expand_more</i>
            <b>LLVM Test-Suite and more</b>
          </label>

          <!-- content, hidden by default -->
          <div class="div-hidden-expandable">
            Collection of programs that come with the LLVM Test-Suit with some
            additions. More details can be found in the original repository.

            <!-- links & more -->
            <div style="display: flex;">
              <a href="#" style="width: 50%" class="a-expand">Data analysis</a>
              <span style="width: 50%; text-align: right">
                <a href="https://github.com/lac-dcc/Benchmarks" target="_blank">
                  <img src="include/icons/gh_dark.png" style="height:1.6em"></img>
                </a>
              </span>
            </div>

            <!-- images -->
            <div class="div-hidden-expandable img-grid" style="display: grid">
              <img src="include/pics/charts/tf_01_load_store.png" alt="" class="chart-img">
              <img src="include/pics/charts/tf_02_allinstcnt_bb.png" alt="" class="chart-img">
              <img src="include/pics/charts/tf_03_varuse_namedvars.png" alt="" class="chart-img">
              <img src="include/pics/charts/tf_04_edges_bb.png" alt="" class="chart-img">
            </div>

          </div>
        </li> <!-- -----------------------end of item----------------------- -->
        
        <li> <!-- ---------------------------item--------------------------- -->
          <label class="label-expand">
            <i class="icon-expand material-icons m">expand_more</i>
            <b>Liveness-Driven Random Generated Programs (ldrgen)</b>
          </label>

          <!-- content, hidden by default -->
          <div class="div-hidden-expandable">
            10K largest programs among the 530.000 generated by ldrgen.
            The construction is bottom-up, guided by a simultaneous structural
            data-flow analysis to ensure that the generator never generates dead
            code.

            <!-- links & more -->
            <div style="display: flex;">
              <a href="#" style="width: 50%" class="a-expand">Data analysis</a>
              <span style="width: 50%; text-align: right">
                110 MB
                <a href="http://cuda.dcc.ufmg.br/angha/src/suites/ldrgen_kernels_largest_10k.tar.gz" target="_blank"><i class="material-icons m">archive</i></a>
                <a href="https://link.springer.com/chapter/10.1007/978-3-319-94460-9_7" target="_blank"><i class="material-icons m">description</i></a>
              </span>
            </div>

            <!-- images -->
            <div class="div-hidden-expandable img-grid" style="display: grid">
              <img src="include/pics/charts/ldrgen10k_01_load_store.png" alt="" class="chart-img">
              <img src="include/pics/charts/ldrgen10k_02_allinstcnt_bb.png" alt="" class="chart-img">
              <img src="include/pics/charts/ldrgen10k_03_varuse_namedvars.png" alt="" class="chart-img">
              <img src="include/pics/charts/ldrgen10k_04_edges_bb.png" alt="" class="chart-img">
            </div>

          </div>
        </li> <!-- -----------------------end of item----------------------- -->
        
        <li> <!-- ---------------------------item--------------------------- -->
          <label class="label-expand">
            <i class="icon-expand material-icons m">expand_more</i>
            <b>CSmith</b>
          </label>

          <!-- content, hidden by default -->
          <div class="div-hidden-expandable">
            10K largest programs among the 530.000 generated by CSmith,
            a randomized test-case generation tool.

            <!-- links & more -->
            <div style="display: flex;">
              <a href="#" style="width: 50%" class="a-expand">Data analysis</a>
              <span style="width: 50%; text-align: right">
                568 MB
                <a href="http://cuda.dcc.ufmg.br/angha/src/suites/csmith_kernels_largest_10k.tar.gz" target="_blank"><i class="material-icons m">archive</i></a>
                <a href="https://dl.acm.org/citation.cfm?id=1993532" target="_blank"><i class="material-icons m">description</i></a>
              </span>
            </div>

            <!-- images -->
            <div class="div-hidden-expandable img-grid" style="display: grid">
              <img src="include/pics/charts/csmith10k_01_load_store.png" alt="" class="chart-img">
              <img src="include/pics/charts/csmith10k_02_allinstcnt_bb.png" alt="" class="chart-img">
              <img src="include/pics/charts/csmith10k_03_varuse_namedvars.png" alt="" class="chart-img">
              <img src="include/pics/charts/csmith10k_04_edges_bb.png" alt="" class="chart-img">
            </div>

          </div>
        </li> <!-- -----------------------end of item----------------------- -->

        <li> <!-- ---------------------------item--------------------------- -->
          <label class="label-expand">
            <i class="icon-expand material-icons m">expand_more</i>
            <b>DeepSmith</b>
          </label>

          <!-- content, hidden by default -->
          <div class="div-hidden-expandable">
            1K programs generated by DeepSmith, an approach
            that uses deep learning techniques.

            <!-- links & more -->
            <div style="display: flex;">
              <a href="#" style="width: 50%" class="a-expand">Data analysis</a>
              <span style="width: 50%; text-align: right">
                59 KB
                <a href="http://cuda.dcc.ufmg.br/angha/src/suites/deepsmith_kernels_all_1k.tar.gz" target="_blank"><i class="material-icons m">archive</i></a>
                <a href="https://dl.acm.org/citation.cfm?id=3213848" target="_blank"><i class="material-icons m">description</i></a>
              </span>
            </div>

            <!-- images -->
            <div class="div-hidden-expandable img-grid" style="display: grid">
              <img src="include/pics/charts/deepsmith_01_load_store.png" alt="" class="chart-img">
              <img src="include/pics/charts/deepsmith_02_allinstcnt_bb.png" alt="" class="chart-img">
              <img src="include/pics/charts/deepsmith_03_varuse_namedvars.png" alt="" class="chart-img">
              <img src="include/pics/charts/deepsmith_04_edges_bb.png" alt="" class="chart-img">
            </div>

          </div>
        </li> <!-- -----------------------end of item----------------------- -->
      </ul> <!-- ------------------------end of list------------------------ -->

      </div> <!-- div-col-02 -->

    <!-- ==============================section============================== -->

      <div id="div-footer" class="section">
        <hr>
        Other 
        <a href="http://cuda.dcc.ufmg.br/">projects</a>
         from our 
        <a href="http://lac.dcc.ufmg.br/index.html">lab</a>
      </div>

    </div> <!-- div-body-wrapper -->

  </body>

</html>

<!-- jQuery ugly shenanigans -->
<script src="src/home.js"></script>
