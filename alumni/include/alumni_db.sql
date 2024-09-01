-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2024 at 04:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `id` int(11) NOT NULL,
  `batch` year(4) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `batch`, `date`) VALUES
(1, '1984', '2024-07-04'),
(2, '1985', '2024-08-10'),
(3, '1986', '2024-08-10'),
(4, '1987', '2024-08-10'),
(5, '1988', '2024-08-10'),
(6, '1989', '2024-08-10'),
(7, '1990', '2024-08-10'),
(8, '1991', '2024-08-10'),
(9, '1992', '2024-08-10'),
(10, '1993', '2024-08-10'),
(11, '1994', '2024-08-10'),
(12, '1995', '2024-08-10'),
(13, '1996', '2024-08-10'),
(14, '1997', '2024-08-10'),
(15, '1998', '2024-08-10'),
(16, '1999', '2024-08-10'),
(17, '2000', '2024-08-10'),
(18, '2001', '2024-08-10'),
(19, '2002', '2024-08-10'),
(20, '2003', '2024-08-10'),
(21, '2004', '2024-08-10'),
(22, '2005', '2024-08-10'),
(23, '2006', '2024-08-10'),
(24, '2007', '2024-08-10'),
(25, '2008', '2024-08-10'),
(26, '2009', '2024-08-10'),
(27, '2010', '2024-08-10'),
(28, '2011', '2024-08-10'),
(29, '2012', '2024-08-10'),
(30, '2013', '2024-08-10'),
(31, '2014', '2024-08-10'),
(32, '2015', '2024-08-10'),
(33, '2016', '2024-08-10'),
(34, '2017', '2024-08-10'),
(35, '2018', '2024-08-10'),
(36, '2019', '2024-08-10'),
(37, '2020', '2024-08-10'),
(38, '2021', '2024-08-10'),
(39, '2022', '2024-08-10'),
(40, '2023', '2024-08-10'),
(41, '2024', '2024-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course`, `date`) VALUES
(1, 'Bachelor of Business Administration (BBA)', '2024-07-02'),
(2, 'Bachelor of Computer Applications (BCA)', '2024-07-02'),
(3, 'Diploma in Business Management (DBM)', '2024-08-10'),
(4, 'Diploma in Taxation (DIT)', '2024-08-10'),
(5, 'Master of Business Administration (MBA)', '2024-08-10'),
(6, 'Master of Computer Applications (MCA)', '2024-08-10'),
(7, ' Masters of Commerce (M.Com)', '2024-08-10'),
(8, 'Post Graduate Diploma in Computer Application (PGDCA)', '2024-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `donateby` varchar(100) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `date` varchar(10) NOT NULL DEFAULT current_timestamp(),
  `receipt_date` varchar(16) NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `name`, `donateby`, `transaction_id`, `amount`, `contact`, `date`, `receipt_date`, `status`) VALUES
(10, 'Partik Ashok Yadav', 'elvish@gmail.com', '112211331111', '1234', '0', '2024-07-28', '2024-07-27', 'confirm'),
(11, 'vedant prakesh bhandare', 'vedant@gmail.com', '1234567890', '1234', '8989898989', '2024-07-29', '2024-07-30', 'confirm'),
(12, 'Partik Ashok Yadav', 'elvish@gmail.com', '112211331111', '1111', '9876543451', '2024-08-09', '2024-08-10', 'confirm'),
(14, 'Rohan Namdev Patil', 'rohan@gmail.com', '987656789012', '12,000', '9898789098', '2024-08-19', '2024-08-19', 'confirm'),
(15, 'Rohan Namdev Patil', 'rohan@gmail.com', '987656789012', '10000', '9898789098', '2024-06-11', '2024-08-24', 'confirm'),
(16, 'Rohan Namdev Patil', 'rohan@gmail.com', '987656789012', '5000', '9898789098', '2024-05-09', '2024-09-19', 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event` varchar(50) NOT NULL,
  `schedule` varchar(100) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event`, `schedule`, `description`, `image`, `date`) VALUES
(5, 'Alumni Exhibition 2024', '2024-11-03T09:00', '\"Welcome to the Alumni Exhibition 2022, a celebration of our vibrant alumni community. This event showcased a diverse range of talents and achievements from our graduates, highlighting their contributions across various fields. From innovative projects to inspiring personal stories, the exhibition provided a platform for alumni to reconnect and share their successes. Explore the displayed works and experiences that illustrate the impact and growth of our alumni over the years. Join us in honoring their accomplishments and celebrating the spirit of our alumni network.\"', 'th (7).jpeg', '2024-08-03 19:28:07'),
(7, 'Alumni Meet', '2024-07-05T10:24', '\"The Alumni Meet is an opportunity for former students to reconnect, reminisce, and celebrate their shared experiences. This annual gathering brings together alumni from various graduating classes for an evening of networking, engaging discussions, and festive activities. Attendees can catch up with old friends, explore new opportunities, and strengthen the bonds within our alumni community. The event features inspiring talks, interactive sessions, and a chance to reflect on the journey from campus to career. Join us to celebrate our collective achievements and foster lasting connections.\"', 'th (5).jpeg', '2024-08-10 10:25:39'),
(8, 'Career Development Sessions', '2024-08-07T10:02', 'Alumni events can be both entertaining and educational. Your institution can host webinars/sessions where students can interact with alumni. Invite successful alumni for an Ask Me Anything session where the students can ask questions related to the alumni’s role/profession. \r\n\r\nStudents can ask questions about the work culture, their daily office routine, and the skills required to be placed in similar industries. Sessions like these can be a perfect ice-breaker for the students to form professional connections with alumni. \r\n\r\nHost upskilling and learning sessions where alumni from a specific stream such as data science can guide students and younger alumni on how to shape their careers. You can also bring alumni entrepreneurs to shed some light on how a start-up works and give them a roadmap on how to plan things while establishing one.', 'th (6).jpeg', '2024-08-12 22:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(1, 'Partik Ashok Yadav', 'elvish@gmail.com', 'demo', 'demo', '2024-08-05'),
(2, 'Partik Ashok Yadav', 'elvish@gmail.com', 'demo', '11111111111111111', '2024-08-06'),
(3, 'Partik Ashok Yadav', 'elvish@gmail.com', 'demo', '111', '2024-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `description`, `date`) VALUES
(1, 'th.jpeg', '\"Relive the highlights of our alumni gatherings through this visual gallery.\"', '2024-07-19 09:48:16'),
(2, 'th (1).jpeg', '\"Discover cherished moments from our alumni events in this curated gallery.\"', '2024-07-22 19:27:11'),
(3, 'th (2).jpeg', '\"Browse through snapshots of unforgettable experiences shared by our alumni.\"', '2024-07-22 19:27:29'),
(4, 'th (3).jpeg', '\"Experience the vibrant atmosphere of our alumni events captured in photos.\"', '2024-07-22 19:27:50'),
(10, 'th (8).jpeg', '\"Celebrate past alumni events with this collection of memorable images.\"', '2024-08-09 20:22:53'),
(11, 'th (4).jpeg', '\"View the dynamic moments from our alumni reunions in this photo gallery.\"', '2024-08-09 20:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `description` varchar(16000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `company` varchar(100) NOT NULL,
  `postedby` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `title`, `location`, `description`, `date`, `company`, `postedby`) VALUES
(8, 'Full Stack WordPress developer ', 'Bengaluru Area', 'About the job\r\nExperience: 4.00 + years\r\n\r\nSalary: INR 840000-900000 / year (based on experience)\r\n\r\nExpected Notice Period: 30 Days\r\n\r\nShift: (GMT+05:30) Asia/Kolkata (IST)\r\n\r\nOpportunity Type: Remote\r\n\r\nPlacement Type: Full time Permanent Position\r\n\r\n(*Note: This is a requirement for Uplers)\r\n\r\nWhat do you need for this opportunity?\r\n\r\nPrimary Skills:\r\n\r\nCSS, Communication Skills, HTML, Proactiveness, PHP, WooCommerce, Git, WordPress\r\n\r\nUplers is Looking for: \r\n\r\nJob Description:\r\n\r\nWe are seeking an experienced WordPress Fullstack Developer with a minimum of 5 years of hands-on experience in developing and maintaining WordPress websites. As a key member of our development team, you will be responsible for both front-end and back-end development, including creating WordPress themes and plugins, managing website integrations and migrations, and ensuring high-performance and availability.', '2024-07-14', 'Uplers', 'rohan@gmail.com'),
(15, 'Web Designer', 'india', 'We are seeking a highly creative and skilled Web Designer to join our team. The ideal candidate will have extensive experience in designing, building, and enhancing websites. You should have a solid understanding of user experience and a proven ability to create websites that are intuitive, user-friendly, and adhere to design standards and specifications.\r\n\r\n\r\nYou’ll work closely with marketing team to conceptualise websites and web campaigns as per client briefs, delivering high quality, innovative and attention-grabbing work. You will need to be able to multi-task between campaigns and handle multiple accounts simultaneously.**Job Title: Experienced Web Designer*\r\n\r\nRequirements added by the job poster\r\nProfessional in English\r\n3+ years of work experience with WordPress\r\n', '2024-08-10', 'Think Little Big Design', 'admin@gmail.com'),
(16, 'Application Developer ', 'india', 'Project Role : Application Developer,\r\n\r\nProject Role Description : Design, build and configure applications to meet business process and application requirements.\r\n\r\nMust have skills : SAP Analytics Cloud Development.\r\n\r\nGood to have skills : NA.\r\n\r\nMinimum 2 Year(s) Of Experience Is Required.\r\n\r\nEducational Qualification : SAP Analytics Cloud Development.\r\n\r\nSummary: As an IT Service Management Representative for Application Technical Support, you will be responsible for managing the delivery of IT production systems and services, ensuring client satisfaction and minimizing risk to services. Your typical day will involve providing operational support to ensure production systems and devices are online and available, with a focus on SAP Analytics Cloud Development. Roles & Responsibilities: - Provide technical support for SAP Analytics Cloud Development, including troubleshooting and issue resolution. - Collaborate with cross-functional teams to ensure timely resolution of incidents and problems, utilizing ITIL best practices. - Contribute to the development and maintenance of IT service management processes and procedures, ensuring compliance with organizational policies and standards. - Participate in the planning and execution of IT service management projects, including testing and deployment of new systems and services. - Maintain accurate documentation of IT service management activities, including incident and problem records, change requests, and service level agreements. Professional & Technical Skills: - Must To Have Skills: Experience in SAP Analytics Cloud Development. - Good To Have Skills: Knowledge of ITIL best practices. - Strong understanding of IT service management processes and procedures. - Experience with incident and problem management, including root cause analysis and resolution. - Experience with change management, including testing and deployment of new systems and services. Additional Information: - The candidate should have a minimum of 3 years of experience in SAP Analytics Cloud Development. - The ideal candidate will possess a strong educational background in computer science, information technology, or a related field, along with a proven track record of delivering high-quality IT service management solutions. - This position is based at our Bengaluru office.\r\n', '2024-08-11', 'Accenture in India', 'harsh@gmail.com'),
(17, 'Java Fullstack Developer ', 'Pune, Maharashtra, India ', 'Job Role : Java Fullstack Developer\r\nLocation : Hyderabad, Pune, Indore\r\nExperience : 4 to 7 yrs\r\n\r\nSkills Required: Java, Spring, Redis, Postgres, MySQL, Discourse, gRPC, Kubernetes, Terraform, Docker, Prometheus, Grafana, TypeScript/JavaScript, React/Angualar, HTML/CSS, GitLab CICD\r\n\r\nBuild next-generation web-based tooling with a focus on the backend solutions\r\n\r\nCollaborate closely with the design team to realize exceptional end user experiences\r\n\r\nBuild and maintain reusable Java/JavaScript/python/Nodejs components while adhering to coding standards and best practices\r\n\r\nCollaborate with design/frontend teams to deliver optimized backend solution\r\n\r\nContinually improve processes by volunteering new approaches towards developer productivity, product quality, and team efficiency\r\n\r\nDevelop and maintain CI/CD pipelines for various applications and services.\r\n\r\nAutomate deployment, scaling, and management of containerized applications.\r\n\r\nManage configuration management tools such as Terraform, Ansible, Chef, or Puppet to automate system configuration.', '2024-08-11', 'Tata Consultancy Services', 'harsh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `about` varchar(10000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `about`, `image`) VALUES
(1, 'Alumni Management System', 'alumni_manage@gmail.com', '+91 1234567899', 'College Name has been a leading institution of higher learning since its founding in [Year]. With a commitment to academic excellence and a vibrant campus community, our college offers a wide range of programs designed to prepare students for success in todayglobal society. Our faculty are experts in their fields, and our state-of-the-art facilities provide an environment where students can thrive.\r\nWe invite you to explore our campus, learn about our history, and discover how College Name can help you achieve your academic and career ', 'Alumni-event.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `middlename` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `connected_to` varchar(100) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `receipt` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `middlename`, `gender`, `batch`, `course`, `connected_to`, `image`, `email`, `password`, `contact`, `address`, `receipt`, `role`, `reg_date`, `status`) VALUES
(1, 'Rahul', 'Chougule', 'Vijay', 'male', '2024-06', 'BCA', 'Colllege/Instituted ', '20220521_123834(0)-01.jpeg', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '0', '', '', 'admin', '2024-08-05 17:12:36', ''),
(39, 'Rohan', 'Patil', 'Namdev', 'male', '1999', 'Master of Computer Applications (MCA)', 'amazon', 'undraw_profile_2.svg', 'rohan@gmail.com', '202cb962ac59075b964b07152d234b70', '9898789098', 'Mangalwar Peth Mali Galli Miraj', 'map.png', 'user', '2024-08-11 09:33:52', 'verified'),
(40, 'Partik', 'yadav', 'ashok', 'male', '1999', 'Master of Computer Applications (MCA)', 'sss', 'undraw_profile.svg', 'partik@gmail.com', '202cb962ac59075b964b07152d234b70', '1111111111', 'sangli', 'index.png', 'user', '2024-08-20 14:59:01', 'verified'),
(41, 'vedant', 'bhandare', 'prakesh', 'male', '1999', 'Master of Computer Applications (MCA)', 'amazon', 'undraw_profile_2.svg', 'vedant@gmail.com', '202cb962ac59075b964b07152d234b70', '9989898989', 'Mangalwar Peth Mali Galli Miraj', 'Screenshot 2024-03-22 203208.png', 'user', '2024-08-20 14:59:10', 'verified'),
(42, 'harshvardhan', 'Patil', 'mahaveer', 'male', '1999', 'Master of Computer Applications (MCA)', 'tcs', 'undraw_Pic_profile_re_7g2h.png', 'harsh@gmail.com', '202cb962ac59075b964b07152d234b70', '9898789098', 'Mangalwar Peth Mali Galli Miraj', 'Screenshot (18).png', 'user', '2024-08-20 15:00:06', 'verified'),
(43, 'akshy', 'Yadav', 'prakesh', 'male', '1999', 'Master of Computer Applications (MCA)', 'tccs', '', 'akshy@gmail.com', '202cb962ac59075b964b07152d234b70', '8989898989', 'Mangalwar Peth Mali Galli Miraj', 'Untitled-1.png', 'user', '2024-08-13 06:39:23', 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
