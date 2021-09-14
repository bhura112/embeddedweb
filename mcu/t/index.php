<?php 
   
   require_once '../../database/connection.php';
   $rowobj;
   $db = new connection();

   $db->database_connect('embedded_web');

   if( $db->g_conn->connect_error) {
     echo "database error 10500db01";
     exit();
    }
   
    if( $result = $db->g_conn->query("SELECT * FROM index_tab "))
     {
        while( $rowobj = $result->fetch_object())
        {
          if( $rowobj->page_id == 1)
            break;
          $result->next();
        }
        $result -> free_result();
     }
    $db->g_conn->close();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../global/header.css" />
    <link rel="stylesheet" href="../../global/foot.css" />
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
    <script src="../../global/headerScript.js"></script>
    <script src="../../global/footerScript.js"></script>
    <script src="https://kit.fontawesome.com/2197d61e3b.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title><?php  echo $rowobj->page_title; ?></title>
  </head>

  <body>
    <a class="anchor" id="top"></a>
    <header class="header">
      <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="../"
              ><b><?php  echo $rowobj->web_name; ?></b></a
            >
          </div>
          <div id="menu-topics" class="menu-topics">
            <ul id="navbar-nav" class="nav navbar-nav">
              <li class="active"><a href=".">MCU</a></li>
              <li><a href="../rtos/">RTOS</a></li>
              <li><a href="../linux/">LINUX</a></li>
              <li><a href="../qt/">Qt</a></li>
            </ul>
          </div>

          <div onclick="burgerClicked()" class="burger-menu">
            <i id="burgericon" class="fa fa-bars fa-2x" aria-hidden="true"></i>
          </div>
        </div>
      </nav>
    </header>

    <div class="main-container">
      <main class="main">
        <section class="main-section">
         <div class="left-section">

           <ul class="topic-list">

             <li id = "introdcution" onclick="subtopiclistfun('introdcution','In-angle')">
               <a href="#" class="topic-name">
                 <h3>Introduction</h3>  
                 <h3><i id="In-angle" class="fas fa-angle-right"></i></h3>
                </a>
               <ul id="introdcution" class="sub-topic-list">
                 <li><a href="#started">
                 <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">Getting Started</div></div>   
                </a></li>
                 <li><a href="#esys"> 
                 <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">Embedded Systems</div></div>   
                </a></li>
                 <li><a href="#embeddedc"> 
                 <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">Embedded C</div></div>   
                </a></li>
                 <li><a href="#microcontroller"> 
                 <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">Micro Controllers</div></div>   
                </a></li>
                 <li><a href="#microprocessor"> 

                 <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list eoflist"> </div>
                        </div> <div class="listname">Micro Processors</div></div>
                 </a></li>
               </ul>
             </li>
            
             <li  id = "architechture" onclick="subtopiclistfun('architechture','Ar-angle')">
             <a href="#" class="topic-name"><h3>Architechture</h3>   <h3><i id="Ar-angle" class="fas fa-angle-right"></i></h3></a>
               <ul id="architechture" class="sub-topic-list">
               <li><a href="#vonn"> 
                 <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">VON NEUMANN</div></div>   
                </a></li>

                <li><a href="#harvard"> 
                 <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">HARVARD</div></div>   
                </a></li>

               <li><a href="#risc"> 
                 <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">RISC</div></div>   
                </a></li>
                 <li><a href="#csic"> 
                 
                 <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list eoflist"> </div>
                        </div> <div class="listname">CISC</div></div>
                 </a></li>
               </ul>
             </li>

             <li id="pheriperals" onclick="subtopiclistfun('pheriperals','Ph-angle')">
             <a href="#" class="topic-name last-topic"> <h3>Pheriperals</h3> <h3><i id="Ph-angle" class="fas fa-angle-right"></i></h3></a>
               <ul id="pheriperals" class="sub-topic-list">
               <li> <a href="#memory">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">MEMORY </div></div>
                    </a></li>
                    <li> <a href="#mode">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">MODE</div></div>
                    </a></li>
                    <li> <a href="#gpio">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">GPIO</div></div>
                    </a></li>
                    <li> <a href="#timer">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">TIMER</div></div>
                    </a></li>
                     <li> <a href="#adc">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">ADC</div></div>
                    </a></li> 
                    <li> <a href="#dma">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">DMA</div></div>
                    </a></li>  
                    <li> <a href="#uart">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">UART</div></div>
                    </a></li>
                    <li> <a href="#i2c">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">I2C</div></div>
                    </a></li>
                    <li> <a href="#spi">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">SPI</div></div>
                    </a></li>
                    <li> <a href="#rtc">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">RTC</div></div>
                    </a></li>
                    <li> <a href="#usb">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">USB</div></div>
                    </a></li>
                    <li> <a href="#can">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">CAN</div></div>
                    </a></li>
                    <li> <a href="#ethernet">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">ETHERNET</div></div>
                    </a></li>
                    <li> <a href="#watchdog">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list eoflist"> </div>
                        </div> <div class="listname">WATCH DOG TIMER</div></div>
                    </a></li>
              </ul>
             </li>

           </ul>
         </div>
         
         <div class="right-section">
              <div class="right-section-content">
              <div id="started" class=" jumptarget">
                  
                  <h2>How to Get Started With Micro Controllers?</h3>
                  
                  <p>You can find microcontrollers everywhere, from wrist watches to washing machines. 
                    They are small computers squeezed into a small chip and you can get them in any sizes and flavours depending on your need for memory and I/O-pins. 
                    Nowadays the most commonly used microcontrollers in do-it-yourself projects are Atmel's AVR- , Microchip's PIC and ARM-families. <br/>
                  </p> 
                      <p><b> Setup Enviroment</b><p>
                      <p> Visit Manufacturare website </p>
                      <p> Download ide/editor and compiler </p> 
                      <p> Install ide/editor and compiler </p>
                      <p> Accept terms and conditions </p>
                      <p>wait for installation to complete </p> 

                      <section class="top-section-subsec">
                      <div class="card-sec">
                          <a href="#"> 
                              <div class="atmellogo">
                                <p><img src="img/atmellogo.svg" style="width:80%;"></p>
                                <div class="container">
                                  <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                                </div> 
                              </div> 
                            </a>

                          <a href="#"> 
                              <div class="mchiplogo">
                                <p><img src="img/microchiplogo.svg" style="width:80%;"> </p> 
                                <div class="container">
                                  <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                                </div> 
                              </div> 
                            </a>

                          <a href="#"> 
                              <div class="armlogo">
                              <p><img src="img/armlogo.svg" style="width:80%;"> </p>
                              <div class="container">
                                  <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                                </div>  
                              </div> 
                            </a>
                            </div>
                    </section>
              </div>
              
              <div id="esys" class=" jumptarget">
                  <h2> Embedded Systems</h2>

                  <p> An embedded system is a computer system designed to perform one or a few dedicated often with real-time computing constraints.”
                  It is embedded as part of a complete device often including hardware and software parts.
                      
                       </p>
                      <p class="imgP"><img src="img/esys.jfif" alt="embdedded Systems" style="width:60%;"/></p>
                      <p>    
                      <br/><br/>An embedded system is a special-purpose computer system designed to perform certain dedicated functions. It is usually embedded as part of a complete device including hardware and mechanical parts. (Wikipedia)
                      
                      </p>
                      <p class="imgP"><img src="img/esys2.webp" alt="embdedded Systems" style="width:60%;"/></p>
                      <p>
              <br/><br/>Embedded systems come in many forms and guises. They are extremely common in the
                      home, the motor vehicle, and the workplace. Most modern domestic appliances, like a
                      washing machine, dishwasher, oven, central heating, and burglar alarm, are embedded
                      systems. The motor car is full of them, in engine management, security (for example,
                      locking and antitheft devices), air-conditioning, brakes, radio, and so on.
                    
                    </p>
                    <h4> <a href="esys/" class="learnmore" style="color:#524141;"> Learn More</a></h4>
              </div>

              <div id="embeddedc" class="jumptarget">
                  <h2> Embedded C</h2>
                  <p>Embedded C is one of the most popular and most commonly used Programming Languages in the development of Embedded Systems. So, in this article, we will see some of the Basics of Embedded C Program and the Programming Structure of Embedded C.

                   <br><br> Embedded C is perhaps the most popular languages among Embedded Programmers for programming Embedded Systems. There are many popular programming languages like Assembly, BASIC, C++, Python etc. that are often used for developing Embedded Systems but Embedded C remains popular due to its efficiency, less development time and portability.
                     
                     <h4><figure class="codeWindow">
                        <figcaption>Code Sample</figcaption>
                        <br>
                        <script src="https://gist.github.com/bhura112/992521143169b7690f0c576786a4915e.js"></script>
                      </figure>
                        </h4>
                        <h3> Difference between C and Embedded C</h3>
                        <p>There is actually not much difference between C and Embedded C apart from few extensions and the operating environment. Both C and Embedded C are ISO Standards that have almost same syntax, datatypes, functions, etc.
