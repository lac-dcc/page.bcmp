# page.bcmp

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
