-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 18, 2017 at 11:40 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumnicell`
--

-- --------------------------------------------------------

--
-- Table structure for table `beyondthewall`
--

CREATE TABLE `beyondthewall` (
  `id` int(11) NOT NULL,
  `lectureno` int(2) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `date` date DEFAULT NULL,
  `speaker` varchar(200) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beyondthewall`
--

INSERT INTO `beyondthewall` (`id`, `lectureno`, `topic`, `date`, `speaker`, `content`) VALUES
(1, 7, 'Trials and Tribulations in the life of a Researcher', '2017-03-04', 'Prof. Surjya Kumar Maiti (1970, BE, ME)<br></a>    G.K. Devarajulu Chair Professor, IIT Bombay', 'An invited talk, which is a part of the lecture series Beyond the Walls, was\r\njointly organised by Department of Mechanical Engineering, NIT Durgapur and\r\nNITDAA on March 04, 2017 at NIT Durgapur. The talk on Trials and\r\nTribulations in the Life of a Researcher was delivered by Prof. S. K. Maiti, an\r\neminent alumnus of the Institute and G K Devarajulu Chair Professor,\r\nDepartment of Mechanical Engineering, IIT Bombay.'),
(2, 6, 'A tale of two Machines-Harmonic Drive & ORBIT Motor', '2017-01-23', 'Prof. Rathindra Nath Maity(1974, BE, ME) Professor, IIT Kharagpur', 'An invited talk, which is a part of the lecture series Beyond the Walls, was\r\njointly organised by Department of Mechanical Engineering, NIT Durgapur and\r\nNITDAA on January 23, 2017 at NIT Durgapur. The talk was delivered by Prof.\r\nRathindra Nath Maiti, an eminent alumnus of the Institute, Professor in\r\nDepartment of Mechanical Engineering, IIT Kharagpur and the topic was; A tale\r\nof two Machines-Harmonic Drive & ORBIT Motor.'),
(3, 5, 'Numerical Methods in Energy Harvesting', '2016-11-24', 'Prof. Alak Bandhopadhyay(1985, BE, ME)\r\nProfessor, Alabama A&M University, USA', 'An invited talk, which is a part of the lecture series Beyond the Walls, was\r\njointly organised by Department of Mechanical Engineering, NIT Durgapur and\r\nNITDAA on November 24, 2016 at NIT Durgapur. The talk was delivered by\r\nAlak Bandhopadhyay, an eminent alumnus of the Institute, Professor,\r\nAlabama A&M University, USA and the topic was Numerical Methods in\r\nEnergy Harvesting.'),
(4, 4, 'Expectation of corporates & Industries from fresh Graduate Engineers during Campus Interviews', '2016-09-15', 'Mr. Simanta Roy Choudhury, Former DGM of L&T and former Sr. GM of McNally Bharat', 'One programme of the lecture series "Beyond the Walls" was held in NIT Durgapur on\r\nSeptember 15, 2016. Mr. Simanta Roy Choudhury, a distinguished alumnus of the\r\nInstitute, delivered a lecture on Soft Skill Development titled "Expectation of Corporates\r\n& Industries from fresh Graduate Engineers during Campus Interviews." It was jointly\r\norganized by the Department of Civil Engineering and the NIT Durgapur Alumni\r\nAssociation, and was held in the D. M. Sen Memorial Hall. It was attended by a large\r\nnumber of under-graduate and post-graduate students, mainly from the final and prefinal\r\nyears. Mr. Roy Choudhury, speaking from his long experience in the industry in the\r\nfield of conducting campus interviews, gave an extremely informative lecture. He\r\npointed out all the major and minor mistakes that students usually make in the\r\ninterviews. He also mentioned the important things that the interviewers look for in the\r\nstudents. The students enjoyed the lecture and felt this exposure helped them prepare\r\nfor the campus placement interviews in a much better way.'),
(5, 3, 'Product Design: Innovation & Research', '2016-08-31', 'Prof. Dibakar Sen, Professor, Mechanical Engineering Department, IISc Bangalore', 'An invited talk, which is a part of the lecture series "Beyond the Walls", was jointly\r\norganised by Department of Mechanical Engineering, NIT Durgapur and NITDAA on\r\nAugust 31, 2016 at NIT Durgapur. The talk on " Product Design: Innovation &\r\nResearch" was delivered by Prof. Dibakar Sen, an eminent alumnus of the Institute\r\nand Faculty in IISc Bangalore. In his talk, he discussed several concepts like\r\ninnovative product design, detail of functional product, aesthetics and ergonomics\r\nconsideration in product design.'),
(6, 2, 'Interdisciplinary research at the frontiers of Engineering Sciences,\nHypersonic space Vehicles to Biomedical', '2016-08-29', 'Prof. Bikramjit Basu, Professor, Materials Research Centre, IISC Bangalore', 'An invited talk, which is a part of the lecture series "Beyond the Walls", was jointly\norganised by Department of Mechanical Engineering, NIT Durgapur and NITDAA on\nAugust 29, 2016 at NIT Durgapur. The talk was delivered by Prof. Bikramjit Basu, an\neminent alumnus of the Institute, a recipient of the prestigious Shanti Swarup\nBhatnagar award and Professor in IISc Bangalore. In his talk, he addressed the need\nof multidisciplinary research work in the field of frontiers of Engineering Sciences. He\nalso mentioned that in order to achieve such goal, Engineers and Technologists\nneed to be used modern tools and techniques such as computational fluid dynamics,\nFinite element analysis of fluid-structure interaction etc.'),
(7, 1, 'Innovations in Science and Engineering: Lessons from History and Personal experience from the perspective of a Materials Engineer', '2016-08-18', 'Prof. Kamanio Chattopadhyay, INAE Distinguished Professor, IISC Bangalore', 'Beyond the Walls, a lecture series by distinguished alumni members organized by\r\nNIT Durgapur Alumni Association (NITDAA) and National Institute of Technology\r\nDurgapur, was re-launched on August 18, 2016 at D.M. Sen Hall.\r\nThe first lecture was delivered by Prof. Kamanio Chattopadhyay, who received his\r\nBachelors of Engineering Degree in Metallurgical Engineering from Regional\r\nEngineering College Durgapur in 1971. He is a recipient of the prestigious Shanti\r\nSwarup Bhatnagar award. Prof. Amalendu Bhushan Bhattacharyya, Chairperson,\r\nBoG, NIT Durgapur presided over the program and Sri Santi Ranjan Sarkar,\r\nPresident, NITDAA briefed the audience about the activities of NITDAA.\r\nProf. Chattopadhyay delved into the evolution of technology and the culture which\r\nincubates it. In the first half of his talk he explored the history of his profession of\r\nmaterials engineering to understand innovation and technological progress. He then\r\nelaborated the central role of the pursuit of individuals for excellence through\r\nsuccess and failures. In the second half, his personal experience was leveraged to\r\nanswer the same question through a journey that was entwined with several\r\nbreakthroughs of recent time like the discovery of Nobel-winning quasicrystal in the\r\neighties or the recent breakthrough on new materials for extreme environments.\r\nAll the students, faculty members and others present listened with rapt attention and\r\nenjoyed the deliberation. The program was organized by Metallurgical & Materials\r\nEngineering Department under TEQIP-II and Dr. Supriya Bera and Dr. Manas Kumar\r\nMandal, both Assitant Professors of the department, were the Coordinators.');

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `id` int(11) NOT NULL,
  `identifier` varchar(30) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`id`, `identifier`, `content`) VALUES
