-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 07:20 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ovin_gases_pvt_ltd`
--
CREATE DATABASE IF NOT EXISTS `ovin_gases_pvt_ltd` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ovin_gases_pvt_ltd`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `date`) VALUES
('admin', '$2y$10$OU2tBXud07khy.AI3Rm2eOjwZu6ZNmCyX4p17hXyq6LsoSKosE/Za', '2021-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `sug_id` varchar(9) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `company_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `suggestion_details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`sug_id`, `date`, `name`, `company_name`, `email`, `contact`, `suggestion_details`) VALUES
('010521125', '2021-05-01', 'Saman Kumara', 'Colombo Dockyard PLC', 'saman@mail.com', '0711845545', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('010521458', '2021-05-01', 'Pradeep Rathnayake', 'CCPM Power Plant – Norochcholei', 'pradeep@mail.com', '0754486625', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('010621125', '2021-06-01', 'Damith Ekanayaka', 'Ceylinco Cosolidate', 'damith@mail.com', '0715269925', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('010621458', '2021-06-01', 'Amal Jayakodi', 'Ceylon Biscuits Limited', 'amal@mail.com', '0721566458', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('020521485', '2021-05-02', 'Mahesh Matheesha', 'Sri Lanka Army', 'mahesh@mail.com', '0774518855', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('020621485', '2021-06-02', 'Dilanka Rathnayake', 'Ceylon Electricity Board', 'dilanka@mail.com', '0781542263', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('030721176', '2021-07-03', '', '', '', '', ''),
('030721824', '2021-07-03', 'Kamal Gunerathne', 'Kamal and Sons', 'Kamal@gmail.com', '0711547784', 'This is the my Comment'),
('050521362', '2021-05-05', 'Savindu Dilsara', 'Maeda Nishimutsu', 'savindu@mail.com', '0725342645', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('050521451', '2021-05-05', 'janith Deshan', 'Dutch Lanka Trailers', 'janith@mail.com', '0715269925', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('050521485', '2021-05-05', 'Nuwan Kumara', 'Sri Lanka Railways', 'nuwan@mail.com', '0715367164', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('050521527', '2021-05-05', 'Ishara Rathnamalala', 'Lanka Tiles Ltd', 'ishara@mail.com', '0771545245', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('050521784', '2021-05-05', 'Amal Roshitha', 'Hyundai Lanka', 'amal@mail.com', '0705623315', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('050521874', '2021-05-05', 'Nimal Rathnayke', 'Sri Lanka Navy', 'nimal@mail.com', '0781542263', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('050521964', '2021-05-05', 'Samarakoon', 'Lanka Ashok Leyland Co Ltd.', 'samarakoon@mail.com', '0721566458', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('050621362', '2021-06-05', 'Lal Jayakodi', 'Dimah', 'lal@mail.com', '0775412586', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('050621451', '2021-06-05', 'Anura Kumara', 'Durace Hotel', 'anura@mail.com', '0742569547', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('050621485', '2021-06-05', 'Priyantha Nimalsiri', 'Daintee', 'priyantha@mail.com', '0774548365', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('050621527', '2021-06-05', 'Asitha Weerawansha', 'GRI Tyres', 'asitha@mail.com', '0745452871', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('050621784', '2021-06-05', 'Gayan Sampath', 'Ceylon Tabacco Company', 'gayan@mail.com', '0771545245', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('050621874', '2021-06-05', 'Dananjaya Premalal', 'Gateway Gropn', 'dananjaya@mail.com', '0701523641', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('050621964', '2021-06-05', 'Sisira Sampath', 'EAP Holdings', 'sisira@mail.com', '0702564853', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('100521854', '2021-05-10', 'Anil Jasinghe', 'Sierra Ready-mix Ltd', 'anil@mail.com', '0774548365', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('100621854', '2021-06-10', 'Jameen Saheed', 'Heyleys', 'jameen@mail.com', '0716936547', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('150521522', '2021-05-15', 'Kasun Yasantha', 'Sri Lanka Airforce', 'kasun@mail.com', '0702564853', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('150521578', '2021-05-15', 'Saman Nanayakkara', 'Sha - Cola Beverages', 'saman@mail.com', '0775412586', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('150521596', '2021-05-15', 'Kashan Sandaruwan', 'Ceylon Cold Storage', 'kashan@mail.com', '0701523641', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('150521684', '2021-05-15', 'Nipul Sunanda', 'Gayan Enterprises', 'nipul@mail.com', '0745452871', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('150521874', '2021-05-15', 'Nalin Salinda', 'Varun Beverages', 'nalin@mail.com', '0742569547', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('150621522', '2021-06-15', 'Wimalanath Rathnalingam', 'Jat Hodings', 'wimalanath@mail.com', '0711845545', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('150621578', '2021-06-15', 'Vikum Prasanna', 'Hemas Holding', 'vikum@mail.com', '0715483712', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('150621596', '2021-06-15', 'Kamal Weerakkodi', 'Island Tea', 'kamal@mail.com', '0754486625', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('150621684', '2021-06-15', 'Ajith Kumara', 'John Keels Computer Servise', 'ajith@mail.com', '0774518855', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('150621874', '2021-06-15', 'Supun Subasinghe', 'ITN', 'supun@mail.com', '0702322631', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('200521784', '2021-05-20', 'Isuru Sadith', 'Padukka Stores', 'isuru@mail.com', '0716936547', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('200621784', '2021-06-20', 'Ruwan Gallage', 'LAUFS Holding ', 'ruwan@mail.com', '0705623315', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('250521987', '2021-05-25', 'Ayesh Premathilaka', 'Sena Super', 'ayesh@mail.com', '0715483712', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('250621987', '2021-06-25', 'Wikasitha Kalum', 'MAS Holding', 'wikasitha@mail.com', '0715367164', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('260521201', '2021-05-26', 'Piyumantha Kumara', 'Gihan Enterprises', 'piyumantha@mail.com', '0702322631', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('260621201', '2021-06-26', 'Pushparaj Kaushalya', 'AMW Capital Leasing & Finance', 'pushparaj@mail.com', '0725342645', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('300521123', '2021-05-30', 'Awantha Disanayake', 'Coca-Cola Berverages', 'awantha@mail.com', '0711845545', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('300521235', '2021-05-30', 'Sumanapala Rathnayake', 'Damro', 'sumanapala@mail.com', '0754486625', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('300521321', '2021-05-30', 'Mewandi Ekanayake', 'CameraLK', 'mewandi@mail.com', '0715367164', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('300521325', '2021-05-30', 'Supun Samadhi', 'Airetel Sri Lanka', 'supun@mail.com', '0705623315', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('300521530', '2021-05-30', 'Asela Sandamal', 'Cargills', 'asela@mail.com', '0725342645', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('300521658', '2021-05-30', 'Mahinda Kumara', 'Associated Newspapers of Ceylon LimitedAirtel Sri Lanka', 'mahinda@mail.com', '0774518855', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('300561321', '2021-06-30', 'Shantha Rathnayake', 'Nature Beauty Creations Ltd.', 'shantha@mail.com', '0774548365', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('300621123', '2021-06-30', 'Varun Kumar', 'AF Jones Expoters', 'varun@mail.com', '0715269925', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('300621235', '2021-06-30', 'Chandana Weerakkodi', 'AB Securities', 'chandana@mail.com', '0721566458', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('300621325', '2021-06-30', 'Nihal Perera', 'Associated Motorways (pvt)Ltd', 'nihal@mail.com', '0771545245', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('300621530', '2021-06-30', 'Harith Pushparaj', 'Harith & Sons', 'harith@mail.com', '0775412586', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.'),
('300621658', '2021-06-30', 'Rodger Rohana', 'Abans Electricals', 'rodger@mail.com', '0781542263', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat neque esse qui corporis. Facere assumenda quae repellat debitis voluptate voluptates iste sit asperiores! Itaque quasi beatae voluptate dolore fugiat laboriosam.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`sug_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