<br><br>
                        Embedded C is basically an extension to the Standard C Programming Language with additional features like <span class="sketch-highlight"> Addressing I/O, multiple memory addressing and fixed-point arithmetic,</span> etc.
<br><br>
                        C Programming Language is generally used for developing desktop applications, whereas Embedded C is used in the development of Microcontroller based applications.
<br><br>
                        Before going in to the details of Embedded C Programming Language and basics of Embedded C Program, we will first talk about the C Programming Language.
    </p>
                        <p>The C Programming Language, developed by Dennis Ritchie in the late 60’s and early 70’s, is the most popular and widely used programming language. The C Programming Language provided low level memory access using an uncomplicated compiler (a software that converts programs to machine code) and achieved efficient mapping to machine instructions.</p>
                        <h4> <a href="embc/" style="color:#524141;"> Learn More</a></h4>
              </div>

              <div id="microcontroller" class="jumptarget">
                  <h2> Micro Controller</h2>
                  
                  <p>
                  A microcomputer made on a single semiconductor chip is called single-chip microcomputer. 
                  Since, single chip microcomputers are generally used in control applications, they are also called microcontrollers.
                  </p>
                 
                  <p class="imgP"> <img src="img/gpmcu.png" alt="pic controller block diagram" style="width:80%"> </p>
                  
                  <p>
                   Microcontroller contains all essential components of a microcomputer such as CPU, RAM, ROM/EPROM, I/O lines etc. Some single chip microcontrollers contain devices to perform specific functions such as DMA channels, A/D converter, serial port, pulse width modulation, etc.
                  </p>
                  
                  <h4> <a href="embc/" style="color:#524141;"> Learn More</a></h4>
            
                </div>

              <div id="microprocessor" class="jumptarget">
                  <h2> Micro Processor</h2>
                  <p>

                  The microprocessor is the heart of the computer and it is a hardware component.
                  Hence we being Electronics engineers, we need to study this subject. This is the essence of the subject.<br><br>
              Various applications of microprocessor are – Educational field, Medical field, scientific labs, Banking sector etc.
              <br><br>
              Intel introduced it’s 4 bit microprocessor 4004 in
              1971 and it’s 8 bit microprocessor 8008 in 1972.
              </p>
                  <p class="imgP"> <img src="img/gpmpu.png" alt="pic controller block diagram" style="width:80%"> </p>                 
              <p>
              <br>These microprocessors could not survive as
              general purpose microprocessors because of
              their design and performance limitations.
              <br><br>
              Then the launch of a first general purpose 8 bit
              microprocessor 8080 in 1974 by Intel is
              considered to be the first major stepping stone
              towards the development of advanced
              microprocessors.
              </p>
              <h4> <a href="embc/" style="color:#524141;"> Learn More</a></h4>
              </div>

              <div id="vonn" class="jumptarget">
                  <h2> VON NEUMANN</h2>
                  <p>A block diagram for one type of computer is shown in Figure. 
                    The computing system consists of a central processing unit (CPU) and a memory. 
                    The memory holds both data and instructions, and can be read or written when given an address. 
                  </p>
                    <p>A computer whose memory holds both data and instructions is known as a von Neumann machine.
                        Figure, A von Neumann architecture computer.</p>

                        <p class="imgP"> <img src="img/vonarch.png" alt="von neumann architechture block diagram" style="width:80%"> </p>                 
                                    
                        <p>The CPU has several internal registers that store values used internally. 
                          One of those registers is the program counter (PC), which holds the address in memory of an instruction. 
                          The CPU fetches the instruction from memory, decodes the instruction, and executes it. 
                            </p>

                          <p>The program counter does not directly determine what the machine does next, but only indirectly by pointing to an instruction in memory. 
                          By changing only the instructions, we can change what the CPU does. 
                          It is this separation of the instruction memory from the CPU that distinguishes a stored-program computer from a general finite-state machine.</p>
                          <h4> <a href="embc/" style="color:#524141;"> Learn More</a></h4>
               </div>
              <div id="harvard" class="jumptarget">
                  <h2> HARVARD</h2>
                  <p>An alternative to the von Neumann style of organizing computers is the Harvard architecture, which is nearly as old as the von Neumann architecture. 
                    As shown in Figure , a Harvard machine has separate memories for data and program. 
                    <p class="imgP"> <img src="img/harvard.png" alt="harvard architechture block diagram" style="width:80%"> </p>                 

                    <p>The program counter points to program memory, not data memory. 
                      As a result, it is harder to write self-modifying programs (programs that write data values, then use those values as instructions) on Harvard machines.</p>

                  <p>Harvard architectures are widely used today for one very simple reason—the separation of program and data memories provides higher performance for digital signal processing.</p>
                  <h4> <a href="embc/" style="color:#524141;"> Learn More</a></h4>
                </div>
              <div id="risc" class="jumptarget">
                  <h2> RISC </h2>
                  <p>RISC(Reduced Instruction Set Computer) is more of a philosophy rather than a controller or processor. Most of the modern processor/controller architectures like ARM follow RISC philosophy although some features of CISC are also included to improve performance.</p>
                  <p> A Reduced Instruction Set Computer (RISC) is one whose instruction set architecture has a set of attributes that allows it to have a lower cycles per instruction than a Complex Instruction Set Computer (CISC)</p>
                  <h4> <a href="embc/" style="color:#524141;"> Learn More</a></h4>
              </div>

              <div id="cisc" class="jumptarget">
                  <h2> CISC</h2>
                  <p>The main intend of the CISC processor architecture is to complete task by using less number of assembly lines. For this purpose, the processor is built to execute a series of operations. Complex instruction is also termed as MULT, which operates memory banks of a computer directly without making the compiler to perform storing and loading functions.</p>
                  <h4> <a href="embc/" style="color:#524141;"> Learn More</a></h4>
                </div>
              <div id="memory" class="jumptarget">
                  <h2> MEMORY</h2>
                  
                  <p>Computer memory stores every information in the form of bits either zero or one. 
                    Hence, the main basic component of memory is a bit. But memory is usually organized in bytes. 
                    </p>
                    <p>
                    One byte consists of 8 bits. Therefore, one byte is the minimum information that microcontrollers can read and write. In other words, every memory location is byte addressable. 
                    That means, each memory location consists of one byte and each location has a unique address.
                    <br><br>
                    Hence, memory is organized in the order of hundreds and thousands of bytes. </p>
                    <p> 
                      <b>Types of Memory used in Microcontroller</b> <br><br>

                        Mainly, microcontrollers have two types of on-chip memory such as flash memory and data memory. 
                        But, microcontrollers also have a limited amount of EEPROM which is used to store data 
                        permanently even if the power is lost. </p>

                  <h4> <a href="embc/" style="color:#524141;"> Learn More</a></h4>
              </div>

              <div id="mode" class="jumptarget">
                  <h2> MCU MODE</h2>
                  <p>Microcontrollers work on different operating modes each of them is discussed below.
                  <br><br>
                  <b>Normal operating mode</b>
                  <br><br>
                  When the microcontroller is Powered ON, it enters the Normal operating mode and it can be forced to different modes based on the application.
                  In Normal operating mode, the processor is capable of performing all its functionality
                  The device can be placed into Sleep / Halt mode by software control
                  <br><br>
                  <b>Idle / Sleep Mode</b>
                  <br><br>
                  All activities are stopped except on-board oscillator circuitry, clock monitor and idle timer (a free running timer)
                  Power consumption on the microcontroller in this mode is typically around 30% of normal power consumption for the microprocessor.
                  Idle mode is exit  by a reset or some other stimulus such as timer interrupt, serial port interrupt
                  <br><br>
                  <b>Halt mode</b>

                  <p>On-chip oscillator is stopped
                  <br>With clock frozen, all activities are stopped (including timers)
                  <br>The only way to wake up the microcontroller is by a hardware reset
                  <br>The power requirements of the device are minimal and the applied voltage can be sometimes decreased below operating voltage without altering the state (RAM / Outputs) of the device
                  <br>Both in Halt and Idle conditions the state of the microcontroller freezes, but RAM is not cleared and any outputs are not changed.
                  </p>
                  <b>Cold and Warm Reset</b>
                  <br><br>
                  <i>Cold Reset</i>
                  <p>Restarting the system by turning off the power and then on
                  <br>All the peripheral registers, variables are initialized
                  <br>Also called as Hard reset
                  <br>Example: Power On reset</p>
                  <i>Warm Reset</i>
                  <p>Restarting the system without removing the power
                  <br>Only variables are initialized
                  <br>Also called as Soft reset
                  <br>Example: Watchdog reset. </p>
                  </p>
                  <h4> <a href="embc/" style="color:#524141;"> Learn More</a></h4>
              </div>
              <div id="gpio" class="jumptarget">
                  <h2> GPIO</h2>
                  <p>
                     <p>A GPIO (general-purpose input/output) port handles both incoming and outgoing digital signals. As an input port, it can be used to communicate to the CPU the ON/OFF signals received from switches, or the digital readings received from sensors. As an output port, it can be used to drive outside operations based on CPU instructions and calculation results—for example, to drive an LED display based on calculation results, or to output drive signals to a motor.
                     </p>
                     <p class="imgP"> <img src="img/gpio.png" alt="harvard architechture block diagram" style="width:80%"> </p>                 

                     <p>The GPIO is referred to as "general purpose" because each pin can be freely set to function as either an input or an output. In early MCUs, each port was either exclusively input or exclusively output. A GPIO is flexible, however. If it has 8 pins, you can set them as best suits your needs: 4 input and 4 output, or 7 input and 1 output, or any other combination.
                     </p>
                     <p>Note that while programs read, write, and operate on digital values (0s and 1s), external devices often use signal levels: LOW voltage and HIGH voltage. The GPIO handles the necessary conversions in both directions.
                     </p>
                    </p>
                  <h4> <a href="gpio/" style="color:#524141;"> Learn More</a></h4>
              </div>

              <div id="timer" class="jumptarget">
                  <h2> COUNTERS/TIMERS</h2>

                  <p>Counters count rising edges of a pulse train. The pulses may come from the internal peripheral
                      bus clock or external sources. If a fixed frequency clock produces the pulses, counters become
                      timers (the count represents a time). Therefore, the words “counter” and “timer” are often
                      used interchangeably.
                      </p>
                      <p>As the name implies, timers can tell the time and count. 
                        Counting and timing allows for some really cool things, like controlling the brightness of LEDs, 
                        controlling the angle of servo shafts, receiving sensor data that transmit in PWM (Pulse Width Modulation - 
                        more on that in another tuorial), making a timer (like on the stove), or just simply adding a time variable 
                        to your microcontroller project</p>
                        <p class="imgP"> <img src="img/tmrcounter.png" alt="timer counter" style="width:80%"> </p>   
                      <p>
                      <br><br>Because Microchip’s documentation refers to these devices as “timers,”
                      we adopt that terminology. Timers can generate interrupts after a preset number of pulses has
                      been counted or on the falling edge of an external pulse whose duration is being timed. These
                      timers differ from the core timer</p>
                  <h4> <a href="counters_timers/" style="color:#524141;"> Learn More</a></h4>
              </div>
              <div id="adc" class=" jumptarget">
                  <h2> ADC</h2>
                  <p>
                  Analog to digital conversion is a multi-step process. First the voltage on the appropriate pin
