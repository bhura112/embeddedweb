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
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title><?php  echo $mainData['title']; ?></title>
</head>

  <body>
    <a class="anchor" id="top"></a>
     <?php include_once $_SERVER['DOCUMENT_ROOT']."/global/header.php"; ?>

    <div class="main-container">
      <main class="main">
        <section class="top-section">
          <div class="content">
            <picture>
              <img src="../img/rtos-card.svg">
            </picture>
            <div class="content-col">
              <h2><?php  echo $mainData['topic']; ?></h2>
              <h4>
                A real-time operating system (RTOS) is an operating system (OS) intended to serve real-time applications that process data as 
                it comes in, typically without buffer delays. Processing time requirements (including any OS delay) are measured in tenths of 
                seconds or shorter increments of time. 
               </h4>
               <h4>
                A real-time system is a time-bound system which has well-defined, fixed time constraints. 
                Processing must be done within the defined constraints or the system will fail. They either are event-driven or time-sharing.             
                </h4>
            </div>

          </div>
        </section>
        
        <section class="top-section-subsec">
          <div class="card-sec">
               <a href="freertos/"> 
                  <div class="mchiplogo">
                    <h2>FREE RTOS</h2>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

               <a href="rt-thread/"> 
                  <div class="mchiplogo">
                  <h2>RT-THREAD</h2>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>
        </section>
       <section class="page-container">
         <div class="article">
           <h2>What is RTOS?</h2>
           <h4>A Real Time Operating System, commonly known as an RTOS, is a software component that rapidly switches between tasks, giving the impression that multiple programs are being executed at the same time on a single processing core.</h4>
           <h4>In actual fact the processing core can only execute one program at any one time, and what the RTOS is actually doing is rapidly switching between individual programming threads (or Tasks) to give the impression that multiple programs are executing simultaneously.</h4>
          </div>

          <div class="topics">
            <div class="table-of-content">
              <h3>Table Index</h3>
              <a href="#architecture">Architectures</a>
              <a href="#multitasking">Multitasking </a>
              <a href="#scheduling">Scheduling </a>
              <a href="#contextswitching">Context Switching</a>
              <a href="#rta" >Real Time Applications</a>
              <a href="#rts">Real Time Scheduling</a>
              <a href="#addisad">Advantage/Disadvantage </a>
            </div>
            <div class="table-topic">
              <div id="architecture" class="table-topic-container jumptarget">
                     <div class="container-body">
                        <h2>Architectures</h2>
                        <h4>RTOS architecture affects the reliability of an embedded system and its ability to recover from faults. There are two RTOS architectures: monolithic and microkernel.</h4>
                        <h4><i class="fa fa-2x">Monolithic</i> means one huge stone. By definition, a monolithic kernel runs all operating system components in the kernel space. For instance, a monolithic RTOS includes device drivers, file management, networking, and graphics stack as part of the kernel space. Applications however run in the user space. Although running user applications as memory-protected processes protects a monolithic kernel from errant user code, a single programming error in a file system, protocol stack or driver can crash the system. In addition, any change to a driver or system file requires OS modification and recompiling.</h4>
                        <img src="img/mono.png" alt="">
                        <h4><i class="fa fa-2x">Microkernel</i> RTOS is structured with a tiny kernel that provides minimal services. The microkernel works with a team of optional cooperating processes that run outside kernel space (in the user space), which provides higher-level OS functionality. The microkernel itself lacks file systems and many other services normally expected of an OS. A microkernel RTOS embodies a fundamental innovation in the approach to delivering OS functionality: modularity is the key, and the small size is a side effect.</h4>
                        <img src="img/micro.png" alt="">
                        <h4>In a microkernel, only the core RTOS kernel is granted access to the entire system, which improves reliability and security. The microkernel protects and allocates memory for other processes and provides task switching. All other components, including drivers and system-level components, are each contained within their own isolated process space.</h4>
                      </div>
              </div>
              <div id="multitasking" class="table-topic-container jumptarget">
                    <div class="container-body">
                       <h2>Multitasking</h2>
                       <h4>The kernel is the core component within an operating system. Operating systems such as Linux employ kernels that allow users access to the computer seemingly simultaneously. Multiple users can execute multiple programs apparently concurrently.</h4>
                       <h4>Each executing program is a task (or thread) under control of the operating system. If an operating system can execute multiple tasks in this manner it is said to be multitasking.</h4>
                       <img src="img/multi.gif" alt="">
                       <h4>A conventional processor can only execute a single task at a time - but by rapidly switching between tasks a multitasking operating system can make it appear as if each task is executing concurrently. This is depicted by the diagram above which shows the execution pattern of three tasks with respect to time. The task names are color coded and written down the left hand. Time moves from left to right, with the colored lines showing which task is executing at any particular time. The upper diagram demonstrates the perceived concurrent execution pattern, and the lower the actual multitasking execution pattern.</h4>
                      </div>
              </div>
              <div id="scheduling" class="table-topic-container jumptarget">
                    <div class="container-body">
                       <h2>Scheduling</h2>
                       <h4>The scheduler is the part of the kernel responsible for deciding which task should be executing at any particular time. The kernel can suspend and later resume a task many times during the task lifetime.</h4>
                       <h4>The scheduling policy is the algorithm used by the scheduler to decide which task to execute at any point in time. The policy of a (non real time) multi user system will most likely allow each task a "fair" proportion of processor time. The policy used in real time / embedded systems is described later.</h4>
                       <h4>In addition to being suspended involuntarily by the kernel a task can choose to suspend itself. It will do this if it either wants to delay (sleep) for a fixed period, or wait (block) for a resource to become available (eg a serial port) or an event to occur (eg a key press). A blocked or sleeping task is not able to execute, and will not be allocated any processing time.</h4>
                       <img src="img/suspending.gif" alt="">
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
              </div>
              <div id="contextswitching" class="table-topic-container jumptarget">
                    <div class="container-body">
                       <h2>Context Switching</h2>
                       <h4>As a task executes it utilizes the processor / microcontroller registers and accesses RAM and ROM just as any other program. These resources together (the processor registers, stack, etc.) comprise the task execution context.</h4>
                       <img src="img/context.gif" alt="">
                       <h4>A task is a sequential piece of code - it does not know when it is going to get suspended (swapped out or switched out) or resumed (swapped in or switched in) by the kernel and does not even know when this has happened. Consider the example of a task being suspended immediately before executing an instruction that sums the values contained within two processor registers. While the task is suspended other tasks will execute and may modify the processor register values. Upon resumption the task will not know that the processor registers have been altered - if it used the modified values the summation would result in an incorrect value.</h4>
                       <h4>To prevent this type of error it is essential that upon resumption a task has a context identical to that immediately prior to its suspension. The operating system kernel is responsible for ensuring this is the case - and does so by saving the context of a task as it is suspended. When the task is resumed its saved context is restored by the operating system kernel prior to its execution. The process of saving the context of a task being suspended and restoring the context of a task being resumed is called context switching.</h4>
                      </div>
              </div>
              <div id="rta" class="table-topic-container jumptarget">
                    <div class="container-body">
                       <h2>Real Time Applications</h2>
                      <h4>Real time operating systems (RTOSes) achieve multitasking using these same principles - but their objectives are very different to those of non real time systems. The different objective is reflected in the scheduling policy. Real time / embedded systems are designed to provide a timely response to real world events. Events occurring in the real world can have deadlines before which the real time / embedded system must respond and the RTOS scheduling policy must ensure these deadlines are met.</h4>
                      <h4>To achieve this objective the software engineer must first assign a priority to each task. The scheduling policy of the RTOS is then to simply ensure that the highest priority task that is able to execute is the task given processing time. This may require sharing processing time "fairly" between tasks of equal priority if they are ready to run simultaneously.</h4>
                      
                    <h4>  The most basic example of this is a real time system that incorporates a keypad and LCD. A user must get visual feedback of each key press within a reasonable period - if the user cannot see that the key press has been accepted within this period the software product will at best be awkward to use. If the longest acceptable period was 100ms - any response between 0 and 100ms would be acceptable. This functionality could be implemented as an autonomous task with the following structure:
                      </h4>

