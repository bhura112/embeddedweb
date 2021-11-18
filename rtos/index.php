<?php 
   require_once $_SERVER['DOCUMENT_ROOT']."/database/dataHandler.php";
   GetMain(2);
   GetHeadData(2);
   GetBodyData(2);
   GetfootData(2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://bhura112.github.io/embeddedweb/global/headerScript.js"></script>
    <script src="https://bhura112.github.io/embeddedweb/global/footerScript.js"></script>
    <script src="https://bhura112.github.io/embeddedweb/global/script.js"></script>
    
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://bhura112.github.io/embeddedweb/global/style.css">
    <link rel="stylesheet" href="https://bhura112.github.io/embeddedweb/global/header.css">
    <link rel="stylesheet" href="https://bhura112.github.io/embeddedweb/global/foot.css">

    <link rel = "icon" href = "https://bhura112.github.io/embeddedweb/global/logo.png" type="image/x-icon">

    <script src="https://kit.fontawesome.com/2197d61e3b.js" crossorigin="anonymous"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8795837294797076"
     crossorigin="anonymous"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TFF1PLC6Q9"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-TFF1PLC6Q9');
    </script>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <title><?php  echo $mainData['title']; ?></title>
</head>

  <body>
  <?php include_once $_SERVER['DOCUMENT_ROOT']."/global/header.php"; ?>
  <div class="top-spacing"></div> 
  <div class="body-top-contents">
        <div class="row-1"></div>
        <div class="row-2">
            <div class="col-1">
            <span class="material-icons-outlined">alarm</span>
            </div>
            <div class="col-2">
                <h1><?php  echo $mainData['topic']; ?></h1>
                <p> A real-time operating system (RTOS) is an operating system (OS) intended to serve real-time applications that process data as 
                it comes in, typically without buffer delays. Processing time requirements (including any OS delay) are measured in tenths of 
                seconds or shorter increments of time. </p>

                <p> A real-time system is a time-bound system which has well-defined, fixed time constraints. 
                Processing must be done within the defined constraints or the system will fail. They either are event-driven or time-sharing.             
                </p>
            </div>
        </div>
        <div class="row-3"></div>
    </div>
        
    <div class="body-cards-div">

              <a class="card card-background-2" href="freertos/">
                <div class="head">
                  <img src="../../global/icon-mcu.png" alt="" srcset="">
                </div>
                <div class="body">
                  <h2 class="txt-center">FreeRTOS</h2>
                </div>
                <div class="foot">
                  <h4>Learn  <i class="fa fa-1x fa-arrow-right"></i></h4>
                </div>
              </a>

              <a class="card card-background-3" href="rt-thread/">
                <div class="head">
                  <img src="../../global/icon-mcu.png" alt="" srcset="">
                </div>
                <div class="body">
                  <h2 class="txt-center">RT-Thread</h2>
                </div>
                <div class="foot">
                  <h4>Learn  <i class="fa fa-1x fa-arrow-right"></i></h4>
                </div>
              </a>
     </div>



     <div class="page-content">
       
       <div class="page-content-col1">
      <div class="page-content-col1-top">
        <div class="table-icon" id="MO-icon" onclick="onMOClicked()">
          <i class="material-icons-outlined menu-open-icon">menu_open</i>
        </div>

        <div id="table-container" class="table-content-container">
          <div class="table">
            <div class="table-header">

            </div>
            <div id="MO-table" class="table-body">

                    <h3 > <a href="#Introduction">Introduction </a></h3>
                     <h3 > <a href="#Architectures">Architectures </a></h3>
                     <h3 > <a href="#Multitasking">Multitasking </a></h3>
                     <h3 > <a href="#Scheduling">Scheduling </a> </h3>
                     <h3 > <a href="#ContextSwitching">Context Switching</a> </h3>
                     <h3 > <a href="#RTA">Real Time Applications </a> </h3>
                     <h3 > <a href="#RTS">Real Time Scheduling </a> </h3>
                     <h3 > <a href="#AD">Advantage/ Disadvantage </a> </h3>
           
            </div>
            <div class="table-body">

            </div>
          </div>
        </div>

      </div>

      <div id="sticky-container" class="page-content-col1-bottom">
        <div id="sticky-c" class="sticky-c">
          <div class="page-video">
            <iframe src="https://www.youtube.com/embed/yRnrEpG680o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div id="table-container" class="table-content-container">
            <div class="table">
              <div class="table-header">
                <h3>Getting Started...with</h3>
              </div>
              <div class="table-body">

                <h3> <a href="#Introduction">MICROCHIP </a></h3>
                <h3> <a href="#Types">ARM </a></h3>
                <h3> <a href="#GettingStarted">RTOS </a> </h3>
                <h3> <a href="#EditorIde">QT</a> </h3>
                <h3> <a href="#Compiler">Linux</a> </h3>
              </div>
              <div class="table-body">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="content-container">
  <div id="Introduction" class="content">   
   <div class="container">
     <h1>What is RTOS?</h1>
     <p>
        A Real Time Operating System, commonly known as an RTOS, is a software component that rapidly switches between tasks, 
        giving the impression that multiple programs are being executed at the same time on a single processing core.
     </p>

     <figure class="fig-sim">
                <img src="img/rtos.png" alt="">
                <figcaption></figcaption>
              </figure>

     <p>     In actual fact the processing core can only execute one program at any one time, 
       and what the RTOS is actually doing is rapidly switching between individual programming threads (or Tasks)
        to give the impression that multiple programs are executing simultaneously. </p>
     
   </div>
   <hr>
 </div>

 <div id="Architecture" class="content">
          <div class="container">
            <h1>Architectures</h1>
            <p>RTOS architecture affects the reliability of an embedded system and its ability to recover from faults. There are two RTOS architectures: monolithic and microkernel.</p>
            <p><strong>Monolithic Kernel</strong> means one huge stone. By definition, a monolithic kernel runs all operating system components in the kernel space. For instance, a monolithic RTOS includes device drivers, file management, networking, and graphics stack as part of the kernel space. Applications however run in the user space. Although running user applications as memory-protected processes protects a monolithic kernel from errant user code, a single programming error in a file system, protocol stack or driver can crash the system. In addition, any change to a driver or system file requires OS modification and recompiling.</p>
           
            <figure class="fig-sim">
                <img src="img/mono.png" alt="">
                <figcaption>Monolithic</figcaption>
              </figure>
            <p><strong>Microkernel</strong> RTOS is structured with a tiny kernel that provides minimal services. The microkernel works with a team of optional cooperating processes that run outside kernel space (in the user space), which provides higher-level OS functionality. The microkernel itself lacks file systems and many other services normally expected of an OS. A microkernel RTOS embodies a fundamental innovation in the approach to delivering OS functionality: modularity is the key, and the small size is a side effect.</p>
           
            <figure class="fig-sim">
                <img src="img/micro.png" alt="">
                <figcaption>Micro-Kernel</figcaption>
              </figure>
            <p>In a microkernel, only the core RTOS kernel is granted access to the entire system, which improves reliability and security. The microkernel protects and allocates memory for other processes and provides task switching. All other components, including drivers and system-level components, are each contained within their own isolated process space.</p>
          </div>
          <hr>
  </div>
             
  <div id="Multitasking" class="content">
        <div class="container">
            <h1>Multitasking</h1>
            <p>The kernel is the core component within an operating system. Operating systems such as Linux employ kernels that allow users access to the computer seemingly simultaneously. Multiple users can execute multiple programs apparently concurrently.</p>
            <p>Each executing program is a task (or thread) under control of the operating system. If an operating system can execute multiple tasks in this manner it is said to be multitasking.</p>
           
            <figure class="fig-sim">
                <img src="img/multi.gif" alt="">
                <figcaption>Micro-Kernel</figcaption>
              </figure>
            <p>A conventional processor can only execute a single task at a time - but by rapidly switching between tasks a multitasking operating system can make it appear as if each task is executing concurrently. This is depicted by the diagram above which shows the execution pattern of three tasks with respect to time. The task names are color coded and written down the left hand. Time moves from left to right, with the colored lines showing which task is executing at any particular time. The upper diagram demonstrates the perceived concurrent execution pattern, and the lower the actual multitasking execution pattern.</p>
          </div>
          <hr>
  </div>
  <div id="Scheduling" class="content">
        <div class="container">
            <h1>Scheduling</h1>
            <p>The scheduler is the part of the kernel responsible for deciding which task should be executing at any particular time. The kernel can suspend and later resume a task many times during the task lifetime.</p>
            <p>The scheduling policy is the algorithm used by the scheduler to decide which task to execute at any point in time. The policy of a (non real time) multi user system will most likely allow each task a "fair" proportion of processor time. The policy used in real time / embedded systems is described later.</p>
            <p>In addition to being suspended involuntarily by the kernel a task can choose to suspend itself. It will do this if it either wants to delay (sleep) for a fixed period, or wait (block) for a resource to become available (eg a serial port) or an event to occur (eg a key press). A blocked or sleeping task is not able to execute, and will not be allocated any processing time.</p>
           
            <figure class="fig-sim">
            <img src="img/suspending.gif" alt="">
                <figcaption>Micro-Kernel</figcaption>
              </figure>
            <h4>Referring to the numbers in the diagram above:</h4>

          <p>At (1) task 1 is executing.</p>
          <p>At (2) the kernel suspends (swaps out) task 1 ...</p>
          <p>... and at (3) resumes task 2.</p>
          <p>While task 2 is executing (4), it locks a processor peripheral for its own exclusive access.</p>
          <p>At (5) the kernel suspends task 2 ...</p>
          <p>... and at (6) resumes task 3.</p>
          <p>Task 3 tries to access the same processor peripheral, finding it locked task 3 cannot continue so suspends itself at (7).</p>
          <p>At (8) the kernel resumes task 1.</p>
          <p>Etc.</p>
          <p>The next time task 2 is executing (9) it finishes with the processor peripheral and unlocks it.</p>
          <p>The next time task 3 is executing (10) it finds it can now access the processor peripheral and this time executes until suspended by the kernel.</p>
          </div> 
          <hr>             
  </div>
              <div id="ContextSwitching" class="content">
                    <div class="container">
                       <h1>Context Switching</h1>
                       <p>As a task executes it utilizes the processor / microcontroller registers and accesses RAM and ROM just as any other program. These resources together (the processor registers, stack, etc.) comprise the task execution context.</p>
                       
                       <figure class="fig-sim">
                        <img src="img/context.gif" alt="">
                         <figcaption>Micro-Kernel</figcaption>
                       </figure>
                       <p>A task is a sequential piece of code - it does not know when it is going to get suspended (swapped out or switched out) or resumed (swapped in or switched in) by the kernel and does not even know when this has happened. Consider the example of a task being suspended immediately before executing an instruction that sums the values contained within two processor registers. While the task is suspended other tasks will execute and may modify the processor register values. Upon resumption the task will not know that the processor registers have been altered - if it used the modified values the summation would result in an incorrect value.</p>
                       <p>To prevent this type of error it is essential that upon resumption a task has a context identical to that immediately prior to its suspension. The operating system kernel is responsible for ensuring this is the case - and does so by saving the context of a task as it is suspended. When the task is resumed its saved context is restored by the operating system kernel prior to its execution. The process of saving the context of a task being suspended and restoring the context of a task being resumed is called context switching.</p>
                      </div>
                      <hr>
              </div>

              <div id="RTA" class="content">
                    <div class="container">
                      
                      <h1>Real Time Applications</h1>

                      <p>Real time operating systems (RTOSes) achieve multitasking using these same principles - but their objectives are very different to those of non real time systems. The different objective is reflected in the scheduling policy. Real time / embedded systems are designed to provide a timely response to real world events. Events occurring in the real world can have deadlines before which the real time / embedded system must respond and the RTOS scheduling policy must ensure these deadlines are met.</p>
                      <p>To achieve this objective the software engineer must first assign a priority to each task. The scheduling policy of the RTOS is then to simply ensure that the highest priority task that is able to execute is the task given processing time. This may require sharing processing time "fairly" between tasks of equal priority if they are ready to run simultaneously.</p>
                      
                      <p>The most basic example of this is a real time system that incorporates a keypad and LCD. A user must get visual feedback of each key press within a reasonable period - if the user cannot see that the key press has been accepted within this period the software product will at best be awkward to use. If the longest acceptable period was 100ms - any response between 0 and 100ms would be acceptable. This functionality could be implemented as an autonomous task with the following structure:
                      </p>
                      <pre>
<code>
<span class="c-keyword">void</span> <span class="c-funname">vKeyHandlerTask</span> ( <span class="c-keyword">void</span><span class="c-funarg"> *pvParameters </span>)
  {
    <span class="c-lcomment">  // Key handling is a continuous  </span>
    <span class="c-lcomment">  // process and as such the task</span>

    <span class="c-lcomment">  // is implemented using an</span>
    <span class="c-lcomment">  // infinite loop (as most real time</span>
    <span class="c-lcomment">  // tasks are).</span>

    <span class="c-for">for </span>( ;; )
    {
      <span class="c-lcomment"> // [Suspend waiting for a key press]</span>

      <span class="c-lcomment"> // [Process the key press]</span>
    }
  }
</code>
                  </pre>
                    <p>Now assume the real time system is also performing a control function that relies on a digitally filtered input. The input must be sampled, filtered and the control cycle executed every 2ms. For correct operation of the filter the temporal regularity of the sample must be accurate to 0.5ms. This functionality could be implemented as an autonomous task with the following structure:
                      </p>
                  <div class="code-editor">
                    <pre>
<code>
<span class="c-keyword">void</span> <span class="c-funname">vControlTask</span> ( <span class="c-keyword">void</span><span class="c-funarg"> *pvParameters </span>)
  {
    <span class="c-for">for </span>( ;; )
    {
      <span class="c-comment-line"> //[Suspend waiting for 2mssince </span>
      <span class="c-lcomment"> //the start of the previous cycle]</span>

      <span class="c-lcomment"> //[Sample the input]</span>
      <span class="c-lcomment"> //[Filter the sampled input]</span>
      <span class="c-lcomment"> //[Perform control algorithm]</span>
      <span class="c-lcomment"> //[Output result]</span>
    }
  }
</code>
</pre>
</div>
  </div>
  <hr>
</div>
              <div id="RTS" class="content">
                    <div class="container">
                       <h1>Real Time Scheduling</h1>
                       <p>The diagram below demonstrates how the tasks defined on the previous page would be scheduled by a real time operating system. The RTOS has itself created a task - the idle task - which will execute only when there are no other tasks able to do so. The RTOS idle task is always in a state where it is able to execute.</p>
                       <figure class="fig-sim">
                       <img src="img/rts.gif" alt="">
                       
                         <figcaption>Real Time Scheduling</figcaption>
                       </figure>
                       <p>Referring to the diagram above:</p>

                       <p>At the start neither of our two tasks are able to run - vControlTask is waiting for the correct time to start a new control cycle and vKeyHandlerTask is waiting for a key to be pressed. Processor time is given to the RTOS idle task.</p>
                       <p>At time t1, a key press occurs. vKeyHandlerTask is now able to execute - it has a higher priority than the RTOS idle task so is given processor time.</p>
                       <p>At time t2 vKeyHandlerTask has completed processing the key and updating the LCD. It cannot continue until another key has been pressed so suspends itself and the RTOS idle task is again resumed.</p>
                       <p>At time t3 a timer event indicates that it is time to perform the next control cycle. vControlTask can now execute and as the highest priority task is scheduled processor time immediately.</p>
                       <p>Between time t3 and t4, while vControlTask is still executing, a key press occurs. vKeyHandlerTask is now able to execute, but as it has a lower priority than vControlTask it is not scheduled any processor time.</p>
                       <p>At t4 vControlTask completes processing the control cycle and cannot restart until the next timer event - it suspends itself. vKeyHandlerTask is now the task with the highest priority that is able to run so is scheduled processor time in order to process the previous key press.</p>
                       <p>At t5 the key press has been processed, and vKeyHandlerTask suspends itself to wait for the next key event. Again neither of our tasks are able to execute and the RTOS idle task is scheduled processor time.</p>
                       <p>Between t5 and t6 a timer event is processed, but no further key presses occur.
                       <p>The next key press occurs at time t6, but before vKeyHandlerTask has completed processing the key a timer event occurs. Now both tasks are able to execute. As vControlTask has the higher priority vKeyHandlerTask is suspended before it has completed processing the key, and vControlTask is scheduled processor time.</p>
                       <p>At t8 vControlTask completes processing the control cycle and suspends itself to wait for the next. vKeyHandlerTask is again the highest priority task that is able to run so is scheduled processor time so the key press processing can be completed. </p>
                      
                      </div>
              </div>
              <div id="AD" class="content">
                    <div class="container">
                      <h1>Advantage/Disadvantage</h1>

                      <h3>Advantages: The advantages of real-time operating systems are as follows- </h3>

                      <h3>Maximum consumption – </h3>
                      <p>Maximum utilization of devices and systems. Thus more output from all the resources. </p>
                      
                      <h3>Task Shifting – </h3>
                      <p>Time assigned for shifting tasks in these systems is very less. For example, in older systems, it takes about 10 microseconds. Shifting one task to another and in the latest systems, it takes 3 microseconds. 
                      </p>
                      <h3>Focus On Application – </h3>
                      <p>Focus on running applications and less importance to applications that are in the queue. </p>
                      
                      <h3>Real-Time Operating System In Embedded System – </h3>
                      <p>Since the size of programs is small, RTOS can also be embedded systems like in transport and others. </p>
                      
                      <h3>Error Free – </h3>
                      <p>These types of systems are error-free. </p>
                      
                      <h3>Memory Allocation – </h3>
                      <p>Memory allocation is best managed in these types of systems.</p>
                      <h3>Disadvantages: The disadvantages of real-time operating systems are as follows- 
 

                      <h3>Limited Tasks – </h3>
                      <p>Very few tasks run simultaneously, and their concentration is very less on few applications to avoid errors. </p>
 
                      <h3>Use Heavy System Resources – </h3>
                      <p>Sometimes the system resources are not so good and they are expensive as well. </p>
                      
                      <h3>Complex Algorithms – </h3>
                      <p>The algorithms are very complex and difficult for the designer to write on. </p>
                      
                      <h3>Device Driver And Interrupt signals – </h3>
                      <p>It needs specific device drivers and interrupts signals to respond earliest to interrupts. </p>
                      
                      <h3>Thread Priority – </h3>
                      <p>It is not good to set thread priority as these systems are very less prone to switching tasks.</p>
                      
                      <h3>Minimum Switching –  </h3>
                      <p> RTOS performs minimal task switching.</p>
                       </div>
              </div>
            </div>
          </div>
       </section>

      
      </main>
    </div>
    
    <div class="page-space"></div>
    <?php include_once $_SERVER['DOCUMENT_ROOT']."/global/foot.php"; ?>
  </body>
</html>