must be routed to an internal differencing amplifier, which outputs the difference between the
pin voltage and a reference voltage. Next, the voltage difference is sampled and held by an
internal capacitor. Finally, the ADC converts the voltage on the capacitor into a 10-bit binary
number.
<p class="imgP"> <img src="img/adc.png" alt="timer counter" style="width:80%"> </p>  
                  </p>
                  <h4> <a href="embc/" style="color:#524141;"> Learn More</a></h4>
              </div>
              <div id="dma" class=" jumptarget">
                  <h2> DMA</h2>
                  <p>The Direct Memory Access (DMA) controller is a bus master module that is useful for data
transfers between different peripherals without intervention from the CPU. The source and
destination of a DMA transfer can be any of the memory-mapped modules</p>

<p class="imgP"> <img src="img/dma.png" alt="timer counter" style="width:80%"> </p>  
                  <P>The direct memory access (DMA) controller (DMAC) transfers data without involving the
CPU. For example, DMA can allow an external device to dump data through a UART directly
into</P>
                  <h4> <a href="embc/" style="color:#524141;"> Learn More</a></h4>
              </div>
              <div id="uart" class="h720 jumptarget">
                  <h2> UART</h2>
                  <h4> <a href="embc/" style="color:#524141;"> Learn More</a></h4>
              </div>

              <div id="i2c" class="h720 jumptarget">
                  <h2> I2C</h2>
                  <h4> <a href="embc/" style="color:#524141;"> Learn More</a></h4>
              </div>
              <div id="spi" class="h720 jumptarget">
                  <h2> SPI</h2>
                  <h4> <a href="embc/" style="color:#524141;"> Learn More</a></h4>
              </div>

              <div id="rtc" class="h720 jumptarget">
                  <h2> RTC</h2>
                  <h4> <a href="embc/" style="color:#524141;"> Learn More</a></h4>
              </div>
              <div id="usb" class="h720 jumptarget">
                  <h2> USB</h2>
                  <h4> <a href="embc/" style="color:#524141;"> Learn More</a></h4>
              </div>

              <div id="can" class="h720 jumptarget">
                  <h2> CAN</h2>
                  <h4> <a href="embc/" style="color:#524141;"> Learn More</a></h4>
              </div>
              <div id="ethernet" class="h720 jumptarget">
                  <h2> ETHERNET</h2>
                  <h4> <a href="embc/" style="color:#524141;"> Learn More</a></h4>
              </div>

              <div id="watchdog" class="h720 jumptarget">
                  <h2> WATCH DOG TIMER</h2>
                  <h4> <a href="embc/" style="color:#524141;"> Learn More</a></h4>
              </div>

         </div> 
         </div>
        </section>
        <div class="gototop"><a href="#"> <i class="fa fa-angle-double-up"></i></a></div>
      </main>
    </div>    
    <div class="page-space"></div>
    <footer class="footer">
      <div class="foot-content">
              <div class="mcu"> 
                  <a href="javascript:void(0)"><h4>MICRO CONTROLLERS</h4></a>
                  <a href="javascript:void(0)">8051</a>
                  <a href="javascript:void(0)">ATMEL</a>
                  <a href="javascript:void(0)">PIC</a>
                  <a href="javascript:void(0)">ARM</a>
                  <a href="javascript:void(0)">MCP</a>
              </div>

              <div class="rtos"> 
                  <a href="javascript:void(0)"><h4>FREE RTOS</h4></a>
                  <a href="javascript:void(0)">Porject Managment</a>
                  <a href="javascript:void(0)">Heap Managment</a>
                  <a href="javascript:void(0)">Task Managment</a>
                  <a href="javascript:void(0)">Queue Managment</a>
                  <a href="javascript:void(0)">Timer Management</a>
                  <a href="javascript:void(0)">Interrupt Managment</a>
                  <a href="javascript:void(0)">Resource management</a>
                  <a href="javascript:void(0)">Event Group</a>
                  <a href="javascript:void(0)">Porting</a>
              </div>

              <div class="linux"> 
                  <a href="javascript:void(0)"><h4>LINUX</h4></a>
                  <a href="javascript:void(0)">Shell Scripting</a>
                  <a href="javascript:void(0)">IPC</a>
                  <a href="javascript:void(0)">Socket</a>
                  <a href="javascript:void(0)">Memory</a>
                  <a href="javascript:void(0)">Process</a>
                  <a href="javascript:void(0)">Device Drivers</a>
              </div>

              <div class="qt"> 
                  <a href="javascript:void(0)"><h4>QT Framework</h4></a>
                  <a href="javascript:void(0)">Basics</a>
                  <a href="javascript:void(0)">App Development</a>
                 </div>
      </div>
     

     <div class="contacts"> 
      <h4>contact@embeddedweb.in</h4>
      <h4>All Rights@ Reserved </h4>
      <a href="javascript:void(0)"><a href="#"> <i class="fa fa-youtube"></i></a>
      <a href="javascript:void(0)"><a href="#"> <i class="fa fa-twitter"></i></a>
      <a href="javascript:void(0)"><a href="#"> <i class="fa fa-linkedin"></i></a>
     </div>
    
  </footer> 
  </body>
  </html>