<pre><code>void vKeyHandlerTask( void *pvParameters )
{
    // Key handling is a continuous 
    //process and as such the task
    // is implemented using an 
    //infinite loop (as most real time
    // tasks are).
    for( ;; )
    {
        [Suspend waiting for a key press]

        [Process the key press]
    }
}</code></pre>
<h4>Now assume the real time system is also performing a control function that relies on a digitally filtered input. The input must be sampled, filtered and the control cycle executed every 2ms. For correct operation of the filter the temporal regularity of the sample must be accurate to 0.5ms. This functionality could be implemented as an autonomous task with the following structure:
  </h4>
<pre><code>void vControlTask( void *pvParameters )
{
    for( ;; )
    {
        [Suspend waiting for 2mssince
        the start of the previous cycle]

        [Sample the input]
        [Filter the sampled input]
        [Perform control algorithm]
        [Output result]
    }
}</code></pre>
                   
                    </div>
              </div>
              <div id="rts" class="table-topic-container jumptarget">
                    <div class="container-body">
                       <h2>Real Time Scheduling</h2>
                       <h4>The diagram below demonstrates how the tasks defined on the previous page would be scheduled by a real time operating system. The RTOS has itself created a task - the idle task - which will execute only when there are no other tasks able to do so. The RTOS idle task is always in a state where it is able to execute.</h4>
                       <img src="img/rts.gif" alt="">
                       <h4>Referring to the diagram above:</h4>

                       <h4>At the start neither of our two tasks are able to run - vControlTask is waiting for the correct time to start a new control cycle and vKeyHandlerTask is waiting for a key to be pressed. Processor time is given to the RTOS idle task.</h4>
                       <h4>At time t1, a key press occurs. vKeyHandlerTask is now able to execute - it has a higher priority than the RTOS idle task so is given processor time.</h4>
                       <h4>At time t2 vKeyHandlerTask has completed processing the key and updating the LCD. It cannot continue until another key has been pressed so suspends itself and the RTOS idle task is again resumed.</h4>
                       <h4>At time t3 a timer event indicates that it is time to perform the next control cycle. vControlTask can now execute and as the highest priority task is scheduled processor time immediately.</h4>
                       <h4>Between time t3 and t4, while vControlTask is still executing, a key press occurs. vKeyHandlerTask is now able to execute, but as it has a lower priority than vControlTask it is not scheduled any processor time.</h4>
                       <h4>At t4 vControlTask completes processing the control cycle and cannot restart until the next timer event - it suspends itself. vKeyHandlerTask is now the task with the highest priority that is able to run so is scheduled processor time in order to process the previous key press.</h4>
                       <h4>At t5 the key press has been processed, and vKeyHandlerTask suspends itself to wait for the next key event. Again neither of our tasks are able to execute and the RTOS idle task is scheduled processor time.</h4>
                       <h4>Between t5 and t6 a timer event is processed, but no further key presses occur.
                       <h4>The next key press occurs at time t6, but before vKeyHandlerTask has completed processing the key a timer event occurs. Now both tasks are able to execute. As vControlTask has the higher priority vKeyHandlerTask is suspended before it has completed processing the key, and vControlTask is scheduled processor time.</h4>
                       <h4>At t8 vControlTask completes processing the control cycle and suspends itself to wait for the next. vKeyHandlerTask is again the highest priority task that is able to run so is scheduled processor time so the key press processing can be completed. </h4>
                      
                      </div>
              </div>
              <div id="addisad" class="table-topic-container jumptarget">
                    <div class="container-body">
                      <h2>Advantage/Disadvantage</h2>

                      <h4 class="fa fa-2x">Advantages: The advantages of real-time operating systems are as follows- </h4>

                      <h4>Maximum consumption – </h4>
                      <h5>Maximum utilization of devices and systems. Thus more output from all the resources. </h5>
                      
                      <h4>Task Shifting – </h4>
                      <h5>Time assigned for shifting tasks in these systems is very less. For example, in older systems, it takes about 10 microseconds. Shifting one task to another and in the latest systems, it takes 3 microseconds. 
                      </h5>
                      <h4>Focus On Application – </h4>
                      <h5>Focus on running applications and less importance to applications that are in the queue. </h5>
                      
                      <h4>Real-Time Operating System In Embedded System – </h4>
                      <h5>Since the size of programs is small, RTOS can also be embedded systems like in transport and others. </h5>
                      
                      <h4>Error Free – </h4>
                      <h5>These types of systems are error-free. </h5>
                      
                      <h4>Memory Allocation – </h4>
                      <h5>Memory allocation is best managed in these types of systems.</h5>
                      <h4 class="fa fa-2x">Disadvantages: The disadvantages of real-time operating systems are as follows- 
 

                      <h4>Limited Tasks – </h4>
                      <h5>Very few tasks run simultaneously, and their concentration is very less on few applications to avoid errors. </h5>
 
                      <h4>Use Heavy System Resources – </h4>
                      <h5>Sometimes the system resources are not so good and they are expensive as well. </h5>
                      
                      <h4>Complex Algorithms – </h4>
                      <h5>The algorithms are very complex and difficult for the designer to write on. </h5>
                      
                      <h4>Device Driver And Interrupt signals – </h4>
                      <h5>It needs specific device drivers and interrupts signals to respond earliest to interrupts. </h5>
                      
                      <h4>Thread Priority – </h4>
                      <h5>It is not good to set thread priority as these systems are very less prone to switching tasks.</h5>
                      
                      <h4>Minimum Switching –  </h4>
                      <h5> RTOS performs minimal task switching.</h5>
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