(1, 'welcometext', 'The Alumni cell is functioning at the Institute as a nodal cell for maintaining liaison with NIT Durgapur Alumni all across the globe and to involve them in the all-round development and growth of the Institute. NIT Durgapur is proud to have as its Alumni a group of over 25000  Engineers, Technocrats, Scientists, managers and Entrepreneurs. They are our global brand ambassadors. This office promotes and encourages the Alumni to exchange professional knowledge by undertaking and facilitating seminar, lectures and meeting amongst Alumni, students, faculty and others. The office is also entrusted with developing institutional partnership and collaboration with other organization such as universities in India and abroad, academic and research institutes and industries.'),
(2, 'objectives', 'The Alumni cell shall have the following broadly identified objectives:\n<br>\n<br>\n<ul style=\'list-style-type:square\'>\n<li>To establish and maintain contact with Alumni.</li>\n<li>To promote and strengthen engangement, research collaborations and consultancy relationships among students, Alumni and institute.</li>\n<li>To strengthen Industry-Institute-Interaction through our Alumni for the benefit of the students.</li>\n<li>To establish endowments by contribution to extend financial and other assistance to deserving present students and alma maters for educational, research and development purposes.</li>\n<li>To provide common platform for exchange of ideas and disseminating knowledge in Professional area.</li>\n<li>To provide common platform where alumni can submit their accomplishments in the Alumni achievement section.</li>\n<li>To support alumni networking activities and events such as reunions for mutual benefit of the alumni and present students.</li>\n<li>To support Pan NIT activities.</li>\n<li>To perform any other constructive activities leading towards the enhancement of the internship and employment opportunities.</li>\n</ul>'),
(3, 'messagefromdean', 'With a vision to train and transform young professionals into responsible citizens engaging them for the betterment of the society, the Institute aims to produce skilled and trained industry-ready professionals through imparting quality technical education and acts as the center of excellence for engineering and scientific research. Tremendous hard work, confidence and faith of all the stakeholders and well-wishers of the Institute encourage us to strive towards the zenith of academic excellence.\nBeing an integral part of the dynamic research community, NIT Durgapur focuses on designing engineering and management programs that instil leadership and teamwork, and carries a global appeal. The undergraduate, postgraduate and Ph.D. programs are regularly revised to comply with global technical developments and market demands. The flexibility in the design of management and engineering education in the Institute incubates global trends and helps to meet future demands, ensuring better Institute-Industry partnership both at local and in global levels. The Institute has been able to create a niche of its own. The Institute also prides itself with having a very active linkage with industry from inception.\nI appreciate the efforts of our vibrant Training and Placement cell and all its members who are in touch with all the industries for training and placement of our students and look forward to garnering fruitful relations with our esteemed recruiters.'),
(4, 'invitedlecture', 'National Institute of Technology, Durgapur hosts several series of invited lectures featuring distinguished speakers on a variety of topics across engineering and related fields. The lectures are intended to appeal to a diverse audience within engineering, across the university and beyond. Invited speakers range from distinguished alumni and professors to emerging young researchers and successful technology entrepreneurs.'),
(5, 'beyondthewall', 'NIT Durgapur Alumni Association (NITDAA) has started a lecture series \'Beyond the Walls\' by distinguished alumni member from Industry, R&D, and academia. We have many alumni members who are doing exceedingly well in academia, research, industries, entrepreneurship and other areas. In line with our objective of giving back to our beloved alma mater, we like to share knowledge and wisdom of these eminent alumni members with the students and faculty. Initially, the lecture series is being delivered in person.  We may plan this lecture through conferencing so that we may induct people particularly from abroad.'),
(6, 'alumnistudentmentorship', 'Experience can have no substitute and to echo the same sentiments, the Alumni Student Mentorship Programme brings together students and alumni in purposeful, mutually rewarding relationships, using a platform to introduce students to alumni from different class years, programmes, and industries. It provides the students an opportunity to peek into the life beyond the campus and ensures that they can tap into the vast reservoir of knowledge and experience that the alumni have. Ultimately, this programme is with the belief that all the participants have something valuable to gain.'),
(7, 'iiiprogramme', 'Through the Industry-Institute-Interaction Programme, the Institute encourages its faculty, technicians and students to interact with industry through its Alumni in all possible ways with the spirit of deriving mutual benefit.'),
(8, 'studentvolunteers', 'This group of enthusiastic pupils is third year B Tech undergraduates from various departments who have, in them, a willingness to give back to their alma mater, both as students and as alumni. Currently 12, the number of members is expected to go up in future with students from different years joining it. The primary task of the coordinators is to form a bridge between the former students and the Institute and subsequently, the students, via this Alumni Cell.'),
(9, 'alumniservices', '          <p>The Alumni cell is keen to help you connect with your alma mater, batchmates and other Alumni in every possible manner.</p>\r\n          <br>\r\n          <p>\r\n          The Alumni cell maintains a large database of the alumni spread across the globe. If you wish to seek help to connect to anyone in particular or a group, mail us at alumni@admin.nitdgp.ac.in.</p>\r\n          <br>\r\n          <p>\r\n          If you are working or run your own company, then you can be a part of yearly Placement and Summer Internship program run by the institute and provide an opportunity to students to be a part of your work culture. \r\n          </p>\r\n          <br>\r\n          <p>\r\n          Your knowledge and skills can have a huge impact in building a vibrant and intellectual atmosphere at the institute. \r\n          </p>\r\n          <br>\r\n          <p>\r\n          You can contribute towards it either by working as an adjunct faculty or giving guest lectures on topics of general interests.\r\n          </p>'),
(10, 'studentalumnimeet', 'Student Alumni Meet is an annual event of National Institute of Technology, Durgapur Alumni Cell. During the Student Alumni Meet, alumni and students from all fields participate in various events which are aimed at helping students in overcoming uncertainties regarding their career choices and their lives beyond the campus');

