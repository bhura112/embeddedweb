<?php 
   
   require_once '../database/connection.php';
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
        }
        $result -> free_result();
    }

    $db->g_conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://gitcdn.link/repo/bhura112/embeddedweb/main/global/headerScript.js"></script>
    <script src="https://gitcdn.link/repo/bhura112/embeddedweb/main/global/footerScript.js"></script>
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bhura112/embeddedweb@master/global/style.css">

    <link rel = "icon" href = "https://www.embeddedweb.in/global/logo.png?i=1" type="image/x-icon">

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
              <li class="active"><a href=".">MICRO CONTROLLER</a></li>
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
        <section class="top-section">
          <div class="content">
            <picture>
              <img src="../img/flip-card-front.svg">
            </picture>
            <div class="content-col">
              <h2 class="center-me"><?php  echo $rowobj->page_topic; ?></h2>
         
              <h4> 
                 Microcontroller is a small computer on a single metal-oxide-semiconductor (MOS) integrated circuit (IC) chip. 
                 A microcontroller contains one or more CPUs (processor cores) along with memory and programmable input/output peripherals. 
              </h4>

              <h4>
                 Microcontrollers are designed for embedded applications, in contrast to the microprocessors used in personal computers or other general 
                 purpose applications consisting of various discrete chips.
               </h4>
            </div>
          </div>
        </section> 
        
        <section class="top-section-subsec">
          <div class="card-sec">
               <a href="atmel/"> 
                  <div class="atmellogo">
                    <p><img src="img/atmellogo.svg" style="width:80%;"></p>
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

               <a href="microchip/"> 
                  <div class="mchiplogo">
                    <p><img src="img/microchiplogo.svg" style="width:80%;"> </p> 
                    <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div> 
                  </div> 
                </a>

               <a href="arm/"> 
                  <div class="armlogo">
                   <p><img src="img/armlogo.svg" style="width:80%;"> </p>
                   <div class="container">
                      <h5> Learn <i class="fa fa-arrow-right "></i></h5>
                    </div>  
                  </div> 
                </a>
                </div>
        </section>

        <section class="page-container">
          <div class="topics">
            <div class="table-of-content">
              <h3>Table Index</h3>
              <a href="#architecture">Architectures</a>
              <a href="#packaging">Packaging</a>
              <a href="#mem">Memory </a>
              <a href="#io">Input/Output </a>
              <a href="#timer">Timer/Counter</a>
              <a href="#uart" >Uart</a>
              <a href="#spi">SPI</a>
              <a href="#i2c">I2C </a>
            </div>
            <div class="table-topic">
              <div class="description">   
                <p>A Microcontroller is a VLSI (Very Large Scale Integration) Integrated Circuit (IC) that contains electronic computing unit and logic unit (combinedly known as CPU), Memory (Program Memory and Data Memory), I/O Ports (Input / Output Ports) and few other components integrated on a single chip.</p>
                 <img class="img-center" src="img/mcu.svg" alt="" srcset="">
                 <p>Microcontrollers are omnipresent. If a device or an application involves measuring, storing, calculating, controlling or displaying information, then device contains a Microcontroller in it. Let us see some of the areas where microcontrollers are used.</p>
                 <p>The biggest user of Microcontrollers is probably the Automobiles Industry. Almost every car that comes out of the assembly factory contains at least one Microcontroller for the purpose of engine control. You can find many more Microcontrollers for controlling additional systems.</p>
                 <p> Microcontrollers are similar to Microprocessors, but they have few additional components on the same chip.</p>
              </div>
             
              <!------------------------------------------------------------------------------------------------ -->
              <div id="architecture" class="table-topic-container jumptarget">
                     <div class="container-body">
                       <h2>Architectures</h2>
                       <img src="img/arch.svg" alt="" srcset="">
                       <h5 class="fa fa-2x">Von Neumann Architecture</h5>
                       <h4>This type of architecture has common Memory for storage of data and programs.</h4>
                       <img src="img/von.png" alt="">
                        <h4>The heart of the von Neumann computer architecture is the Central Processing Unit (CPU), consisting of the control unit and the ALU (Arithmetic and Logic Unit). The CPU interacts with a
                            memory and an input/output (I/O) subsystem and executes a stream of instructions (the computer
                            program) that process the data stored in memory and perform I/O operations. The key concept
                            of the von Neumann architecture is that data and instructions are stored in the memory system in exactly the same way.</h4>
                       <h5 class="fa fa-2x">Harvard Architecture</h5>
                       <h4>This architecture has separate Memory units for Program and Data Storage and separate Busses for transfer of data and instructions.</h4>
                       <img src="img/harvard.png" alt="">
                       <h4>Harvard architecture is a type of computer architecture that separates its memory into two parts so
                            data and instructions are stored separately. The architecture also has separate buses for data
                            transfers and instruction fetches. This allows the CPU to fetch data and instructions at the same time.</h4>
                      </div>
              </div>
              <div id="packaging" class="table-topic-container jumptarget">
                     <div class="container-body">
                       <h2>Packaging</h2>
                       <h4>IC (Integrated Circuit) is one of the most important electronic components, due to the complex functions and uses involved, there are many types of ICs. In order to facilitate the management, IC chips were defined as various standard packages.</h4>

                       <img src="img/pack.svg" alt="" srcset="">

                       <h4>IC packaging indicates the dimension and shape of a chip. Chips with the same electronic parameters may have different IC packages. IC package types are mainly divided into traditional DIP dual-in-line and SMD chip package, they are soldered by different methods (Wave soldering & Reflow soldering).</h4>
                       
                       <!----------------- -->
                        <h5 class="fa fa-2x">DIP (Double In-line Package)</h5>
                        <h4>The leads are led out from both sides of the body, the materials include plastic and ceramic. DIP applications include standard logic ICs, memory LSIs, and microcomputer circuits.
                        </h4>
                        <img src="img/dip.svg" alt="" srcset="">
                        <h4>The pin pitch of DIP is typically 15.2mm. Some packages with widths of 7.52mm and 10.16mm are called skinny DIP and slim DIP (narrow-body DIP). However, in most cases, it is not differentiated and is simply referred to as DIP.
                        </h4>   
                        
                        <h5 class="fa fa-2x">SOP/SOIC/SO (Small Outline Package)</h5>
                        <h4>The pins are drawn in an L shape from both sides of the body, the materials include plastic and ceramic. In addition to being used for memory LSI, SOP is also widely used in circuits such as ASSP that is not too large. The pin pitch is 1.27mm and the number of pins is from 8 to 44.</h4>
                        <img src="img/sop.svg" alt="" srcset="">

                        <h5>SOP derives some more IC packaging types, as follows:</h5>

                        <h5>SOJ (Small Out-Line J-Leaded Package): J-lead small outline package</h5>

                        <h5>TSOP (Thin Small Outline Package): This IC packaging is thinner than SOP with a pin pitch of 1.27mm</h5>

                        <h5>SSOP (Shrink Small Outline Package): Pin pitch is 0.635mm</h5>

                        <h5>TSSOP (Thin Shrink Small Outline Package): This IC package type is thinner than SOP with a pitch of 0.65mm</h5>

                        <h5>QSOP (Quarter-size Small Outline Package): Pin pitch is 0.635 mm</h5>

                        <h5>VSOP (Very Small Outline Package): It is smaller than QSOP and has a pitch of 0.4, 0.5 or 0.65 mm</h5>
