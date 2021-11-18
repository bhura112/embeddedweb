<?php 
   require_once $_SERVER['DOCUMENT_ROOT']."/database/dataHandler.php";
   GetMain(3);
   GetHeadData(3);
   GetBodyData(3);
   GetfootData(3);
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
            <span class="material-icons-outlined">desktop_mac</span>
            </div>
            <div class="col-2">
                <h1><?php  echo $mainData['topic']; ?></h1>
                <p>
                 Linux is a family of open-source Unix-like operating systems based on the Linux kernel,
                 an operating system kernel first released on September 17, 1991, by Linus Torvalds. <br> <br>
               </p>
               <p>
                Distributions include the Linux kernel and supporting system software and libraries, many of which are provided by the GNU Project. Many Linux distributions use the word "Linux" in their name, but the Free Software Foundation uses the name "GNU/Linux" to emphasize the importance of GNU software, causing some controversy
                </p>   
            </div>
        </div>
        <div class="row-3"></div>
    </div>
           
    <div class="body-cards-div">
          <a class="card card-background-1" href="os/">
                <div class="head">
                  <img src="../../global/icon-mcu.png" alt="" srcset="">
                </div>
                <div class="body">
                  <h2 class="txt-center">OS</h2>
                </div>
                <div class="foot">
                  <h4>Learn  <i class="fa fa-1x fa-arrow-right"></i></h4>
                </div>
              </a>

              <a class="card card-background-2" href="kernel/">
                <div class="head">
                  <img src="../../global/icon-mcu.png" alt="" srcset="">
                </div>
                <div class="body">
                  <h2 class="txt-center">KERNEL</h2>
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
                     <h3 > <a href="#Purpose">Purpose </a> </h3>
                     <h3 > <a href="#KS">Kernel Structure</a> </h3>
                     <h3 > <a href="#DS">Linux Data Structure</a> </h3>
                    
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
              <h1>Introduction</h1>
              <p>As you may already know, Linux is a freely distributed implementation of a UNIX-like kernel, the low-
                    level core of an operating system. Because Linux takes the UNIX system as its inspiration, 
                    Linux and UNIX programs are very similar.                    </p> 
                    <p>In fact, almost all programs written for UNIX can be compiled and run
                    on Linux. Also, some commercial applications sold for commercial versions of UNIX can run unchanged
                    in binary form on Linux systems.</p>

                    <figure class="fig-sim">  
                      <img src="img/architec.png" alt="" srcset="">
                      <figcaption> linux based operating systems block diagram</figcaption>
                    </figure>
                    
                 <p>Versions of Linux are now available for a wide variety of computer systems using many different types
                    of CPUs, including PCs based on 32-bit and 64-bit Intel x86 and compatible processors; workstations and
                    servers using Sun SPARC, IBM PowerPC, AMD Opteron, and Intel Itanium; and even some handheld
                    PDAs and Sony’s Playstations 2 and 3. If it’s got a processor, someone somewhere is trying to get Linux
                    running on it!</p>
             
            </div>
            <hr>
          </div>
       

          <div id="Architectures" class="content">
            
            <div class="container">
              <h1>Architectures</h1>
              <p>The Linux kernel is useless in isolation; it participates as one part in a larger system that, as a whole, is useful. As such, it makes sense to discuss the kernel in the context of the entire system. Figure 2.1 shows a decomposition of the entire Linux operating system</p>
              <p>The Linux operating system is composed of four major subsystems</p>
              <figure class="fig-sim">
               
              <img src="img/arch.gif" alt="" srcset="">
                <figcaption> architecture</figcaption>
              </figure>
              <h3>User Applications</h3> 
              <p> -- the set of applications in use on a particular Linux system will be different depending on what the computer system is used for, but typical examples include a word-processing application and a web-browser.</p>
              <h3>O/S Services</h3> 
              <p>-- these are services that are typically considered part of the operating system (a windowing system, command shell, etc.); also, the programming interface to the kernel (compiler tool and library) is included in this subsystem.</p>
              <h3>Linux Kernel</h3> 
              <p>-- this is the main area of interest in this paper; the kernel abstracts and mediates access to the hardware resources, including the CPU.</p>
              <h3>Hardware Controllers</h3> 
              <p>-- this subsystem is comprised of all the possible physical devices in a Linux installation; for example, the CPU, memory hardware, hard disks, and network hardware are all members of this subsystem</p>
              <p>This decomposition follows Garlan and Shaw's Layered style discussed in [Garlan 1994]; each subsystem layer can only communicate with the subsystem layers that are immediately adjacent to it. In addition, the dependencies between subsystems are from the top down: layers pictured near the top depend on lower layers, but subsystems nearer the bottom do not depend on higher layers.</p>
              <p>Since the primary interest of this paper is the Linux kernel, we will completely ignore the User Applications subsystem, and only consider the Hardware and O/S Services subsystems to the extent that they interface with the Linux kernel subsystem.</p>
              
            </div>
            <hr>
          </div>

          
          <div id="purpose" class="content">
                    <div class="container">
                    <h1>Purpose of the Kernel</h1>
                    <p>The Linux kernel presents a virtual machine interface to user processes. Processes are written without needing any knowledge of what physical hardware is installed on a computer -- the Linux kernel abstracts all hardware into a consistent virtual interface.</p> 
                    <p>In addition, Linux supports multi-tasking in a manner that is transparent to user processes: each process can act as though it is the only process on the computer, with exclusive use of main memory and other hardware resources. 
                    </p>
                    <p>The kernel actually runs several processes concurrently, and is responsible for mediating access to hardware resources so that each process has fair access while inter-process security is maintained.</p>
                    </div>
              </div>   
              
              <div id="ks" class="content">
                    <div class="container">
                      <h1>Kernel Structure</h1>
                      <p>The Linux kernel is composed of five main subsystems:</p>
                      

                       <figure class="fig-sim">
               
                              <img src="img/ks.gif" alt="" srcset="">
                        <figcaption> Kernel Structure</figcaption>
                      </figure>

                      <h3>The Process Scheduler (SCHED)</h3> 
                      <p> is responsible for controlling process access to the CPU. The scheduler enforces a policy that ensures that processes will have fair access to the CPU, while ensuring that necessary hardware actions are performed by the kernel on time.</p>
                      <h3>The Memory Manager (MM)</h3> 
                      <h4> permits multiple process to securely share the machine's main memory system. In addition, the memory manager supports virtual memory that allows Linux to support processes that use more memory than is available in the system. Unused memory is swapped out to persistent storage using the file system then swapped back in when it is needed.</h4>
                      <h3>The Virtual File System (VFS)</h3> 
                      <p> abstracts the details of the variety of hardware devices by presenting a common file interface to all devices. In addition, the VFS supports several file system formats that are compatible with other operating systems.</p>
                      <h3>The Network Interface (NET)</h3> 
                      <p> provides access to several networking standards and a variety of network hardware.</p>
                      <h3>The Inter-Process Communication (IPC)</h3> 
                      <p> subsystem supports several mechanisms for process-to-process communication on a single Linux system.</p>
                    </div>
              </div>  

              <div id="#DS" class="content">
                    <div class="container">
                      <h1>System Data Structure</h1>
                      <h3>Task List</h3>
                      <p>The process scheduler maintains a block of data for each process that is active. These blocks of data are stored in a linked list called the task list; the process scheduler always maintains a current pointer that indicates the current process that is active.</p>

                      <h3>Memory Map</h3>
                      <p>The memory manager stores a mapping of virtual to physical addresses on a per-process basis, and also stores additional information on how to fetch and replace particular pages. This information is stored in a memory-map data structure that is stored in the process scheduler's task list.</p>

                      <h3>I-nodes</h3>
                      <p>The Virtual File System uses index-nodes (i-nodes) to represent files on a logical file system. The i-node data structure stores the mapping of file block numbers to physical device addresses. I-node data structures can be shared across processes if two processes have the same file open. This sharing is accomplished by both task data blocks pointing to the same i-node.</p>

                      <h3>Data Connection</h3>
                      <p>All of the data structures are rooted at the task list of the process scheduler. Each process on the system has a data structure containing a pointer to its memory mapping information, and also pointers to the i-nodes representing all of the opened files. Finally, the task data structure also contains pointers to data structures representing all of the opened network connections associated with each task.</p>
                    </div>
              </div>  
       </div>
      
   </div>

   <!--

        <section class="top-section-subsec">
          <div class="card-sec">
               <a href="shellscripting/"> 
                  <div class="cardlogo">
                    <h4>Shell</h4>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

                <a href="systemcall/"> 
                  <div class="cardlogo">
                  <h4>System Call</h4>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

               <a href="processmgt/"> 
                  <div class="cardlogo">
                  <h4>Process</h4>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

                <a href="threadmgt/"> 
                  <div class="cardlogo">
                  <h4>Threads</h4>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

                <a href="signals/"> 
                  <div class="cardlogo">
                  <h4>Signals</h4>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

                <a href="pipes/"> 
                  <div class="cardlogo">
                  <h4>Pipes</h4>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

                <a href="ipc/"> 
                  <div class="cardlogo">
                  <h4>IPC</h4>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

               <a href="memorymgt/"> 
                  <div class="cardlogo">
                  <h4>Memory</h4>
                   <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div>  
                  </div> 
                </a>
                <a href="network/"> 
                  <div class="cardlogo">
                  <h4>Networking</h4>
                   <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div>  
                  </div> 
                </a>

                <a href="devicedrivers/"> 
                  <div class="cardlogo">
                  <h4>Device Driver</h4>
                   <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div>  
                  </div> 
                </a>
                </div>
        </section>
    
    <?php include_once $_SERVER['DOCUMENT_ROOT']."/global/foot.php"; ?>
  </body>
</html>
