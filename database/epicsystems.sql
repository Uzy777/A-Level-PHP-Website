-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2020 at 06:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `EpicSystems`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`) VALUES
(67, 1, 32),
(68, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_section` varchar(200) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_price` double(10,2) DEFAULT NULL,
  `item_image` varchar(255) DEFAULT NULL,
  `item_register` datetime DEFAULT NULL,
  `item_desc` text DEFAULT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_section`, `item_name`, `item_price`, `item_image`, `item_register`, `item_desc`, `deleted`) VALUES
(1, 'Case', 'Bequiet Orange Dark Base Pro 900 Full Tower', 169.00, './assets/case/Bequiet-Orange-Dark-Base-Pro-900-Full.webp', '0000-00-00 00:00:00', 'The be quiet! Dark Base Pro 900 Black rev. 2 is the perfect case for all who expect the highest standards when it comes to modularity, compatibility and design.', 0),
(2, 'Case', 'Corsair 465x Full Tower', 180.00, './assets/case/Corsair-465x-Full.webp', '0000-00-00 00:00:00', 'The CORSAIR iCUE 465X RGB is a mid-tower ATX smart case that offers brilliant visuals showcased by two tempered glass panels. Three included CORSAIR LL120 RGB fans and an iCUE Lighting Node CORE smart RGB lighting controller combine with powerful iCUE software for fully customizable illumination out of the box. Expand your cooling potential with room for up to 6x fans or multiple radiators and a Direct Airflow Path™ layout ensuring obstruction-free airflow to your components. Install up to two 3.5in HDDs and four 2.5in SSDs for the storage you need and keep your system clean and tidy with intuitive built-in cable routing and three removable dust filters.', 0),
(3, 'Case', 'Lian Li V3000WX Full Tower', 119.00, './assets/case/Lianli-v3000wx-Full.webp', '0000-00-00 00:00:00', 'The PC-V3000 from Lian Li is a particularly elegant full tower case compatible with motherboards up to E-ATX in size and it offers countless mounting options for drives, fans and water cooling hardware. The steel chassis with aluminium panels is the first case from Lian Li that can accommodate quad radiators. An LED strip on the front of the housing together with the illuminated logo provides atmospheric RGB lighting. The huge interior provides easy access to hardware components and the large tempered glass side panel presents the attractive interior effectively.', 0),
(4, 'Case', 'MSI Sekira 500x Full Tower', 179.00, './assets/case/Msi-Sekira-500x-Full.webp', '0000-00-00 00:00:00', 'MSI\'s new Flagship case arrives with plenty of ARGB and stylish Brushed Aluminium, whilst Tempered Glass side panels give a clear view of your build. Combine all this with MSI\'s Mystic Light program to truly make the system your own!', 0),
(5, 'Case', 'NZXT H210 Mini ITX', 99.00, './assets/case/Nzxt-h210-Mini.webp', '0000-00-00 00:00:00', 'The NZXT H210 is the successor of the H200. Like its predecessors, the Mini-Tower offers a proven, no-frills design. The mounting mechanism of the tempered glass side panel has been optimized and now requires only one screw at the rear of the case. This gives a cleaner look and the glass is less under tension.', 0),
(6, 'Case', 'Thermaltake Core P3 Full Tower', 199.00, './assets/case/Thermaltake-Core-p3-Full.webp', '0000-00-00 00:00:00', 'Bring out the modder within you. The Core P3 Open Frame chassis sets a new benchmark in groundbreaking open frame chassis design. With full support for liquid cooling – the Core P3 is built from the ground up to make even the most advanced PC customization and modification effortless and hassle free, making it a dream to build with. The open frame panel design is protected with a clear acrylic panel – behind which sits the chassis frame, with supports the latest PC hardware, AIO and DIY liquid cooling solutions. Specially designed dual GPU and PSU layouts, plus a 3-way stand placement (wall mountable, horizontal laying and vertical standing) allow users to position the chassis any orientation – and appreciate your artwork status worthy build.', 0),
(7, 'Motherboard', 'Asus Prime Micro z490', 110.00, './assets/motherboard/Asus-Prime-Micro-z490.webp', '0000-00-00 00:00:00', 'INTEL® Z490 (LGA 1200) MICRO ATX MOTHERBOARD WITH DUAL M.2, 9 DRMOS POWER STAGES, HDMI, DISPLAYPORT, DVI, SATA 6 GBPS, INTEL® 1 GB ETHERNET, USB 3.2 GEN 2 TYPE-A® AND TYPE-C®', 0),
(8, 'Motherboard', 'Asus Prime Threadripper', 300.00, './assets/motherboard/Asus-Prime-Threadripper.webp', '0000-00-00 00:00:00', 'ASUS Prime TRX40-Pro is expertly engineered to unleash the full potential of AMD\'s Ryzen Threadripper CPUs for content creators, designers and for professional use. With access to up to 32 cores, up to 64 PCIe 4.0 lanes, and 280-watt thermal design power, combined with excellent cooling solutions and 16 stage power delivery, the high-end desktop motherboard has the performance and stability needed to turn every creative vision into reality.', 0),
(9, 'Motherboard', 'Asus Prime x570', 179.99, './assets/motherboard/Asus-Prime-x570.webp', '0000-00-00 00:00:00', 'The Asus Prime X570 is equipped to support AMD’s ‘Zen 2’, the 3rd generation of the Ryzen Processor family.The chipset features PCIe Gen 4, giving you plenty of headroom for high speed solid state drives and supported PCIe Gen 4 graphics cards, native USB 3.1 Gen 2 ports and an overall more powerful chipset. The chipset uses active on board cooling, through the use of a mini heatsink and fan, or direct contact heat pipes (dependent on manufacturer), to ensure constant cooling delivering consistent and ultimate performance.', 0),
(10, 'Motherboard', 'Asus Rog Strix B550', 150.99, './assets/motherboard/Asus-Rog-B550.webp', '0000-00-00 00:00:00', 'ROG STRIX B550 GAMING SERIES MOTHERBOARDS OFFER A FEATURE-SET USUALLY FOUND IN THE HIGHER-END ROG STRIX X570 GAMING SERIES, INCLUDING THE LATEST PCIE® 4.0. WITH ROBUST POWER DELIVERY AND EFFECTIVE COOLING, ROG STRIX B550 GAMING IS WELL-EQUIPPED TO HANDLE 3RD GEN AMD RYZEN™ CPUS. BOASTING FUTURISTIC AESTHETICS AND INTUITIVE ROG SOFTWARE, ROG STRIX B550-E GAMING GIVES YOU A HEAD START ON YOUR DREAM BUILD..', 0),
(11, 'Motherboard', 'Asus Rog Strix z490', 160.00, './assets/motherboard/Asus-Rog-Micro-z490.webp', '0000-00-00 00:00:00', 'INTEL® Z490 LGA 1200 MICRO ATX GAMING MOTHERBOARD FEATURING 14 POWER STAGES, DDR4 4600, AI OVERCLOCKING, AI COOLING, AI NETWORKING, WIFI 6 (802.11AX), INTEL® 2.5 GB ETHERNET, USB 3.2 GEN 2, SATA AND AURA SYNC RGB LIGHTING', 0),
(12, 'Motherboard', 'Asus Rog Strix Mini ITX x570', 179.89, './assets/motherboard/Asus-Rog-Mini-x570.webp', '0000-00-00 00:00:00', 'The Asus ROG Strix X570-I Gaming rises above the rest to deliver incredible power for your small form factor gaming build. With support for the latest AMD Ryzen processors, ROG Strix X570-I Gaming is primed to deliver maximum gaming performance, utilising HDMI 2.0 and DisplayPort 1.4 allowing for high-resolution video output, as well as fast data transfer through WIFI 6 and PCIe 4.0.', 0),
(13, 'Motherboard', 'MSI Gaming Plus x470', 140.00, './assets/motherboard/Msi-x470.webp', '0000-00-00 00:00:00', 'The B450 chipset forms the centrepiece of the MSI B450 Gaming Plus AC motherboard and has been specially developed and optimised for 2000- series (Pinnacle Ridge) Ryzen CPUs. B450 motherboards support all features of 2nd gen Ryzen processors, such as the AMD\'s new XFR2 overclocking. Additionally, the motherboards support up to 64 GB of RAM with a guaranteed clock frequency of 2.933 MHz. Overclocking to higher frequencies is also an option, although the increase will depend on the motherboard.', 0),
(14, 'Motherboard', 'MSI APRO x570', 129.78, './assets/motherboard/Msi-x570.webp', '0000-00-00 00:00:00', 'Supports 2nd and 3rd Gen AMD Ryzen™ / Ryzen™ 4000 G-Series / Ryzen™ with Radeon™ Vega Graphics and 2nd Gen AMD Ryzen™ with Radeon™ Graphics Desktop Processors for AM4 socket', 0),
(15, 'Motherboard', 'MSI Tomahawk z490', 143.00, './assets/motherboard/Msi-z490.webp', '0000-00-00 00:00:00', 'Supports 10th Gen Intel® Core™ / Pentium® Celeron® processors for LGA 1200 socket', 0),
(16, 'Motherboard', 'Aorus Mini x570', 162.00, './assets/motherboard/Aorus-Mini-x570.webp', '0000-00-00 00:00:00', 'The Gigabyte X570 AORUS ELITE is equipped to support AMD’s ‘Zen 2’, the 3rd generation of the Ryzen Processor family.The chipset features PCIe Gen 4, giving you plenty of headroom for high speed solid state drives and supported PCIe Gen 4 graphics cards, native USB 3.1 Gen 2 ports and an overall more powerful chipset. The chipset uses active on board cooling, through the use of a mini heatsink and fan, or direct contact heat pipes (dependent on manufacturer), to ensure constant cooling delivering consistent and ultimate performance.', 0),
(17, 'CPU', 'Ryzen Threadripper 3960x', 875.99, './assets/cpu/Ryzen-Threadripper-3960x.webp', '0000-00-00 00:00:00', 'Introducing the 3rd Generation AMD Ryzen™ Threadripper 3960X processor, featuring 24-cores and 48-threads of unrelenting performance to help dominate every task you throw at it. Threadripper is the king of everything, gaming, video editoring, streaming, multi-tasking, 3D rendering, movie creation, server task, literally anything you can think of these processors will absolutely blitz through it.', 0),
(18, 'CPU', 'Ryzen 7 3700x', 240.00, './assets/cpu/Ryzen-7-3700x.webp', '0000-00-00 00:00:00', '3rd Gen AMD Ryzen processors feature support for the world’s first PCIe® 4.0 connectivity, to enable the most advanced motherboards, graphics, and storage technologies available. The 3rd Gen AMD Ryzen™ processors are also backwards compatible with previous generations of motherboards, offering unprecedented value and uncompromising performance.', 0),
(19, 'CPU', 'Ryzen 5 3400G', 199.99, './assets/cpu/Ryzen-5-3400g.jpg', '0000-00-00 00:00:00', 'As part of the Ryzen 3000 Series, 2nd Gen AMD Ryzen™ desktop processors with Radeon™ graphics feature fast graphics. Combining the powerful Ryzen™ processor with potent Radeon™ graphics for high performance gaming, all without the need for a separate graphics card. Get a 2nd Gen AMD Ryzen processor with Radeon graphics to join the millions of PC gamers worldwide.', 0),
(20, 'CPU', 'Ryzen 5 2600', 149.00, './assets/cpu/Ryzen-5-2600.jpg', '0000-00-00 00:00:00', 'The Ryzen 5 2600 Gen2 can provide you faster and smoother computing experiences. Allow Ryzen to power your experience and be prepared to dominate tasks both in-game and out. Driven into existence by the user’s passion AMD have forged a processor with the performance power to dominate your favourite applications, games and more.', 0),
(21, 'CPU', 'Ryzen 3 3100', 100.99, './assets/cpu/Ryzen-3-3100.webp', '0000-00-00 00:00:00', 'The AMD Ryzen 3100 processor includes 4 CPU Cores with 8 threads and a base clock of 3.6GHz that can be boosted to 3.9GHz. These CPU\'s are compatible with motherboards using the AM4 socket and also support PCIe 4.0. Support for DDR4 Memory continues with the recommended frequencies being between 3200-3600MHz for optimal performance. Office apps, photo editing, web surfing and watching top streamers are a breeze thanks to incredible multithreaded processing. AMD Ryzen™ 3 processors are powered to deliver high performance fidelity you can see.', 0),
(22, 'CPU', 'Intel i9 9900', 230.10, './assets/cpu/Intel-i9-9900.webp', '0000-00-00 00:00:00', 'The Intel Core i9-9900 is the latest model of the Core 9000- series and offers eight cores with Hyper-Threading (SMT), capable of processing up to 16 threads simultaneously. The enthusiast-class CPU is also capable of offering increased clock frequencies and optimised boost functions when compared to its predecessors. The TDP of this Octa-Core processor is a mere 95 Watts. The processor is compatible with socket 1151 motherboards from the 300-series.', 0),
(23, 'CPU', 'Intel i7 9700', 189.87, './assets/cpu/Intel-i7-9700.webp', '0000-00-00 00:00:00', 'The Intel Core i7-9700 is the new high-end model in the Core 9000- series and includes eight cores. The processor also impresses with its high clock frequencies and optimised boost functions in comparison to its predecessors. The TDP of the octa core processor is also exceptionally low at just 65 Watts. The processor is compatible with Socket 1151 motherboards from the 300- series.', 0),
(24, 'CPU', 'Intel i5 9600kf', 167.00, './assets/cpu/Intel-i5-9600kf.jpg', '0000-00-00 00:00:00', 'The Intel Core- series of processors have now received their latest upgrade in the form of the Coffee Lake-S Refresh. This new updated range brings some highly sought after improvements, including the fact that CPUs with unlocked multipliers now offer soldered heatspreaders (IHS). This enables heat to be more effectively dissipated away from the CPU, allowing higher clock frequencies over longer periods of time.', 0),
(25, 'CPU', 'Intel i3 9100f', 131.00, './assets/cpu/Intel-i3-9100f.jpg', '0000-00-00 00:00:00', 'Exceptional performance, immersive entertainment and simple convenience with 9th Gen Intel Core processors. The i3-9100F processor extends all the capabilities that users love from previous generation CPUs with even more innovations that deliver new levels of performance immersing you into your computer on a variety of form factors.', 0),
(26, 'GPU', 'Aorus 5700XT', 380.00, './assets/gpu/Aorus-5700xt.webp', '0000-00-00 00:00:00', 'AORUS provides the all-around cooling solution for all key components of the graphics card. We take care not only GPU but also VRAM and MOSFET, to ensure a stable overclock operation and longer life. WINDFORCE 3x 82mm cooling system is the most innovative cooling solution that provides the most efficient thermal performance for the graphics card.', 0),
(27, 'GPU', 'Asus Rog Strix 5500XT', 310.00, './assets/gpu/Asus-Rog-5500xt.jpg', '0000-00-00 00:00:00', 'The ROG Strix Radeon™ RX 5500 XT is armed to dominate PC gaming. The all new RDNA powered Radeon RX 5500 XT provides exceptional performance and High-fidelity gaming. Components on the surface of the PCB are precisely soldered with Auto-Extreme Technology and two powerful fans leverage our new Axial-tech design, which surpasses our own industry-leading fans from the last generation. In-between those layers are a myriad of additional features like 0dB mode, IP5X dust resistance, a protective backplate, and subtle RGB lighting.', 0),
(28, 'GPU', 'Evga RTX 3090', 999.99, './assets/gpu/Evga-rtx3090.webp', '0000-00-00 00:00:00', 'The EVGA GeForce RTX 3090 FTW3 Ultra delivers a new tier of exceptional performance that gamers crave at 8K resolution gaming, powered by the NVIDIA Ampere architecture. It\'s built with enhanced RT Cores and Tensor Cores, new streaming multiprocessors, and superfast G6X memory for an amazing gaming experience. Combined with the next generation of design, cooling, and overclocking with EVGA Precision X1, the EVGA GeForce RTX 3090 Series presents a new definition in ultimate Performance.', 0),
(29, 'GPU', 'MSI GTX 1660', 210.99, './assets/gpu/Msi-1660.jpg', '0000-00-00 00:00:00', 'The MSI GeForce GTX 16-Series Graphics Cards are driven by the all-new NVIDIA Turing architecture and with the GeForce GTX 1660 Ti VENTUS XS OC producing a Boost Clock of 1830 MHz this card will give you incredible new levels of gaming power with realistic visuals and high framerates. Pairing with the raw power of NVIDIA\'s latest GTX GPU, MSI have implemented their TORX FAN 2.0 Technology into the card, an award winning fan design that gives you cool and quiet gaming by having two different fin designs that work in unison to give you the best cooling results. Eliminate fan noise with MSI\'s Zero FROZR which stops the fans in low-load demands allowing you to focus on your game and not be distracted.', 0),
(30, 'GPU', 'MSI 5600XT', 340.00, './assets/gpu/Msi-5600xt.webp', '0000-00-00 00:00:00', 'Great gaming experiences are created by bending the rules. The all new RDNA powered Radeon RX 5600 series for exceptional performance and High-fidelity gaming. Take control with Radeon RX 5600 series and experience powerful, accelerated gaming customized for you.', 0),
(31, 'GPU', 'MSI RTX 2060', 380.21, './assets/gpu/Msi-rtx2060.webp', '0000-00-00 00:00:00', 'The MSI NVIDIA GeForce RTX 2060 SUPER 8GB Gaming X graphics card is powered by the all-new NVIDIA Turing architecture to give you incredible new levels of gaming realism, speed, power efficiency, and immersion. With the New MSI GeForce RTX SUPER 20-Series gaming cards you get the best gaming experience with next generation graphics performance, ice cold cooling, and advanced overclocking features. The new NVIDIA GeForce RTX GPUs have reinvented graphics and set a new bar for performance. Powered by the new NVIDIA Turing GPU architecture and the revolutionary NVIDIA RTX platform, the new graphics cards bring together real-time ray tracing, artificial intelligence, and programmable shading. This is not only a whole new way to experience games - this is the ultimate PC gaming experience.', 0),
(32, 'GPU', 'MSI RTX 2070', 420.89, './assets/gpu/Msi-rtx2070.webp', '0000-00-00 00:00:00', 'The MSI NVIDIA GeForce RTX 2070 Ventus GP Graphics Card is driven by the new NVIDIA Turing GPU design and the revolutionary NVIDIA RTX platform, the new graphics cards bring together real-time ray tracing, artificial intelligence, and programmable shading. With the MSI GeForce RTX 20-Series gaming cards you get an extreme gaming experience with next generation graphics performance, ice cold cooling, and advanced overclocking features with the all new MSI AfterBurner. A sturdy backplate helps to strengthen the graphics card and complements the design to look even better. The new NVIDIA GeForce RTX GPUs have reinvented graphics and have pushed beyond the previous generation’s limits. This is the ultimate efficient PC gaming experience.\r\n\r\n', 0),
(33, 'GPU', 'Sapphire 5700XT', 367.00, './assets/gpu/Sapphire-5700xt.webp', '0000-00-00 00:00:00', 'AMD have launched their latest Graphics Cards the Radeon RX 5700 XT Series, the new cards are based on the new RDNA Architecture and now include 8GB of GDDR6 Memory driving the card with a high bandwidth of up to 448GB/s. Game at 1440p performance on today\'s most demanding titles with ease and with the the new architecture you can run your card faster with lower power consumption than ever before. The Sapphire RX 5700 XT series features new PCI Express 4.0 support with a throughput of 16GT/s and enables two times the bandwidth compared to PCI Express 3.0. By choosing a monitor with FreeSync and combining it with an AMD card of this caliber the results will be a stutter-free, tear-free and artifact-free smooth gaming experience.', 0),
(34, 'RAM', 'Corsair Dominator Platinum 8GB 3200Mhz', 40.00, './assets/ram/Corsair-Dominator-Platinum.jpg', '0000-00-00 00:00:00', 'Enjoy a wide range of memory features with the CORSAIR DOMINATOR® PLATINUM, an RGB DDR4 Memory that\'s powered by tightly-screened high-frequency memory chips. DOMINATOR® PLATINUM provides impeccable performance for your system and has efficient space for overclocking thanks to a custom PCB that\'s cooled by CORSAIR\'s patented DHX cooling technology to bring you the finest memory operation. This intuitive RAM has been optimized for the latest Intel® and AMD DDR4 compatible motherboards for even more versatility. Engineered with timeless, iconic features with incredible craftmanship and aluminium construction to aid cooling properties. Personalize the DOMINATOR® with CORSAIR\'s impressive iCUE software which allows you to adjust the twelve RGB LED colours and play with lighting effects to truly immerse you in your gameplay, along with real-time frequency and temperature monitoring. The DOMINATOR® DDR4 comes complete with compatibility with the latest motherboards, along with Intel® XMP 2.0 for easy setup, all backed with a limited lifetime warranty.', 0),
(35, 'RAM', 'Corsair Vengeance LPX 8GB 3200Mhz', 30.00, './assets/ram/Corsair-Vengeance-lpx.jpg', '0000-00-00 00:00:00', 'Vengeance LPX is highly stable and extremely overclockable thanks to constant innovation and the precise manufacturing techniques employed by corsair. Pure aluminium heat spreader\'s, eight layer PCB\'s and IC screening all combine to provide memory that can not only perform under stress but provide superior overclocking headroom and stability rarely seen in such \'low profile\' modules.', 0),
(36, 'PSU', 'Asus Rog 650W', 210.00, './assets/psu/Asus-Rog-650w.jpg', '0000-00-00 00:00:00', 'The ROG STRIX Series PSUs bring high-end cooling and premium components together for an ultra-quiet high-performance product aimed at core gamers. In terms of cooling, massive ROG heatsinks trickle down from the mighty ROG THOR series and Axial-tech fan design from ASUS\'s premium NVIDIA RTX™ graphics cards also make an appearance. Below the surface, low RDS (on) MOSFETs and premium Japanese capacitors take on power delivery with ease. The result is an incredibly quiet and efficient power supply with the reserves to handle the most intense gaming scenarios.\r\n\r\n', 0),
(37, 'PSU', 'BeQuiet 750W', 178.99, './assets/psu/Bequiet-750w.webp', '0000-00-00 00:00:00', 'World Class Quiet and Efficiency\r\nbe quiet! Straight Power 11 Platinum 750W raises the bar for systems that demand virtually inaudible operation and outstanding efficiency.', 0),
(38, 'PSU', 'Corsair RM750X 750W', 156.19, './assets/psu/Corsair-Rm750x-750w.webp', '0000-00-00 00:00:00', 'CORSAIR RM750x series power supplies are built with the highest quality components to deliver 80 PLUS Gold efficient power to your PC. Using only Japanese 105°C capacitors, users can depend on an RM750x PSUs’ long life and reliability, backed by a ten-year warranty. Zero RPM Mode means an RM750x series PSU is virtually silent at low and medium loads, and even at maximum power, a low noise fan ensures quiet operation.', 0),
(39, 'PSU', 'Evga Supernova G3 750W', 140.00, './assets/psu/Evga-Supernova-g3-750w.webp', '0000-00-00 00:00:00', 'Heavy-duty protections, including OVP (Over Voltage Protection), UVP (Under Voltage Protection), OCP (Over Current Protection), OPP (Over Power Protection), SCP (Short Circuit Protection), and OTP (Over Temperature Protection)', 0),
(40, 'PSU', 'Thermaltake Smart 700W', 160.00, './assets/psu/Thermaltake-smart-700w.webp', '0000-00-00 00:00:00', 'Another pioneering PSU with RGB lighting has launched from Thermaltake with the Smart RGB series, coming with a pre-installed, 256 colour RGB fan hub with 15 lighting modes to choose from to customize the lighting in your system, along with built-in memory so you can uphold your unique style. This PSU features a powerful 700 watts and and an impressive 80 PLUS standard certification and also comes ready for Kaby Lake processors. The Smart RGB features an ultra quiet 120mm fan and a powerful single +12V rail to deliver the ultimate power to your components in demanding situations.', 0),
(41, 'AIO', 'Corsair Hydro H100i', 179.00, './assets/aio/Corsair-Hydro-h100i.webp', '0000-00-00 00:00:00', 'The CORSAIR Hydro Series H100i RGB PLATINUM is an all-in-one liquid CPU cooler with a 240mm radiator and vivid RGB lighting that’s built for extreme CPU cooling. Equipped with 24 individual RGB LEDs H110i RGB PLATINUM offers a wealth of RGB lighting options via CORSAIR iCUE software. Two CORSAIR ML PRO RGB 120mm PWM fans run between 400 to 2,400 RPM, alongside an optimized cold plate and pump design that delivers the best-ever Hydro Series cooling. Easy to install and compatible with all major CPU sockets, the H100i RGB PLATINUM pairs killer looks with chiller performance.', 0),
(42, 'AIO', 'NZXT Kraken z63', 230.00, './assets/aio/Nzxt-Kraken-z63.webp', '0000-00-00 00:00:00', 'The all-new Kraken Z Series lets you personalize your all-in-one liquid cooler like never before. Through CAM’s unique software interface, you can do more than simply ne-tune settings; you can now display your favorite images and animated gifs, or CAM system information, allowing for total customization. Backed by a 6-year warranty, the Kraken Z series provides superior performance in liquid cooling, simple installation, and a look that is uniquely your own.', 0),
(43, 'AIO', 'Thermaltake Cooler', 140.99, './assets/aio/Thermaltake.webp', '0000-00-00 00:00:00', 'The incredible Floe DX RGB cooler from Thermaltake is a high-performance all-in-one liquid CPU cooling system featuring vibrant Riing Duo RGB fans and a water block that is fully addressable with RGB lighting. The socket fitting is universal and can be used with both Intel and AMD motherboards so you\'re free to create any build. Utilize the features of the TT RGB PLUS software and dedicated app that can be used on your smartphone so you can control lighting and dynamic effects with ease. Thermaltake\'s remarkable TT RGB PLUS ecosystem even supports AI voice control with iOS and Android devices to make adjusting settings even easier. The Floe DX RGB is also compatible with Razer Chroma along with Razer Synapse 3 to create synchronized lighting themes all across you setup, and it even comes with a digital lighting controller for additional device control. Discover incredible cooling performance with this high-efficiency radiator that\'s super easy to install and gives you cutting-edge control and performance.', 0),
(44, 'Fan', 'Aorus ACT800', 79.99, './assets/fan/Aorus-act800.webp', '0000-00-00 00:00:00', 'With the Aorus ATC800 motherboard and graphics card specialist Gigabyte introduces a quiet and powerful CPU cooler with synchronisable RGB LED illumination. Two double-ball bearing 120 mm fans with specially structured fan blades ensure a 33 percent better airflow compared to the predecessor model and six Direct-Touch heatpipes ensure rapid transfer of waste heat.', 0),
(45, 'Fan', 'Coolermaster MA620M', 99.99, './assets/fan/Coolermaster-ma620m.webp', '0000-00-00 00:00:00', 'The MasterAir MA620M comes with dual blacked out aluminum towers with a uniform 6 heat pipe layout to dissipate the heat evenly. The Masterfan SF120R provides high air pressure with silent performance to cool away the heat from the heat pipes in silence. Easy mounting system along with array of Addressable RGB LED lighting makes the MA620M the best option in the market for an air cooling solution', 0),
(46, 'Fan', 'Noctua NHU9S', 37.89, './assets/fan/Noctua-nhu9s.webp', '0000-00-00 00:00:00', 'Continuing the renowned legacy of Noctua’s award-winning NH-U9 series, the NH-U9S is a premium quality quiet CPU cooler in classic 9cm size. Its asymmetrical design with five heatpipes not only provides even better cooling performance than the previous generation but also improves compatibility. Thanks to its 95x95mm footprint, the NH-U9S clears the RAM and PCIe slots on all Intel and most AMD based mainboards, including µATX and ITX. Combined with its 125mm height, this makes the NH-U9S a highly versatile solution with excellent case, RAM and PCIe compatibility. The included NF-A9 premium fan supports automatic speed control via PWM for outstanding quietness of operation and a second, optional NF-A9 fan can be added for further improved performance in dual fan mode. Topped off with the trusted, pro-grade SecuFirm™ multi-socket mounting system, Noctua’s proven NT-H1 thermal compound and full 6 years manufacturer’s warranty, the NH-U9S is a deluxe choice through and through.', 0),
(47, 'HDD', 'Segate Barracuda 1TB', 55.00, './assets/hdd/Seagate-Barracuda.webp', '0000-00-00 00:00:00', 'The Seagate BarraCuda is a high-quality HDD that delivers incredible performance thanks to its easy to use 3.5 inch form factor that is just 20.2mm in height, the drive runs at 7200 rpm, the BarraCuda\'s technical highlight is it’s 6Gb/s interface, which is the latest SATA III standard. This drive in particular has a storage capacity of 1000GB with an access time of 8.5ms and a 64MB Cache.', 0),
(48, 'SSD', 'Samsung 860 PRO 500GB', 75.00, './assets/ssd/Samsung-860pro.webp', '0000-00-00 00:00:00', 'The Samsung SSD 860 PRO is the new Samsung’s Client-PC SATA SSDs, specially designed for high-end computing devices. Building on the reputation of the Samsung SSD 850 PRO, the world’s first V-NAND SSD for Client PCs, the new Samsung SSD 860 PRO drives achieve top class performance for SATA SSDs, offering improvements in speed, reliability, and compatibility. The 860 PRO comes equipped with Samsung’s newly designed MJX controller along with the latest 2bit MLC V-NAND architecture.', 0),
(49, 'SSD', 'WD Green 120GB', 22.00, './assets/ssd/WD-Green.jpg', '0000-00-00 00:00:00', 'Western Digital SSD range has the same expectations of reliability and performance that come with the mechanical hard drives and they have not disappointed. Using 3D Nand Technology they have managed to create speeds of upto 545MB/s Read speeds. Showing confidence in the product WD are offering a 3 year warranty to cover you for any problems with the drive.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'elias', '123', 'Elias'),
(2, 'john', 'abc', 'John'),
(3, 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'test'),
(4, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(5, 'test122@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'test'),
(6, 'test122222@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', 'test'),
(7, 'test12222342@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'test'),
(8, '234test12222342@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', 'test'),
(9, 'jake@gmail.com', '1200cf8ad328a60559cf5e7c5f46ee6d', 'jake');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