<!-------------------------------------------------------------------------  -->
                        <h5 class="fa fa-2x">QFP (Quad Flat Package)</h5>
                        <h4>The leads are led out from four sides in an L-shape, the materials are ceramic, metal and plastic, among which, plastic packaging accounts for the vast majority.
                        </h4>
                        <h4>The pin pitches include 1.0mm, 0.8mm, 0.65mm, 0.5mm, 0.4mm, 0.3mm and other specifications. The maximum number of pins of 0.65mm package is 304.
                        </h4>
                        <img src="img/qfp.svg" alt="" srcset="">
                        <h4>Depending on the thickness of the package body, QFP currently has the following variants:
                        </h4>
                        <h5>LQFP (Flat Quad Flat Pack): The height of the IC packaging body is 1.4 mm</h5>

                        <h5>TQFP (Thin Quad Flat Pack): Height is 1.0mm</h5>

                        <h5>PQFP (Plastic Quad Flat Package): PQFP package has a small pitch and a very small pin. Generally, large-scale or very large-scale integrated circuits use this IC packaging, and the pin count is generally above 100
                        </h5>
                        <h5>CQFP (Ceramic Quare Flat Package): Ceramic version of PQFP</h5>

                        <h5>BQFP (Quad Flat Package with Bumper): This package has protrusions (cushions) at the four corners to prevent bending deformation of the pins during shipping. The pin pitch is 0.635mm, and the number of pins is from 84 to 196
                        </h5>
                        

                        <h5 class="fa fa-2x">QFN/LCC (Quad Flat Non-leaded Package)</h5>
                        

                        <h4>The four sides of this IC packaging are equipped with electrode contacts. Due to the absence of leads, the mounting area is smaller than QFP and the height is lower than QFP.
                        </h4>
                        <h4>The number of electrode contacts is generally from 14 to 100, the materials are ceramic and plastic. When there is an LCC mark, it is basically a ceramic QFN, of which the spacing of electrode contacts is 1.27 mm.
                        </h4>
                        <img src="img/qfn.svg" alt="" srcset="">
                        <h4>Plastic QFN has different pin pitches of 0.65mm, 0.5mm, and 1.27mm, this package is also known as PLCC.</h4>


                        

                        <h5 class="fa fa-2x">BGA (Ball Grid Array Package)</h5>
                        

                        <h4>Spherical bumps are formed on the back surface of the printed substrate to replace the lead, and the LSI chip is mounted on the front surface of the PCB board, and then sealed by a molding resin or a potting method, the pins can exceed 200.
                        </h4>
                        <h4> The package body can be made smaller than QFP and the BGA does not have to worry about pin deformation problems like QFP.
                        </h4>
                        <img src="img/bga.svg" alt="" srcset="">
                        <h4>The BGA package currently has the following variations:</h4>

                        <h5>CBGA (Ceramic BGA)</h5>

                        <h5>FBGA (Fine BGA)</h5>

                        <h5>LBGA (Low-profile BGA)</h5>

                        <h5>LFBGA (Low-profile Fine-pitch BGA)</h5>

                        <h5>MBGA (Micro Ball Grid Array)</h5>

                        <h5>MAPBGA (Moulded Array Process BGA)</h5>

                        <h5>PBGA (Plastic BGA)</h5>

                        <h5>TBGA (Tape BGA)</h5>

                        <h5>TEPBGA (Thermally Enhanced Plastic BGA)</h5>

                        <h5>UBGA (Ultra Fine BGA)</h5>

                        <h5>...</h5>
                        <!----------------------------------- -->
                        <h5 class="fa fa-2x">CSP (Chip Scale Package)</h5>

                        <h4>This IC packaging can reach close to 1:1 ratio of chip area to package. The absolute size is only 32 square millimeters, which is about 1/3 of the ordinary BGA, 1/6 of the chip area of TSOP memory. Compared to the BGA, the CSP package in the same space can increase the storage capacity by three times.
                        </h4>
                        <img src="img/csp.svg" alt="" srcset="">
                        <h4>CSP is just an IC packaging standard, every package type than reach this ratio can be called CSP. Whether a PCB assembly house is able to deal with the CSP IC packaging or not reflects its assembly capabilities.
                        </h4>
                      </div>
              </div>

              <div id="mem" class="table-topic-container jumptarget">
                     <div class="container-body">
                     <h2>Memory</h2>
                     <p>Microcontrollers/Microprocessors are producted, essentially, with three types of memories:</p>
                     <h5 class="fa fa-2x"> Flash memory </h5>
                      <h4>Flash memory is ‘non-volatile’, which means that when the power is shut off, the contents of the memory are NOT lost. Flash memory is used to store the program. Flash memory can be write a lot of times (see Endurance parameter in datasheet), so it is possibile to update the microcontroller program without hardware replacements. However, do not use flash memory to store program variables because lifetime of memory will decrease very very rapidly.
                      </h4>
                        

                    <h5 class="fa fa-2x"> RAM memory</h5>
                      <h4>RAM (Random-Access-Memory) is ‘volatile’, which means that when the power is shut off, the contents of the memory are lost. RAM memory is used to store the variables during program execution.  RAM memory offers fast read access times. There are several types of RAM memory (SRAM, DRAM, etc.).
                      </h4>
                        

                    <h5 class="fa fa-2x"> EEPROM memory</h5>
                        <h4>EEPROM (Electrically Erasable Programmable Read Only Memory) is ‘non-volatile’. EEPROM memory offers slow response times both in reading and writing operations. It’s used to permanently store data like device parameters, sensors data, etc.</h4>
                    </div>
              </div>
              <div id="io" class="table-topic-container jumptarget">
                     <div class="container-body">
                      <h2>INPUT/OUPUT PORTS</h2>
                      <h4>A micro-controller communicates with the outside world by either</h4>
                      <h5>setting the voltage on a pin high or low <br>or by reading the TTL-voltage level of an input pin as being either high (1) or low (0).</h5>
                      <h4>We refer to these as input/output or IO pins.</h4>
                      <h4>These ports serve as either inputs or outputs for the micro-controller (hence the name IO port). At a given time, however, a pin can only act as either input or output. This means that each pin has a distinct direction state.</h4>
                      <img src="img/io.svg" alt="" srcset="">
                      <h4>The programmer can control a pin's direction state by setting an appropriate bit in a direction register.</h4>
                      <h4>The programmer can control a pin's logic state by setting an appropriate bit in a write register.</h4>
                      <h4>The programmer can read a pin's logic state by getting an appropriate bit from a read register.</h4>
                      
                      <h5 class="fa fa-2x"> Data Direction Register</h5>
                      <h4>DDR decides whether the pins of a port are input pins or output pins</h4>
                      <h4>If the pin is input, then the voltage at that pin is undecided until an external voltage is applied.</h4>
                      <h4>If the pin is output, then the voltage at that pin is fixed to a particular value (5V or 0).</h4>
                      <h5 class="fa fa-2x"> Data Read/Write Register</h5>
                      <h4>The bits on the PORT register correspond to the pins of the associated port in the same manner as in the case of the DDR register.</h4>
                      <h4>PORT is used to set the output value.</h4>
                      <h4>If the pin is set as output, then a PORT value of 1 will set voltage at that pin to 5V. If PORT value is 0, then voltage is set to 0.</h4>

                    </div>
              </div>
              <div id="timer" class="table-topic-container jumptarget">
                  <div class="container-body">
                  <h2>TIMER/COUNTER</h2>
                  <h4>We use timers every day - the simplest one can be found on your wrist. </h4>
                  <h4> A simple clock will time the seconds, minutes and hours elapsed in a given day - or in the case of a twelve hour clock, since the
                       last half-day. AVR timers do a similar job, measuring a given time interval.</h4>

                       <h5 class="fa fa-2x">Timer</h5> <h4>is a specialized type of clock which is used to measure time intervals. </h4> 
                       <h4> A timer that counts from zero upwards for measuring time elapsed is often called a stopwatch. </h4> 
                       <h4> It is a device that counts down from a specified time interval and used to generate a time delay, for example, an hourglass is a timer.</h4> 
                       <h5 class="fa fa-2x">Counter</h5> <h4> is a device that stores the number of times a particular event or process occurred, with respect to a clock signal.</h4>
                       <h4>It is used to count the events happening outside the microcontroller. </h4>
                       <h4>In electronics, counters can be implemented quite easily using register-type circuits such as a flip-flop.</h4>

                  </div>
              </div>

              <div id="uart" class="table-topic-container jumptarget">
                  <div class="container-body">
                  <h2>UART/USART</h2>
                  <h5 class="fa fa-2x">USART</h5>
                  <h4>USART (Universal Synchronous/Asynchronous Receiver/Transmitter) is a coordinated circuit which is appended to different specialized gadgets. 
                  <h4>These are fit for changing the parallel information in the sequential structure.The information pace of USART is commonly high since it creates clock data or information. </h4>
                  <h4>USART is fit for directing the entire procedure in the switch request where sequential information is infused, and the parallel type of the information is created accordingly. 
                  <h4>In USART, receiver doesn’t have to know the baud-pace of the transmitter as it is gotten from the information line gave by the master and the clock signal. In USART, a clock is generated by sending peripheral that is received by receiving peripheral that can be retrieved from the data stream without knowing the baud pace over time.</h4>
                  <h5 class="fa fa-2x">UART</h5>
                  <h4>UART (Universal asynchronous receiver/transmitter) is a large-scale integration gadget offbeat is planned to deal with the transmission of sequential information. </h4>
                  <h4>It(UART) lies at the center between frameworks that deal with information in a parallel structure and gadgets that handle information in an offbeat sequential structure.</h4>
                  <h4> UART provides lower data transfer speed as compared to USART. There is no approaching clock signal that is related with the information, so the recipient has to know baud-pace of the transmitter before the inception of gathering.</h4>
                  <h4> In UART, data clock is generated internally into the microcontroller and synchronized with the data stream using a start bit transition.</h4>
                  </div>
              </div>

              
              <div id="spi" class="table-topic-container jumptarget">
                  <div class="container-body">
                  <h2>SPI</h2>
                  <h4>Serial peripheral interface (SPI) is one of the most widely used interfaces between microcontroller and peripheral ICs such as sensors, ADCs, DACs, shift registers, SRAM, and others.</h4>
                   <h4>SPI is a synchronous, full duplex master-slave-based interface. The data from the master or the slave is synchronized on the rising or falling clock edge.</h4> 
                   <h4>Both master and slave can transmit data at the same time. The SPI interface can be either 3-wire or 4-wire. This article focuses on the popular 4-wire SPI interface.</h4>  
                   <h5>4-wire SPI devices have four signals:</h5>
                   <img src="img/spi.png" alt="" srcset="">
                   <h5>Clock (SPI CLK, SCLK)
                   <h5>Chip select (CS)
                   <h5>Master out, slave in (MOSI)
                   <h5>Master in, slave out (MISO)
                   <h4>The device that generates the clock signal is called the master.</h4> 
                   <h4>Data transmitted between the master and the slave is synchronized to the clock generated by the master. </h4>
                   <h4>SPI devices support much higher clock frequencies compared to I2C interfaces. Users should consult the product data sheet for the clock frequency specification of the SPI interface.</h4>
                 
                  </div>
              </div>


              
              <div id="i2c" class="table-topic-container jumptarget">
                  <div class="container-body">
                  <h2>I2C/TWI</h2>
                  <h4>I2C stands for Inter-Integrated Circuit. It is a bus interface connection protocol incorporated into devices for serial communication.</h4>
                  <h4>The I2C bus was designed by Philips in the early ’80s to allow easy communication between components which reside on the same circuit board. Philips Semiconductors migrated to NXP in 2006.</h4>
                  <h4>SDA (Serial Data) – The line for the master and slave to send and receive data.</h4>
                  <h4>SCL (Serial Clock) – The line that carries the clock signal.</h4>
                </div>
              </div>
            </div>
         </div>  
        </section>
       <!-- <section class="page-section">

          <div class= "page-content"> 
            <div class="left-page-index">
              <div class="container">
              <h4 class="heading">Table Of Contents</h4>
                  <ul class="pageindex-list">
                    <li><a href="#introduction"><h4>Introduction</h4></a></li>
                    <li><a href="#architecture"><h4>Architecture</h4></a></li>
                    <li><a href="#peripherals"><h4>Peripherals</h4></a></li>
                  </ul>
              </div>
            </div>

            <div class="right-topic-index">

              <div class="topicindex jumptarget" id="introduction"> 
                <div class="container"> 
                  <h4 class="heading">Introduction</h4>
                  <ul class="topicindex-list">
                  <li> <a href="t/index.php?introduction#started">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">Getting Started</div></div>
                    </a></li>

                    <li> <a href="t/index.php?introduction#esys">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">Embedded Systems</div></div>
                    </a></li>

                    <li> <a href="t/index.php?introduction#embeddedc">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">Embedded C</div></div>
                    </a></li>

                    <li> <a href="t/index.php?introduction#microcontroller">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">Micro controller</div></div>
                    </a></li>
                    <li> <a href="t/index.php?introduction#microprocessor">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list eoflist"> </div>
                        </div> <div class="listname">Micro Processor</div></div>
                    </a></li> 
                  </ul>
                </div>  
              </div>

              <div class="topicindex jumptarget" id="architecture">  
                <div class="container">
                    <h4 class="heading">Architecture</h4>
                    <ul class="topic-list">
                    <li> <a href="t/index.php?architechture#vonn">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">VON NEUMAN</div></div>
                    </a></li>  

                    <li> <a href="t/index.php?architechture#harvard">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">HARVARD</div></div>
                    </a></li>  

                    <li> <a href="t/index.php?architechture#risc">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">RISC</div></div>
                    </a></li>  
                    <li> <a href="t/index.php?architechture#cisc">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list eoflist"> </div>
                        </div> <div class="listname">CISC</div></div>
                    </a></li>  
                  
                  </ul>  
                </div>
              </div>

              <div class="topicindex jumptarget" id="peripherals">
                <div class="container">
                  <h4 class="heading">Peripherals</h4>     
                  <ul class="topic-list">
                  <li> <a href="t/index.php?pheriperals#memory">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">MEMORY </div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#mode">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">MODE</div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#gpio">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">GPIO</div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#timer">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">TIMER</div></div>
                    </a></li>
                     <li> <a href="t/index.php?pheriperals#adc">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">ADC</div></div>
                    </a></li> 
                    <li> <a href="t/index.php?pheriperals#dma">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">DMA</div></div>
                    </a></li>  
                    <li> <a href="t/index.php?pheriperals#uart">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">UART</div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#i2c">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">I2C</div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#spi">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">SPI</div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#rtc">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">RTC</div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#usb">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">USB</div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#can">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">CAN</div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#ethernet">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list"> </div>
                        </div> <div class="listname">ETHERNET</div></div>
                    </a></li>
                    <li> <a href="t/index.php?pheriperals#watchdog">
                        <div class="checklist-link-container">
                        <div class="checklist"> 
                          <div class="check">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                          </div>
                          <div class="list eoflist"> </div>
                        </div> <div class="listname">WATCH DOG TIMER</div></div>
                    </a></li>
                    </ul>
                </div>  
              </div>
            </div>
          </div>
          <div class="page-content-data">
                
             
          </div>
        </section>-->
      </main>
    </div>

    
    <div class="page-space"></div>
    <?php include_once '../global/foot.php'; ?>
  </body>
</html>