-- --------------------------------------------------------

--
-- Table structure for table `iiiprogramme`
--

CREATE TABLE `iiiprogramme` (
  `id` int(11) NOT NULL,
  `lectureno` int(2) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `date` date DEFAULT NULL,
  `speaker` varchar(200) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notablealumni`
--

CREATE TABLE `notablealumni` (
  `id` int(11) NOT NULL,
  `imageno` int(2) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notablealumni`
--

INSERT INTO `notablealumni` (`id`, `imageno`, `name`, `description`) VALUES
(1, 6, 'Prof. Kamanio Chattopadhyay', '<h4>Honorary Professor, Department of Materials Engineering, Indian Institute of Science, Bangalore.</h4><h4>Former Chair, Mechanical Sciences Division Convenor, Interdisciplinary Center for Energy Research, Indian Institute of Science, Bangalore</h4>        <h4>Director (India),          Solar Energy Research Institute for India and United States (SERIIUS)</h4>        <h4>Co-ordinator, National Microgravity Programme, Indian Space Research Organisation (ISRO).</h4>        <h4>Recipient of Shanti Swarup Bhatnagar Award.</h4>'),
(2, 8, 'Prof. Satyajit Chakrabarti', '<h4>Founder, IEM.</h4>\n<h4>Vice Chancellor, UEM, Kolkata.</h4>'),
(3, 2, 'Prof. Bikramjit Basu', '<h4>Batch of 1995, B.E., Department of MME.</h4>\r\n        <h4>Professor, Materials Research Center, Indian Institute of Science, Bangalore.</h4>\r\n        <h4>Recipient of Shanti Swarup Bhatnagar Award.</h4>'),
(4, 4, 'Mr. Gautam Chatterjee', '<h4>Batch of 1970, B.E., Department of Mechanical Engineering.</h4>\r\n<h4>MD, CEO & Executive Director, Exide Industries Limited.</h4>'),
(5, 10, 'Prof. Tarasankar Debroy', '<h4>Professor, Materials Science and Engineering, PennState College of Earth and Mineral Sciences, USA</h4>'),
(6, 5, 'Mr. Jayanta Kumar Ghosh', '<h4>Batch of 1969, B.E., Department of Electrical Engineering.</h4>\r\n        <h4>Managing Director, New Town Electric Supply Company Limited.</h4>'),
(7, 1, 'Mr. Ashok Manaktala', '<h4>Batch of 1968.</h4>\r\n<h4>CEO, Topsel Toyota.</h4>'),
(8, 3, 'Mr. Dipendra Sharma', '        <h4>Batch of 1992.</h4>\r\n        <h4>Ministry of Youth, Nepal.</h4>'),
(9, 7, 'Prof. Probir Kumar Bose', '<h4>Batch of 1974, B.E., Department of Mechanical Engineering.</h4>\r\n        <h4>Former Director, NIT Agartala.</h4>\r\n        <h4>Campus Director, NSHM Knowledge Campus, Durgapur.</h4>'),
(10, 9, 'Mr. Nilotpal Roy', '<h4>Managing Director, IISCO, SAIL, Burnpur.</h4>');

-- --------------------------------------------------------

--
-- Table structure for table `photogallery`
--

CREATE TABLE `photogallery` (
  `id` int(11) NOT NULL,
  `imageno` varchar(5) NOT NULL,
  `caption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photogallery`
--

INSERT INTO `photogallery` (`id`, `imageno`, `caption`) VALUES
(1, '0310', 'Beyond The Walls Lecture #7 by Prof. Surjya Kumar Maiti'),
(2, '0317', 'Beyond The Walls Lecture #7 by Prof. Surjya Kumar Maiti'),
(3, '0318', 'Beyond The Walls Lecture #7 by Prof. Surjya Kumar Maiti'),
(4, '0357', 'Distinguished Alumni: Prof. Surjya Kumar Maiti'),
(5, '1479', 'Inauguration of Alumni Cell'),
(6, '1504', 'Inauguration of Alumni Cell'),
(7, '1519', 'Inauguration of Alumni Cell'),
(8, '1480', 'Alumni, Batch of 1965'),
(9, '1542', 'Alumni from Nepal'),
(10, '5834', 'Beyond The Walls Lecture #5 by Prof. Alak Bandhopadhyay'),
(11, '5847', 'Beyond The Walls Lecture #5 by Prof. Alak Bandhopadhyay'),
(12, '5850', 'Beyond The Walls Lecture #5 by Prof. Alak Bandhopadhyay'),
(13, '5895', 'Industry-Institute-Interaction 26 Nov, 2016'),
(14, '7194', 'Alumni at Dhaka, Bangladesh 22 Dec, 2016'),
(15, '7617', 'Alumni, Batch of 1980'),
(16, '7654', 'Alumni during Global Meet 2017'),
(17, '7657', 'Alumni during Global Meet 2017'),
(18, '7670', 'Alumni during Global Meet 2017'),
(19, '9097', 'Beyond The Walls Lecture #6 by Prof. Rabindra Nath Maity'),
(20, '9108', 'Beyond The Walls Lecture #6 by Prof. Rabindra Nath Maity');

-- --------------------------------------------------------

--
-- Table structure for table `temp_users`
--

CREATE TABLE `temp_users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `yearofpassing` int(4) DEFAULT '2017',
  `degree` varchar(10) DEFAULT NULL,
  `department` varchar(40) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `altemail` varchar(30) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `dateob` int(2) DEFAULT NULL,
  `monthob` int(2) DEFAULT NULL,
  `currentorg` varchar(70) DEFAULT NULL,
  `currentcity` varchar(50) DEFAULT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `addinfo` text,
  `linkedin` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `upcomingevents`
--

CREATE TABLE `upcomingevents` (
  `id` int(10) UNSIGNED NOT NULL,
  `dd` int(2) NOT NULL,
  `mm` varchar(20) NOT NULL,
  `yyyy` int(4) NOT NULL,
  `text` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upcomingevents`
--

INSERT INTO `upcomingevents` (`id`, `dd`, `mm`, `yyyy`, `text`) VALUES
(1, 4, 'March', 2017, 'Beyond The Walls Lecture #7 by Prof. Surjya Kumar Maiti'),
(3, 23, 'January', 2017, 'Beyond The Walls Lecture #6 by Prof. Rathindra Nath Maity'),
(4, 24, 'November', 2016, 'Beyond The Walls Lecture #5 by Prof. Alok Bandhopadhyay');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `yearofpassing` int(4) DEFAULT '2017',
  `degree` varchar(10) DEFAULT NULL,
  `department` varchar(40) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `altemail` varchar(30) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `dateob` int(2) DEFAULT NULL,
  `monthob` int(2) DEFAULT NULL,
  `currentorg` varchar(70) DEFAULT NULL,
  `currentcity` varchar(50) DEFAULT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `addinfo` text,
  `linkedin` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `yearofpassing`, `degree`, `department`, `email`, `password`, `altemail`, `phone`, `dateob`, `monthob`, `currentorg`, `currentcity`, `designation`, `addinfo`, `linkedin`) VALUES
(2, 'Devansh', 'Goenka', 2017, 'B.E/B.Tech', 'CSE', 'devanshgoenka97@gmail.com', '$2y$10$kawzhhQoeePkW6btuADN6uN8H8P4NzAxu93rdMWHiEy5vqY2SnzWi', 'NULL', 0, 24, 1, 'Qualcomm', 'NULL', 'NULL', 'NULL', 'NULL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beyondthewall`
--
ALTER TABLE `beyondthewall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iiiprogramme`
--
ALTER TABLE `iiiprogramme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notablealumni`
--
ALTER TABLE `notablealumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photogallery`
--
ALTER TABLE `photogallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_users`
--
ALTER TABLE `temp_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcomingevents`
--
ALTER TABLE `upcomingevents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beyondthewall`
--
ALTER TABLE `beyondthewall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `iiiprogramme`
--
ALTER TABLE `iiiprogramme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `notablealumni`
--
ALTER TABLE `notablealumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `photogallery`
--
ALTER TABLE `photogallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `temp_users`
--
ALTER TABLE `temp_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `upcomingevents`
--
ALTER TABLE `upcomingevents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
