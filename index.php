<html>

  <head>

    <title>bcmp</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

    <link rel="stylesheet" type="text/css" href="include/css/00_reset.css">
    <link rel="stylesheet" type="text/css" href="include/css/10_home-default.css">
    <link rel="stylesheet" type="text/css" href="include/css/20_fluff.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <link rel="apple-touch-icon" sizes="180x180" href="include/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="include/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="include/icons/favicon-16x16.png">
    <link rel="manifest" href="include/icons/site.webmanifest">
    <link rel="mask-icon" href="include/icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

  </head>


  <body>

    <div id="div-body-wrapper" style="width: 100%;"> <!-- Div Header -->

      <div id="div-header-logo"><span id="span-header-logo">Angha</span></div>

      <div id="div-col-01">

        <div> 
          <h3>Angha Project</h3>
          The goal of the Angha Project is to generate C benchmarks out of open
          source repositories. To this end, we download programs from these
          repositories, split them into individual functions and reconstruct
          missing declarations to ensure that they compile. This page contains
          530K samples of programs that we have generated in this way. You can
          compile them all into object files using clang or gcc. Additionally,
          we provide the all the machinery for those interested in producing
          more benchmarks. For comparison, we also provide actual C benchmarks,
          and synthetic programs produced by various benchmark generators. We
          have extracted feature vectors (150 different features) for all these
          benchmarks, in case the interested reader wants to use them to
          autotune compilers.
        </div>

        <hr style="visibility:hidden;">

        <ul>
          <li>
            <label for="checkbox-extracted-features" class="label-expand">
              <img src="include/icons/expand.svg" height="15" class="icon-expand"></img>
              <!--<input type="checkbox" id="checkbox-angha-1-1" style="display:none;">-->
              <span>List of currently extracted features</span>
            </label>
            <input type="checkbox" id="checkbox-extracted-features" style="display:none;">
            <div class="div-hidden-expandable">
              <table class="num" style="width:90%; padding:0.5vw">
                <tr><th>#</th><th>Source (pass)</th><th>Description of the feature</th></tr><tr><td> </td><td>filename</td><td>Name of the analyzed file</td></tr><tr><td> </td><td>adce</td><td>Number of branch instructions removed</td></tr><tr><td> </td><td>adce</td><td>Number of instructions removed</td></tr><tr><td> </td><td>argpromotion</td><td>Number of aggregate arguments promoted</td></tr><tr><td> </td><td>argpromotion</td><td>Number of pointer arguments promoted</td></tr><tr><td> </td><td>basicaa</td><td>Number of times a GEP is decomposed</td></tr><tr><td> </td><td>basicaa</td><td>Number of times the limit to decompose GEPs is reached</td></tr><tr><td> </td><td>bdce</td><td>Number of instructions removed (unused)</td></tr><tr><td> </td><td>build-libcalls</td><td>Number of arguments inferred as nocapture</td></tr><tr><td> </td><td>build-libcalls</td><td>Number of arguments inferred as readonly</td></tr><tr><td> </td><td>build-libcalls</td><td>Number of arguments inferred as returned</td></tr><tr><td> </td><td>build-libcalls</td><td>Number of function returns inferred as noalias</td></tr><tr><td> </td><td>build-libcalls</td><td>Number of function returns inferred as nonnull returns</td></tr><tr><td> </td><td>build-libcalls</td><td>Number of functions inferred as argmemonly</td></tr><tr><td> </td><td>build-libcalls</td><td>Number of functions inferred as nounwind</td></tr><tr><td> </td><td>build-libcalls</td><td>Number of functions inferred as readonly</td></tr><tr><td> </td><td>callsite-splitting</td><td>Number of call-site split</td></tr><tr><td> </td><td>cgscc-passmgr</td><td>Maximum CGSCCPassMgr iterations on one SCC</td></tr><tr><td> </td><td>constmerge</td><td>Number of identical global constants merged</td></tr><tr><td> </td><td>correlated-value-propagation</td><td>Number of ashr converted to lshr</td></tr><tr><td> </td><td>correlated-value-propagation</td><td>Number of comparisons propagated</td></tr><tr><td> </td><td>correlated-value-propagation</td><td>Number of phis deleted via common incoming value</td></tr><tr><td> </td><td>correlated-value-propagation</td><td>Number of phis propagated</td></tr><tr><td> </td><td>correlated-value-propagation</td><td>Number of return values propagated</td></tr><tr><td> </td><td>correlated-value-propagation</td><td>Number of sdiv converted to udiv</td></tr><tr><td> </td><td>correlated-value-propagation</td><td>Number of srem converted to urem</td></tr><tr><td> </td><td>correlated-value-propagation</td><td>Number of switch cases removed</td></tr><tr><td> </td><td>correlated-value-propagation</td><td>Number of udivs whose width was decreased</td></tr><tr><td> </td><td>deadargelim</td><td>Number of unread args removed</td></tr><tr><td> </td><td>deadargelim</td><td>Number of unread args replaced with undef</td></tr><tr><td> </td><td>deadargelim</td><td>Number of unused return values removed</td></tr><tr><td> </td><td>div-rem-pairs</td><td>Number of div/rem pairs</td></tr><tr><td> </td><td>div-rem-pairs</td><td>Number of instructions hoisted</td></tr><tr><td> </td><td>dse</td><td>Number of other instrs removed</td></tr><tr><td> </td><td>dse</td><td>Number of redundant stores deleted</td></tr><tr><td> </td><td>dse</td><td>Number of stores dead by later partials</td></tr><tr><td> </td><td>dse</td><td>Number of stores deleted</td></tr><tr><td> </td><td>early-cse</td><td>Number of call instructions CSE'd</td></tr><tr><td> </td><td>early-cse</td><td>Number of compare instructions CVP'd</td></tr><tr><td> </td><td>early-cse</td><td>Number of instructions CSE'd</td></tr><tr><td> </td><td>early-cse</td><td>Number of instructions simplified or DCE'd</td></tr><tr><td> </td><td>early-cse</td><td>Number of load instructions CSE'd</td></tr><tr><td> </td><td>early-cse</td><td>Number of trivial dead stores removed</td></tr><tr><td> </td><td>functionattrs</td><td>Number of arguments marked nocapture</td></tr><tr><td> </td><td>functionattrs</td><td>Number of arguments marked readnone</td></tr><tr><td> </td><td>functionattrs</td><td>Number of arguments marked readonly</td></tr><tr><td> </td><td>functionattrs</td><td>Number of arguments marked returned</td></tr><tr><td> </td><td>functionattrs</td><td>Number of function returns marked noalias</td></tr><tr><td> </td><td>functionattrs</td><td>Number of function returns marked nonnull</td></tr><tr><td> </td><td>functionattrs</td><td>Number of functions marked as norecurse</td></tr><tr><td> </td><td>functionattrs</td><td>Number of functions marked readnone</td></tr><tr><td> </td><td>functionattrs</td><td>Number of functions marked readonly</td></tr><tr><td> </td><td>functionattrs</td><td>Number of functions marked writeonly</td></tr><tr><td> </td><td>globaldce</td><td>Number of global variables removed</td></tr><tr><td> </td><td>globalopt</td><td>Number of aggregate globals broken into scalars</td></tr><tr><td> </td><td>globalopt</td><td>Number of functions converted to fastcc</td></tr><tr><td> </td><td>globalopt</td><td>Number of global aliases resolved</td></tr><tr><td> </td><td>globalopt</td><td>Number of global vars shrunk to booleans</td></tr><tr><td> </td><td>globalopt</td><td>Number of globals deleted</td></tr><tr><td> </td><td>globalopt</td><td>Number of globals localized</td></tr><tr><td> </td><td>globalopt</td><td>Number of globals marked constant</td></tr><tr><td> </td><td>globalopt</td><td>Number of globals marked unnamed_addr</td></tr><tr><td> </td><td>globalopt</td><td>Number of internal functions</td></tr><tr><td> </td><td>globalsmodref-aa</td><td>Number of functions that do not access memory</td></tr><tr><td> </td><td>globalsmodref-aa</td><td>Number of functions that only read memory</td></tr><tr><td> </td><td>globalsmodref-aa</td><td>Number of functions without address taken</td></tr><tr><td> </td><td>globalsmodref-aa</td><td>Number of global vars without address taken</td></tr><tr><td> </td><td>globalsmodref-aa</td><td>Number of indirect global objects</td></tr><tr><td> </td><td>gvn</td><td>Number of blocks merged</td></tr><tr><td> </td><td>gvn</td><td>Number of equalities propagated</td></tr><tr><td> </td><td>gvn</td><td>Number of instructions deleted</td></tr><tr><td> </td><td>gvn</td><td>Number of instructions PRE'd</td></tr><tr><td> </td><td>gvn</td><td>Number of instructions simplified</td></tr><tr><td> </td><td>gvn</td><td>Number of loads deleted</td></tr><tr><td> </td><td>gvn</td><td>Number of loads PRE'd</td></tr><tr><td> </td><td>indvars</td><td>Number of congruent IVs eliminated</td></tr><tr><td> </td><td>indvars</td><td>Number of exit values replaced</td></tr><tr><td> </td><td>indvars</td><td>Number of indvars widened</td></tr><tr><td> </td><td>indvars</td><td>Number of IV comparisons eliminated</td></tr><tr><td> </td><td>indvars</td><td>Number of IV identities eliminated</td></tr><tr><td> </td><td>indvars</td><td>Number of IV operands folded into a use</td></tr><tr><td> </td><td>indvars</td><td>Number of IV sign/zero extends eliminated</td></tr><tr><td> </td><td>indvars</td><td>Number of IV signed division operations converted to unsigned division</td></tr><tr><td> </td><td>indvars</td><td>Number of IV signed remainder operations converted to unsigned remainder</td></tr><tr><td> </td><td>indvars</td><td>Number of IV users folded into a constant</td></tr><tr><td> </td><td>indvars</td><td>Number of loop exit tests replaced</td></tr><tr><td> </td><td>inline-cost</td><td>Number of call sites analyzed</td></tr><tr><td> </td><td>inline</td><td>Number of caller-callers analyzed</td></tr><tr><td> </td><td>inline</td><td>Number of functions deleted because all callers found</td></tr><tr><td> </td><td>inline</td><td>Number of functions inlined</td></tr><tr><td> </td><td>instcombine</td><td>Number of allocas copied from constant global</td></tr><tr><td> </td><td>instcombine</td><td>Number of constant folds</td></tr><tr><td> </td><td>instcombine</td><td>Number of dead inst eliminated</td></tr><tr><td> </td><td>instcombine</td><td>Number of dead stores eliminated</td></tr><tr><td> </td><td>instcombine</td><td>Number of expansions</td></tr><tr><td> </td><td>instcombine</td><td>Number of factorizations</td></tr><tr><td> </td><td>instcombine</td><td>Number of instructions sunk</td></tr><tr><td> </td><td>instcombine</td><td>Number of insts combined</td></tr><tr><td> </td><td>instcombine</td><td>Number of library calls simplified</td></tr><tr><td> </td><td>instcombine</td><td>Number of reassociations</td></tr><tr><td> </td><td>instcombine</td><td>Number of select opts</td></tr><tr><td> </td><td>instcount</td><td>Number of Add insts</td></tr><tr><td> </td><td>instcount</td><td>Number of Alloca insts</td></tr><tr><td> </td><td>instcount</td><td>Number of And insts</td></tr><tr><td> </td><td>instcount</td><td>Number of AShr insts</td></tr><tr><td> </td><td>instcount</td><td>Number of basic blocks</td></tr><tr><td> </td><td>instcount</td><td>Number of BitCast insts</td></tr><tr><td> </td><td>instcount</td><td>Number of Br insts</td></tr><tr><td> </td><td>instcount</td><td>Number of Call insts</td></tr><tr><td> </td><td>instcount</td><td>Number of ExtractElement insts</td></tr><tr><td> </td><td>instcount</td><td>Number of ExtractValue insts</td></tr><tr><td> </td><td>instcount</td><td>Number of FAdd insts</td></tr><tr><td> </td><td>instcount</td><td>Number of FCmp insts</td></tr><tr><td> </td><td>instcount</td><td>Number of FDiv insts</td></tr><tr><td> </td><td>instcount</td><td>Number of FMul insts</td></tr><tr><td> </td><td>instcount</td><td>Number of FPExt insts</td></tr><tr><td> </td><td>instcount</td><td>Number of FPToSI insts</td></tr><tr><td> </td><td>instcount</td><td>Number of FPToUI insts</td></tr><tr><td> </td><td>instcount</td><td>Number of FPTrunc insts</td></tr><tr><td> </td><td>instcount</td><td>Number of FSub insts</td></tr><tr><td> </td><td>instcount</td><td>Number of GetElementPtr insts</td></tr><tr><td> </td><td>instcount</td><td>Number of ICmp insts</td></tr><tr><td> </td><td>instcount</td><td>Number of IndirectBr insts</td></tr><tr><td> </td><td>instcount</td><td>Number of InsertElement insts</td></tr><tr><td> </td><td>instcount</td><td>Number of InsertValue insts</td></tr><tr><td> </td><td>instcount</td><td>Number of instructions (of all types)</td></tr><tr><td> </td><td>instcount</td><td>Number of IntToPtr insts</td></tr><tr><td> </td><td>instcount</td><td>Number of Invoke insts</td></tr><tr><td> </td><td>instcount</td><td>Number of LandingPad insts</td></tr><tr><td> </td><td>instcount</td><td>Number of Load insts</td></tr><tr><td> </td><td>instcount</td><td>Number of LShr insts</td></tr><tr><td> </td><td>instcount</td><td>Number of Mul insts</td></tr><tr><td> </td><td>instcount</td><td>Number of non-external functions</td></tr><tr><td> </td><td>instcount</td><td>Number of Or insts</td></tr><tr><td> </td><td>instcount</td><td>Number of PHI insts</td></tr><tr><td> </td><td>instcount</td><td>Number of PtrToInt insts</td></tr><tr><td> </td><td>instcount</td><td>Number of Resume insts</td></tr><tr><td> </td><td>instcount</td><td>Number of Ret insts</td></tr><tr><td> </td><td>instcount</td><td>Number of SDiv insts</td></tr><tr><td> </td><td>instcount</td><td>Number of Select insts</td></tr><tr><td> </td><td>instcount</td><td>Number of SExt insts</td></tr><tr><td> </td><td>instcount</td><td>Number of Shl insts</td></tr><tr><td> </td><td>instcount</td><td>Number of ShuffleVector insts</td></tr><tr><td> </td><td>instcount</td><td>Number of SIToFP insts</td></tr><tr><td> </td><td>instcount</td><td>Number of SRem insts</td></tr><tr><td> </td><td>instcount</td><td>Number of Store insts</td></tr><tr><td> </td><td>instcount</td><td>Number of Sub insts</td></tr><tr><td> </td><td>instcount</td><td>Number of Switch insts</td></tr><tr><td> </td><td>instcount</td><td>Number of Trunc insts</td></tr><tr><td> </td><td>instcount</td><td>Number of UDiv insts</td></tr><tr><td> </td><td>instcount</td><td>Number of UIToFP insts</td></tr><tr><td> </td><td>instcount</td><td>Number of Unreachable insts</td></tr><tr><td> </td><td>instcount</td><td>Number of URem insts</td></tr><tr><td> </td><td>instcount</td><td>Number of Xor insts</td></tr><tr><td> </td><td>instcount</td><td>Number of ZExt insts</td></tr><tr><td> </td><td>instsimplify</td><td>Number of expansions</td></tr><tr><td> </td><td>instsimplify</td><td>Number of reassociations</td></tr><tr><td> </td><td>instsimplify</td><td>Number of redundant instructions removed</td></tr><tr><td> </td><td>jump-threading</td><td>Number of branch blocks duplicated to eliminate phi</td></tr><tr><td> </td><td>jump-threading</td><td>Number of jumps threaded</td></tr><tr><td> </td><td>jump-threading</td><td>Number of terminators folded</td></tr><tr><td> </td><td>lcssa</td><td>Number of live out of a loop variables</td></tr><tr><td> </td><td>libcalls-shrinkwrap</td><td>Number of One-Condition Wrappers Inserted</td></tr><tr><td> </td><td>libcalls-shrinkwrap</td><td>Number of Two-Condition Wrappers Inserted</td></tr><tr><td> </td><td>licm</td><td>Number of call insts hoisted or sunk</td></tr><tr><td> </td><td>licm</td><td>Number of instructions hoisted out of loop</td></tr><tr><td> </td><td>licm</td><td>Number of instructions sunk out of loop</td></tr><tr><td> </td><td>licm</td><td>Number of load insts hoisted or sunk</td></tr><tr><td> </td><td>licm</td><td>Number of memory locations promoted to registers</td></tr><tr><td> </td><td>local</td><td>Number of unreachable basic blocks removed</td></tr><tr><td> </td><td>loop-delete</td><td>Number of loops deleted</td></tr><tr><td> </td><td>loop-idiom</td><td>Number of memcpy's formed from loop load+stores</td></tr><tr><td> </td><td>loop-idiom</td><td>Number of memset's formed from loop stores</td></tr><tr><td> </td><td>loop-load-elim</td><td>Number of loads eliminated by LLE</td></tr><tr><td> </td><td>loop-rotate</td><td>Number of loops rotated</td></tr><tr><td> </td><td>loop-simplify</td><td>Number of nested loops split out</td></tr><tr><td> </td><td>loop-unroll</td><td>Number of loops completely unrolled</td></tr><tr><td> </td><td>loop-unroll</td><td>Number of loops peeled</td></tr><tr><td> </td><td>loop-unroll</td><td>Number of loops unrolled (completely or otherwise)</td></tr><tr><td> </td><td>loop-unroll</td><td>Number of loops unrolled with run-time trip counts</td></tr><tr><td> </td><td>loop-unswitch</td><td>Number of branches unswitched</td></tr><tr><td> </td><td>loop-unswitch</td><td>Number of selects unswitched</td></tr><tr><td> </td><td>loop-unswitch</td><td>Number of simplifications of unswitched code</td></tr><tr><td> </td><td>loop-unswitch</td><td>Number of switches unswitched</td></tr><tr><td> </td><td>loop-unswitch</td><td>Number of unswitches that are trivial</td></tr><tr><td> </td><td>loop-unswitch</td><td>Total number of instructions analyzed</td></tr><tr><td> </td><td>loop-vectorize</td><td>Number of loops analyzed for vectorization</td></tr><tr><td> </td><td>loop-vectorize</td><td>Number of loops vectorized</td></tr><tr><td> </td><td>mem2reg</td><td>Number of alloca's promoted with a single store</td></tr><tr><td> </td><td>mem2reg</td><td>Number of alloca's promoted within one block</td></tr><tr><td> </td><td>mem2reg</td><td>Number of alloca's promoted</td></tr><tr><td> </td><td>mem2reg</td><td>Number of dead alloca's removed</td></tr><tr><td> </td><td>mem2reg</td><td>Number of PHI nodes inserted</td></tr><tr><td> </td><td>memcpyopt</td><td>Number of memcpy instructions deleted</td></tr><tr><td> </td><td>memcpyopt</td><td>Number of memmoves converted to memcpy</td></tr><tr><td> </td><td>memcpyopt</td><td>Number of memsets inferred</td></tr><tr><td> </td><td>memdep</td><td>Number of block queries that were completely cached</td></tr><tr><td> </td><td>memdep</td><td>Number of cached but dirty non-local ptr responses</td></tr><tr><td> </td><td>memdep</td><td>Number of fully cached non-local ptr responses</td></tr><tr><td> </td><td>memdep</td><td>Number of fully cached non-local responses</td></tr><tr><td> </td><td>memdep</td><td>Number of uncached non-local ptr responses</td></tr><tr><td> </td><td>memdep</td><td>Number of uncached non-local responses</td></tr><tr><td> </td><td>memory-builtins</td><td>Number of arguments with unsolved size and offset</td></tr><tr><td> </td><td>memory-builtins</td><td>Number of load instructions with unsolved size and offset</td></tr><tr><td> </td><td>pgo-memop-opt</td><td>Number of memop intrinsics annotated.</td></tr><tr><td> </td><td>prune-eh</td><td>Number of invokes removed</td></tr><tr><td> </td><td>prune-eh</td><td>Number of noreturn calls optimized</td></tr><tr><td> </td><td>reassociate</td><td>Number of expr tree annihilated</td></tr><tr><td> </td><td>reassociate</td><td>Number of insts reassociated</td></tr><tr><td> </td><td>reassociate</td><td>Number of multiplies factored</td></tr><tr><td> </td><td>scalar-evolution</td><td>Number of loops with predictable loop counts</td></tr><tr><td> </td><td>scalar-evolution</td><td>Number of loops with trip counts computed by force</td></tr><tr><td> </td><td>scalar-evolution</td><td>Number of loops without predictable loop counts</td></tr><tr><td> </td><td>sccp</td><td>Number of arguments constant propagated by IPSCCP</td></tr><tr><td> </td><td>sccp</td><td>Number of basic blocks unreachable</td></tr><tr><td> </td><td>sccp</td><td>Number of globals found to be constant by IPSCCP</td></tr><tr><td> </td><td>sccp</td><td>Number of instructions removed by IPSCCP</td></tr><tr><td> </td><td>sccp</td><td>Number of instructions removed</td></tr><tr><td> </td><td>simplifycfg</td><td>Number of blocks simplified</td></tr><tr><td> </td><td>simplifycfg</td><td>Number of common instructions sunk down to the end block</td></tr><tr><td> </td><td>simplifycfg</td><td>Number of reused switch table lookup compares</td></tr><tr><td> </td><td>simplifycfg</td><td>Number of speculative executed instructions</td></tr><tr><td> </td><td>simplifycfg</td><td>Number of switch instructions turned into bitmaps</td></tr><tr><td> </td><td>simplifycfg</td><td>Number of switch instructions turned into linear mapping</td></tr><tr><td> </td><td>simplifycfg</td><td>Number of switch instructions turned into lookup tables (holes checked)</td></tr><tr><td> </td><td>simplifycfg</td><td>Number of switch instructions turned into lookup tables</td></tr><tr><td> </td><td>SLP</td><td>Number of vector instructions generated</td></tr><tr><td> </td><td>sroa</td><td>Maximum number of partitions per alloca</td></tr><tr><td> </td><td>sroa</td><td>Maximum number of uses of a partition</td></tr><tr><td> </td><td>sroa</td><td>Number of alloca partition uses rewritten</td></tr><tr><td> </td><td>sroa</td><td>Number of alloca partitions formed</td></tr><tr><td> </td><td>sroa</td><td>Number of allocas analyzed for replacement</td></tr><tr><td> </td><td>sroa</td><td>Number of allocas promoted to SSA values</td></tr><tr><td> </td><td>sroa</td><td>Number of instructions deleted</td></tr><tr><td> </td><td>sroa</td><td>Number of new smaller allocas introduced</td></tr><tr><td> </td><td>sroa</td><td>Number of vectorized aggregates</td></tr><tr><td> </td><td>strip-dead-prototypes</td><td>Number of dead prototypes removed</td></tr><tr><td> </td><td>tailcallelim</td><td>Number of accumulators introduced</td></tr><tr><td> </td><td>tailcallelim</td><td>Number of return duplicated</td></tr><tr><td> </td><td>tailcallelim</td><td>Number of tail calls removed</td></tr>
              </table>
            </div>
          </li>
        </ul>
      </div> <!-- div-col-01 -->

      <div id="div-col-02">

      <div>
        <h3>Available Benchmarks</h3>
        The highlighted benchmarks are available for download.
        Others will be uploaded in a near future.
      </div>

      <hr style="visibility:hidden;">

      <ul>

        <li>
          <label for="checkbox-angha-10k" class="label-expand">
            <img src="include/icons/expand.svg" height="15" class="icon-expand"></img>
            <span>Angha-Bench (10k largest)</span>
          </label>
          <input type="checkbox" id="checkbox-angha-10k" style="display:none;">
          <div class="div-hidden-expandable">
            The 10.000 largest compilable C functions extracted from
            programs, mined from popular github repositories.
            <div style="text-align: right">
              78 MB
              <a href="http://cuda.dcc.ufmg.br/angha/src/largest10k.tar.gz" target="_blank"><i class="material-icons m" style="position: relative; top:0.2vw">archive</i></a>
            </div>
          </div>
        </li>
        
        <li>
          <label for="checkbox-angha-full" class="label-expand">
            <img src="include/icons/expand.svg" height="15" class="icon-expand"></img>
            Angha-Bench (Full)
          </label>
          <input type="checkbox" id="checkbox-angha-full" style="display:none;">
          <div class="div-hidden-expandable">
            Several (aprox. 530.000) single function C files extracted from
            programs, mined from popular github repositories.
            <div style="text-align: right">
              187 MB
              <a href="http://cuda.dcc.ufmg.br/angha/src/all_angha_kernels.tar.gz" target="_blank"><i class="material-icons m" style="position: relative; top:0.2vw">archive</i></a>
            </div>
          </div>
        </li>
        
        <li>
          <label for="checkbox-tf" class="label-expand">
            <img src="include/icons/expand.svg" height="15" class="icon-expand"></img>
            LLVM Test-Suite and more
          </label>
          <input type="checkbox" id="checkbox-tf" style="display:none;">
          <div class="div-hidden-expandable">
            Collection of programs that come with the LLVM Test-Suit with some additions.
            More details can be found in the original repository.
            <div style="text-align: right">
              <a href="https://github.com/lac-dcc/Benchmarks" target="_blank"><img src="include/icons/gh_dark.png" style="height:1.6em"></img></a>
            </div>
          </div>
        </li>
        
        <li>
          <label for="checkbox-ldrgen" class="label-expand">
            <img src="include/icons/expand.svg" height="15" class="icon-expand"></img>
            Liveness-Driven Random Generated Programs (ldrgen)
          </label>
          <input type="checkbox" id="checkbox-ldrgen" style="display:none;">
          <div class="div-hidden-expandable">
            Random programs constructed bottom-up, guided by a simultaneous structural
            data-flow analysis to ensure that the generator never generates dead code.
            <div style="text-align: right">
              <a href="https://link.springer.com/chapter/10.1007/978-3-319-94460-9_7" target="_blank"><i class="material-icons m" style="position: relative; top:0.2vw">open_in_new</i></a>
              <a href="http://cuda.dcc.ufmg.br/angha/src/ldrgen.tar.gz/ldrgen.tar.gz" target="_blank"><i class="material-icons m" style="position: relative; top:0.2vw">link_off</i></a>
            </div>
          </div>
        </li>
        
        <li>
          <label for="checkbox-csmith" class="label-expand">
            <img src="include/icons/expand.svg" height="15" class="icon-expand"></img>
            CSmith
          </label>
          <input type="checkbox" id="checkbox-csmith" style="display:none;">
          <div class="div-hidden-expandable">
            Programs generated by CSmith, a randomized test-case generation tool.
            <div style="text-align: right">
              <a href="https://dl.acm.org/citation.cfm?id=1993532" target="_blank"><i class="material-icons m" style="position: relative; top:0.2vw">open_in_new</i></a>
              <a href="http://cuda.dcc.ufmg.br/angha/src/csmith.tar.gz" target="_blank"><i class="material-icons m" style="position: relative; top:0.2vw">link_off</i></a>
            </div>
          </div>
        </li>
        
        <li>
          <label for="checkbox-deepsmith" class="label-expand">
            <img src="include/icons/expand.svg" height="15" class="icon-expand"></img>
            DeepSmith
          </label>
          <input type="checkbox" id="checkbox-deepsmith" style="display:none;">
          <div class="div-hidden-expandable">
            Collection of programs that come with the LLVM Test-Suit with some additions.
            More details can be found in the original repository.
            <div style="text-align: right">
              <a href="https://dl.acm.org/citation.cfm?id=3213848" target="_blank"><i class="material-icons m" style="position: relative; top:0.2vw">open_in_new</i></a>
              <a href="http://cuda.dcc.ufmg.br/angha/src/deepsmith.tar.gz" target="_blank"><i class="material-icons m" style="position: relative; top:0.2vw">link_off</i></a>
            </div>
          </div>
        </li>

      </ul>

      </div> <!-- div-col-02 -->

      <div id="div-footer">
        <hr>
        Other 
        <a href="http://cuda.dcc.ufmg.br/">projects</a>
         from our 
        <a href="http://lac.dcc.ufmg.br/index.html">lab</a>
      </div>

    </div> <!-- div-body-wrapper -->

  </body>

</html>