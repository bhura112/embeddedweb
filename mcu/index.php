<?php 
   require_once $_SERVER['DOCUMENT_ROOT']."/database/dataHandler.php";
   GetMain(1);
   GetHeadData(1);
   GetBodyData(1);
   GetfootData(1);
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
     <script src="script.js"></script>
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
            <span class="material-icons-outlined">memory</span>
            </div>
            <div class="col-2">
                <h1><?php  echo $mainData['topic']; ?></h1>
                <p> Microcontroller is a small computer on a single metal-oxide-semiconductor (MOS) integrated circuit (IC) chip. 
                 A microcontroller contains one or more CPUs (processor cores) along with memory and programmable input/output peripherals. 
             <br><br> Microcontrollers are designed for embedded applications, in contrast to the microprocessors used in personal computers or other general 
                 purpose applications consisting of various discrete chips.</p>
            </div>
        </div>
        <div class="row-3"></div>
    </div>
           
    <div class="body-cards-div">
          <a class="card card-background-1" href="atmel/">
                <div class="head">
                  <img src="../../global/icon-mcu.png" alt="" srcset="">
                </div>
                <div class="body">
                  <h2 class="txt-center">ATMEL</h2>
                </div>
                <div class="foot">
                  <h4>Learn  <i class="fa fa-1x fa-arrow-right"></i></h4>
                </div>
              </a>

              <a class="card card-background-2" href="microchip/">
                <div class="head">
                  <img src="../../global/icon-mcu.png" alt="" srcset="">
                </div>
                <div class="body">
                  <h2 class="txt-center">MICROCHIP</h2>
                </div>
                <div class="foot">
                  <h4>Learn  <i class="fa fa-1x fa-arrow-right"></i></h4>
                </div>
              </a>

              <a class="card card-background-3" href="amr/">
                <div class="head">
                  <img src="../../global/icon-mcu.png" alt="" srcset="">
                </div>
                <div class="body">
                  <h2 class="txt-center">ARM</h2>
                </div>
                <div class="foot">
                  <h4>Learn  <i class="fa fa-1x fa-arrow-right"></i></h4>
                </div>
              </a>
     </div>
  
  <div class="page-content">
       <div class="table-icon" id="MO-icon" onclick="onMOClicked()">
         <i class="material-icons-outlined menu-open-icon">menu_open</i>
       </div>

       <div id= "table-container" class="table-content-container">
        <div class="table">
            <div class="table-header">
                 
            </div>
            <div id="MO-table" class="table-body">
                     <h3 > <a href="#Introduction">Introduction </a></h3>
                     <h3 > <a href="#Architectures">Architectures </a></h3>
                     <h3 > <a href="#Packaging">Packaging </a></h3>
                     <h3 > <a href="#Memory">Memory </a> </h3>
                     <h3 > <a href="#IO">Input/Output</a> </h3>
                     <h3 > <a href="#Timer">Timer/Counter </a> </h3>
                     <h3 > <a href="#Uart">Uart/Usart</a> </h3>
                     <h3 > <a href="#Spi">SPI </a> </h3>
                     <h3 > <a href="#i2c">I2C </a> </h3>
            </div>
            <div class="table-body">
               
            </div>
        </div>
       </div>

       <div class="content-container">

         <div id="Introduction" class="content">
            <div class="container">
              <h1>SOC(Small Of Computers)</h1>
                 <p>A Microcontroller is a VLSI (Very Large Scale Integration) Integrated Circuit (IC) that contains electronic computing unit and logic unit (combinedly known as CPU), Memory (Program Memory and Data Memory), I/O Ports (Input / Output Ports) and few other components integrated on a single chip.</p>
                 <p>Microcontrollers are omnipresent. If a device or an application involves measuring, storing, calculating, controlling or displaying information, then device contains a Microcontroller in it. Let us see some of the areas where microcontrollers are used.</p>
                 <p>The biggest user of Microcontrollers is probably the Automobiles Industry. Almost every car that comes out of the assembly factory contains at least one Microcontroller for the purpose of engine control. You can find many more Microcontrollers for controlling additional systems.</p>
                 <p> Microcontrollers are similar to Microprocessors, but they have few additional components on the same chip.</p>
              
              <figure class="fig-sim"> 
              <img class="img-center" src="img/harvard.png" alt="" srcset="">
                 
                <figcaption> Micro Controllers</figcaption>
              </figure>
            
            </div>
            <hr>
          </div>
       

          <div id="Architectures" class="content">
            <div class="container">
              <h1>Architectures</h1>
              <h4>Type Of Micro Controller Architectures</h4>
              <h3>Von Neumann Architecture</h3>
              <p>This type of architecture has common Memory for storage of data and programs.</h4>
             
              <figure class="fig-sim">
              <img src="img/von.png" alt="">
                <figcaption>Von Neumann Architecture</figcaption>
              </figure>
              <p>The heart of the von Neumann computer architecture is the Central Processing Unit (CPU), consisting of the control unit and the ALU (Arithmetic and Logic Unit). The CPU interacts with a
                            memory and an input/output (I/O) subsystem and executes a stream of instructions (the computer
                            program) that process the data stored in memory and perform I/O operations. The key concept
                            of the von Neumann architecture is that data and instructions are stored in the memory system in exactly the same way.</p>
                       <h3 class="fa fa-2x">Harvard Architecture</h3>
                       <p>This architecture has separate Memory units for Program and Data Storage and separate Busses for transfer of data and instructions.</p>
                      
                       <figure class="fig-sim">
                         <img src="img/harvard.png" alt="">
                         <figcaption>Harvard Architecture</figcaption>
                       </figure>
                       <p>Harvard architecture is a type of computer architecture that separates its memory into two parts so
                            data and instructions are stored separately. The architecture also has separate buses for data
                            transfers and instruction fetches. This allows the CPU to fetch data and instructions at the same time.</p>
                      
            </div>
            <hr>
          </div>


          <div id="Packaging" class="content">
            <div class="container">
              <h1>Packaging</h1>
              <p>IC (Integrated Circuit) is one of the most important electronic components, due to the complex functions and uses involved, there are many types of ICs. In order to facilitate the management, IC chips were defined as various standard packages.</p>
              <img src="img/pack.svg" alt="" srcset="">

                       <p>IC packaging indicates the dimension and shape of a chip. Chips with the same electronic parameters may have different IC packages. IC package types are mainly divided into traditional DIP dual-in-line and SMD chip package, they are soldered by different methods (Wave soldering & Reflow soldering).</p>
                       
                        <h3>DIP (Double In-line Package)</h3>
                        <p>The leads are led out from both sides of the body, the materials include plastic and ceramic. DIP applications include standard logic ICs, memory LSIs, and microcomputer circuits.
                        </p>
                        <img src="img/dip.svg" alt="" srcset="">
                        <p>The pin pitch of DIP is typically 15.2mm. Some packages with widths of 7.52mm and 10.16mm are called skinny DIP and slim DIP (narrow-body DIP). However, in most cases, it is not differentiated and is simply referred to as DIP.
                        </p>   
                        
                        <h3>SOP/SOIC/SO (Small Outline Package)</h3>
                        <p>The pins are drawn in an L shape from both sides of the body, the materials include plastic and ceramic. In addition to being used for memory LSI, SOP is also widely used in circuits such as ASSP that is not too large. The pin pitch is 1.27mm and the number of pins is from 8 to 44.</p>
                        <img src="img/sop.svg" alt="" srcset="">

                        <p>SOP derives some more IC packaging types, as follows:</p>

                        <p><i>SOJ (Small Out-Line J-Leaded Package)</i>: J-lead small outline package</p>

                        <p><i>TSOP (Thin Small Outline Package)</i>: This IC packaging is thinner than SOP with a pin pitch of 1.27mm</p>

                        <p><i>SSOP (Shrink Small Outline Package)</i>: Pin pitch is 0.635mm</p>

                        <p><i>TSSOP (Thin Shrink Small Outline Package)</i>: This IC package type is thinner than SOP with a pitch of 0.65mm</p>

                        <p><i>QSOP (Quarter-size Small Outline Package)</i>: Pin pitch is 0.635 mm</p>

                        <p> <i>VSOP (Very Small Outline Package)</i>: It is smaller than QSOP and has a pitch of 0.4, 0.5 or 0.65 mm</p>
                        <h3 >QFP (Quad Flat Package)</h3>
                        <p>The leads are led out from four sides in an L-shape, the materials are ceramic, metal and plastic, among which, plastic packaging accounts for the vast majority.
                        </p>
                        <p>The pin pitches include 1.0mm, 0.8mm, 0.65mm, 0.5mm, 0.4mm, 0.3mm and other specifications. The maximum number of pins of 0.65mm package is 304.
                        </p>
                        <img src="img/qfp.svg" alt="" srcset="">
                        <p>Depending on the thickness of the package body, QFP currently has the following variants:
                        </p>
                        <p>LQFP (Flat Quad Flat Pack): The height of the IC packaging body is 1.4 mm</p>

                        <p>TQFP (Thin Quad Flat Pack): Height is 1.0mm</p>

                        <p>PQFP (Plastic Quad Flat Package): PQFP package has a small pitch and a very small pin. Generally, large-scale or very large-scale integrated circuits use this IC packaging, and the pin count is generally above 100
                        </p>
                        <p>CQFP (Ceramic Quare Flat Package): Ceramic version of PQFP</p>

                        <p>BQFP (Quad Flat Package with Bumper): This package has protrusions (cushions) at the four corners to prevent bending deformation of the pins during shipping. The pin pitch is 0.635mm, and the number of pins is from 84 to 196
                        </p>
                        

                        <h3>QFN/LCC (Quad Flat Non-leaded Package)</h3>
                        

                        <p>The four sides of this IC packaging are equipped with electrode contacts. Due to the absence of leads, the mounting area is smaller than QFP and the height is lower than QFP.
                        </p>
                        <p>The number of electrode contacts is generally from 14 to 100, the materials are ceramic and plastic. When there is an LCC mark, it is basically a ceramic QFN, of which the spacing of electrode contacts is 1.27 mm.
                        </p>
                        <img src="img/qfn.svg" alt="" srcset="">
                        <p>Plastic QFN has different pin pitches of 0.65mm, 0.5mm, and 1.27mm, this package is also known as PLCC.</p>


                        

                        <h3>BGA (Ball Grid Array Package)</h3>
                        

                        <p>Spherical bumps are formed on the back surface of the printed substrate to replace the lead, and the LSI chip is mounted on the front surface of the PCB board, and then sealed by a molding resin or a potting method, the pins can exceed 200.
                        </p>
                        <p> The package body can be made smaller than QFP and the BGA does not have to worry about pin deformation problems like QFP.
                        </p>
                        <img src="img/bga.svg" alt="" srcset="">
                        <p>The BGA package currently has the following variations:</p>

                        <p>CBGA (Ceramic BGA)</p>

                        <p>FBGA (Fine BGA)</p>

                        <p>LBGA (Low-profile BGA)</p>

                        <p>LFBGA (Low-profile Fine-pitch BGA)</p>

                        <p>MBGA (Micro Ball Grid Array)</p>

                        <p>MAPBGA (Moulded Array Process BGA)</p>

                        <p>PBGA (Plastic BGA)</p>

                        <p>TBGA (Tape BGA)</p>

                        <p>TEPBGA (Thermally Enhanced Plastic BGA)</p>

                        <p>UBGA (Ultra Fine BGA)</p>

                        <p>...</p>
                         <h3>CSP (Chip Scale Package)</h3>

                        <p>This IC packaging can reach close to 1:1 ratio of chip area to package. The absolute size is only 32 square millimeters, which is about 1/3 of the ordinary BGA, 1/6 of the chip area of TSOP memory. Compared to the BGA, the CSP package in the same space can increase the storage capacity by three times.
                        </p>
                        <img src="img/csp.svg" alt="" srcset="">
                        <p>CSP is just an IC packaging standard, every package type than reach this ratio can be called CSP. Whether a PCB assembly house is able to deal with the CSP IC packaging or not reflects its assembly capabilities.
                        </p>
            </div>
            <hr>
          </div>


          <div id="Memory" class="content">
            <div class="container">
              <h1>Memory</h1>
              <p>Microcontrollers/Microprocessors are producted, essentially, with three types of memories:</p>
              <h3> Flash memory </h3>
              <p>Flash memory is ‘non-volatile’, which means that when the power is shut off, the contents of the memory are NOT lost. Flash memory is used to store the program. Flash memory can be write a lot of times (see Endurance parameter in datasheet), so it is possibile to update the microcontroller program without hardware replacements. However, do not use flash memory to store program variables because lifetime of memory will decrease very very rapidly.
              </p>
                        

                    <h3> RAM memory</h3>
                      <p>RAM (Random-Access-Memory) is ‘volatile’, which means that when the power is shut off, the contents of the memory are lost. RAM memory is used to store the variables during program execution.  RAM memory offers fast read access times. There are several types of RAM memory (SRAM, DRAM, etc.).
                      </p>
                        

                    <h3> EEPROM memory</h3>
                        <p>EEPROM (Electrically Erasable Programmable Read Only Memory) is ‘non-volatile’. EEPROM memory offers slow response times both in reading and writing operations. It’s used to permanently store data like device parameters, sensors data, etc.</p>
               
                        <figure class="fig-sim"> 
                <img src="img/bga.svg" alt="" srcset="">
                <figcaption> Micro Controllers</figcaption>
              </figure>
            </div>
            <hr>
          </div>  

          <div id="IO" class="content">
            <div class="container">
              <h1>Input/Output</h1>
              
              <p>A micro-controller communicates with the outside world by either setting the voltage on a pin high or low or by reading the TTL-voltage level of an input pin as being either high (1) or low (0).</p>
              <p>We refer to these as input/output or IO pins.</p>
              <p>These ports serve as either inputs or outputs for the micro-controller (hence the name IO port). At a given time, however, a pin can only act as either input or output. This means that each pin has a distinct direction state.</p>
              
              <figure class="fig-sim"> 
                <img src="img/io.svg" alt="" srcset="">
                <figcaption> Micro Controllers</figcaption>
              </figure>

              <p>The programmer can control a pin's direction state by setting an appropriate bit in a direction register.</p>
              <p>The programmer can control a pin's logic state by setting an appropriate bit in a write register.</p>
              <p>The programmer can read a pin's logic state by getting an appropriate bit from a read register.</p>
              
              <h3> Data Direction Register</h3>
              <p>DDR decides whether the pins of a port are input pins or output pins</p>
              <p>If the pin is input, then the voltage at that pin is undecided until an external voltage is applied.</p>
              <p>If the pin is output, then the voltage at that pin is fixed to a particular value (5V or 0).</p>
              <h3> Data Read/Write Register</h3>
              <p>The bits on the PORT register correspond to the pins of the associated port in the same manner as in the case of the DDR register.</p>
              <p>PORT is used to set the output value.</p>
              <p>If the pin is set as output, then a PORT value of 1 will set voltage at that pin to 5V. If PORT value is 0, then voltage is set to 0.</p>


            </div>
            <hr>
          </div>  
        

          <div id="Timer" class="content">
            <div class="container">
              <h1>Timer/Counter</h1>
                <p>We use timers every day - the simplest one can be found on your wrist. </p>
                <p> A simple clock will time the seconds, minutes and hours elapsed in a given day - or in the case of a twelve hour clock, since the
                       last half-day. AVR timers do a similar job, measuring a given time interval.</p>

                <h3>Timer</h3> 
                <figure class="fig-sim"> 
                <img class="img-center" src="img/timer.gif" alt="" srcset="">
                  <figcaption> Timer Block Diagram</figcaption>
                </figure>
                <p>is a specialized type of clock which is used to measure time intervals. </p> 
                <p> A timer that counts from zero upwards for measuring time elapsed is often called a stopwatch. </p> 
                <p> It is a device that counts down from a specified time interval and used to generate a time delay, for example, an hourglass is a timer.</p> 
                <h3>Counter</h3> 
                <figure class="fig-sim"> 
                <img class="img-center" src="img/timer.gif" alt="" srcset="">
                  <figcaption> Counter Block Diagram</figcaption>
                </figure>
                <p> is a device that stores the number of times a particular event or process occurred, with respect to a clock signal.</p>
                <p>It is used to count the events happening outside the microcontroller. </p>
                <p>In electronics, counters can be implemented quite easily using register-type circuits such as a flip-flop.</p>
            </div>
            <hr>
          </div>


          <div id="Uart" class="content">
            <div class="container">
              <h1>UART/USART</h1>
              <h3>USART</h3>
              <p>USART (Universal Synchronous/Asynchronous Receiver/Transmitter) is a coordinated circuit which is appended to different specialized gadgets. 
              <figure class="fig-sim"> 
                <img class="img-center" src="img/timer.gif" alt="" srcset="">
                  <figcaption> USART Block Diagram</figcaption>
              </figure>
              <p>These are fit for changing the parallel information in the sequential structure.The information pace of USART is commonly high since it creates clock data or information. </p>
              <p>USART is fit for directing the entire procedure in the switch request where sequential information is infused, and the parallel type of the information is created accordingly. 
              <p>In USART, receiver doesn’t have to know the baud-pace of the transmitter as it is gotten from the information line gave by the master and the clock signal. In USART, a clock is generated by sending peripheral that is received by receiving peripheral that can be retrieved from the data stream without knowing the baud pace over time.</p>
              <h3>UART</h3>
              <p>UART (Universal asynchronous receiver/transmitter) is a large-scale integration gadget offbeat is planned to deal with the transmission of sequential information. </p>
              <figure class="fig-sim"> 
                <img class="img-center" src="img/timer.gif" alt="" srcset="">
                  <figcaption> UART Block Diagram</figcaption>
                </figure>
              <p>It(UART) lies at the center between frameworks that deal with information in a parallel structure and gadgets that handle information in an offbeat sequential structure.</p>
              <p> UART provides lower data transfer speed as compared to USART. There is no approaching clock signal that is related with the information, so the recipient has to know baud-pace of the transmitter before the inception of gathering.</p>
              <p> In UART, data clock is generated internally into the microcontroller and synchronized with the data stream using a start bit transition.</p>
              
            </div>
            <hr>
          </div>


          <div id="Spi" class="content">
            <div class="container">
              <h1>SPI (Serial Pheriperial Interface)</h1>
              <p>Serial peripheral interface (SPI) is one of the most widely used interfaces between microcontroller and peripheral ICs such as sensors, ADCs, DACs, shift registers, SRAM, and others.</p>
              <p>SPI is a synchronous, full duplex master-slave-based interface. The data from the master or the slave is synchronized on the rising or falling clock edge.</p> 
              <p>Both master and slave can transmit data at the same time. The SPI interface can be either 3-wire or 4-wire. This article focuses on the popular 4-wire SPI interface.</p>  
              <p>4-wire SPI devices have four signals:</p>
              <figure class="fig-sim"> 
              <img src="img/spi.png" alt="" srcset="">
                  <figcaption> UART Block Diagram</figcaption>
                </figure>
              <p>Clock (SPI CLK, SCLK)
              <p>Chip select (CS)
              <p>Master out, slave in (MOSI)
              <p>Master in, slave out (MISO)
              <p>The device that generates the clock signal is called the master.</p> 
              <p>Data transmitted between the master and the slave is synchronized to the clock generated by the master. </p>
              <p>SPI devices support much higher clock frequencies compared to I2C interfaces. Users should consult the product data sheet for the clock frequency specification of the SPI interface.</p>
            </div>
            <hr>
          </div>

          <div id="I2C" class="content">
            <div class="container">
              <h1>I2C or TWI</h1>
              <p>I2C stands for Inter-Integrated Circuit. It is a bus interface connection protocol incorporated into devices for serial communication.</p>
                  <p>The I2C bus was designed by Philips in the early ’80s to allow easy communication between components which reside on the same circuit board. Philips Semiconductors migrated to NXP in 2006.</p>
                  <p> <strong>SDA (Serial Data) </strong>– The line for the master and slave to send and receive data.</p>
                  <p> <strong>SCL (Serial Clock) </strong>– The line that carries the clock signal.</p>
               
              <figure class="fig-sim"> 
                <img class="img-center" src="img/timer.gif" alt="" srcset="">
                  <figcaption> UART Block Diagram</figcaption>
                </figure>
            </div>
            <hr>
          </div>


          <div id="IO" class="content">
            <div class="container">
              <h1>Input/Output</h1>
              
              <figure class="fig-sim"> 
                <img class="img-center" src="img/timer.gif" alt="" srcset="">
                  <figcaption> UART Block Diagram</figcaption>
                </figure>
            </div>
            <hr>
          </div>


          <div id="IO" class="content">
            <div class="container">
              <h1>Input/Output</h1>
              
              <figure class="fig-sim"> 
                <img class="img-center" src="img/timer.gif" alt="" srcset="">
                  <figcaption> UART Block Diagram</figcaption>
                </figure>
            </div>
            <hr>
          </div>
       </div>
   </div>
    <?php include_once $_SERVER['DOCUMENT_ROOT']."/global/foot.php"; ?>
  </body>
</html>
