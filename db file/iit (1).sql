-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 02:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iit`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_news`
--

CREATE TABLE `about_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_news`
--

INSERT INTO `about_news` (`id`, `name`, `title`, `description`, `image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Divya Sampark I-Hub will encourage startups', 'Jagran', '<p><span style=\"text-align: var(--bs-body-text-align);\">Divyasampark would act as a technology provider for Cyber-Physical Systems and allied technologies. It will facilitate creation of knowledge, encourage startups and promote collaboration within IIT Roorkee as well as across the country</span><br></p><p>                    <br></p>', '1701079284.png', 1, 2, 2, '2023-10-13 02:40:01', '2023-11-27 05:01:24'),
(3, 'Webinar on “Understanding Innovation Ecosystem and Funding Opportunities”', 'Crazy News India', '<p><span style=\"text-align: var(--bs-body-text-align);\"> Mr. Manish Anand  from Divyasampark ,briefed about  ‘Understanding Innovation Ecosystem and Funding Opportunities”,  the set up at the Indian Institute of Technology (IIT) Roorkee, one of the most innovative projects undertaken by the institute and the Government of India and financially supported by the Department of Science and Technology, Government of India. </span><br></p><p>                    <br></p>', '1697182832.webp', 1, 2, NULL, '2023-10-13 02:40:32', '2023-10-13 02:40:32'),
(4, 'Ihub IIT Roorkee, Uttarakhand police join hands for Devbhoomi Cyber Hackathon 2022', 'India Today', '<p><span style=\"text-align: var(--bs-body-text-align);\">Indian Institute of Technology Roorkee (IIT Roorkee), iHUB DivyaSampark, in collaboration with Uttarakhand Police, is organising the \'Devbhoomi Cyber Hackathon 2022\'. The second edition of this hackathon aims to generate technology-based solutions for SMART policing per the vision of the Hon’ble Prime Minister of India.</span><br></p><p>                    <br></p>', '1697182867.png', 1, 2, NULL, '2023-10-13 02:41:07', '2023-10-13 02:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `advisors`
--

CREATE TABLE `advisors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advisors`
--

INSERT INTO `advisors` (`id`, `name`, `title`, `link`, `image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(4, 'R P Sharma', 'CEO', 'rpsharmaceo.com', '1701078845.jpg', 1, 2, 2, '2023-11-07 06:35:58', '2023-11-27 04:54:05');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` tinytext NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1: Published, 0: Unpublished',
  `description` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `title`, `subtitle`, `status`, `description`, `created_at`, `updated_at`) VALUES
(8, '1701083884.jpg', 'Divyasampark I-Hub a reality at IIT Roorkee', 'It is being spearheaded by Manish Anand in his capacity as the CEO of the Company.', 1, '<p style=\"margin-bottom: 1.2em; font-family: Lora, serif; line-height: 1.75; font-size: 1.1em; color: rgb(33, 37, 41);\">Divyasampark I-Hub Roorkee for Devices Materials and Technology Foundation, intended to serve as a cyber-physical systems (CPS) technology hub and promote technology innovation and entrepreneurship in the CPS domain, is fully functional at Indian Institute of Technology (IIT) Roorkee.</p><p style=\"margin-bottom: 1.2em; font-family: Lora, serif; line-height: 1.75; font-size: 1.1em; color: rgb(33, 37, 41);\">It is being spearheaded by Manish Anand in his capacity as the CEO of the Company. Manish Anand, an alumnus of IIT Kanpur, holds a B. Tech degree in Materials and Metallurgical Engineering and possesses over 15 years of extensive experience in business development, financial planning and strategic consultancy.</p><p style=\"margin-bottom: 1.2em; font-family: Lora, serif; line-height: 1.75; font-size: 1.1em; color: rgb(33, 37, 41);\">He has worked with several multinational companies in India and abroad. Holder of MS degree in Material Science and Engineering from Gwangju Institute of Science and Technology (GIST), South Korea and an MBA degree in Technology and Innovation Management from Korea Advanced Institute of Science and Technology (KAIST), Seoul Campus, Anand has co-founded two social ventures in the health and education sectors. Anand may be reached at ceo.tih@iitr.ac.in.</p>', '2023-11-27 06:18:04', '2023-11-27 06:18:04');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(8, 'News', '2023-11-27 06:15:56', '2023-11-27 06:15:56');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category_relation`
--

CREATE TABLE `blog_category_relation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_category_relation`
--

INSERT INTO `blog_category_relation` (`id`, `blog_id`, `blog_category_id`, `created_at`, `updated_at`) VALUES
(14, 8, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `b_o_d_s`
--

CREATE TABLE `b_o_d_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `b_o_d_s`
--

INSERT INTO `b_o_d_s` (`id`, `name`, `title`, `link`, `image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, 'Akshay Dvivedi', 'Dean SRIC, IIT Roorkee', 'https://www.linkedin.com/in/dr-akshay-dvivedi-8935276/', '1701082185.png', 1, 2, 2, '2023-10-16 02:26:24', '2023-11-27 05:49:45'),
(6, 'Sudeb Dasgupta', 'Professor, Department of Electronics and Communication Engineering, IIT Roorkee', 'https://in.linkedin.com/in/sudeb-dasgupta-2b19b64', '1697441209.png', 1, 2, NULL, '2023-10-16 02:26:49', '2023-10-16 02:26:49'),
(7, 'Manish Anand', 'Chief Executive Officer iHUB DivyaSampark', 'https://in.linkedin.com/in/manish-anand-99b7ab5', '1697441232.png', 1, 2, NULL, '2023-10-16 02:27:12', '2023-10-16 02:27:12'),
(8, 'Shubham Shinde', 'Associate Director', 'shubhamshinde.com', '1699356896.jpg', 1, 2, NULL, '2023-11-07 06:34:56', '2023-11-07 06:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `career_transitions`
--

CREATE TABLE `career_transitions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_transitions`
--

INSERT INTO `career_transitions` (`id`, `name`, `title`, `description`, `image`, `course_id`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(6, 'D Rajesh Sahoo', 'Machine Learning Engineer | India', '<p>Intellipaat made my transition from a civil engineering graduate to an IT industry professional very smooth with its round-the-clock support, excellent curriculum, industry-standard projects, and efficient trainers.<br></p>', '1701079479.jpg', 6, 1, 2, 2, '2023-10-16 04:15:24', '2023-11-27 05:04:39'),
(7, 'Ankit Kumar', 'Data Scientist | India', '<p>Intellipaat has given me the confidence that anyone who aspires can become a data scientist because of the rich course and expert guidance. I managed to switch from a non-tech education background to becoming a data scientist.<br></p>', '1697447755.webp', 6, 1, 2, NULL, '2023-10-16 04:15:55', '2023-10-16 04:15:55'),
(8, 'Mahesh Chowdary', 'Data Scientist | Hyderabad', '<p>Today, I am a certified data scientist, and this happened after I enrolled in this program. It covers all the necessary concepts and techniques, in lucid language. I am thankful to Intellipaat for giving me this chance at career growth.<br></p>', '1697447794.webp', 6, 1, 2, NULL, '2023-10-16 04:16:34', '2023-10-16 04:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Data Science', NULL, 1, 2, NULL, '2023-10-13 11:57:03', '2023-10-13 11:57:03'),
(2, 'sadsadasd', NULL, 1, 2, NULL, '2023-10-13 12:43:09', '2023-10-13 12:43:09'),
(3, 'Grassroots Innovators Support Program', NULL, 1, 2, NULL, '2023-10-13 15:56:07', '2023-10-13 15:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `colabs`
--

CREATE TABLE `colabs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: Colab, 1: Activity Glimpses',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colabs`
--

INSERT INTO `colabs` (`id`, `name`, `image`, `type`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Our Collabs 1', '1697049442.jpg', 0, 1, 2, NULL, '2023-10-11 13:37:22', '2023-10-11 13:39:44'),
(2, 'Our Spokes', '1697049500.png', 1, 1, 2, NULL, '2023-10-11 13:38:20', '2023-10-11 13:38:20'),
(3, 'Spoke Hubs Slide', '1697049528.jpg', 0, 1, 2, NULL, '2023-10-11 13:38:48', '2023-10-11 13:38:48'),
(4, 'All colab glimpses', '1697049549.png', 1, 1, 2, NULL, '2023-10-11 13:39:09', '2023-10-11 13:39:09'),
(5, 'Arjun Mehta', '1701079036.png', 0, 1, 2, NULL, '2023-11-27 04:57:16', '2023-11-27 04:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `description`, `image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Intellipaat Ltd', NULL, '1697216231.webp', 1, 2, NULL, '2023-10-13 11:57:11', '2023-10-13 11:57:11'),
(2, 'Grassroots Innovators Support Program', NULL, '1697230581.png', 1, 2, NULL, '2023-10-13 15:56:21', '2023-10-13 15:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `consultancy_services`
--

CREATE TABLE `consultancy_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consultancy_services`
--

INSERT INTO `consultancy_services` (`id`, `title`, `subtitle`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Research and Development Consulting', 'We assist organizations and individuals in harnessing the power of research and development. Our experts provide guidance on ideation, project execution, and research strategy.', 1, 2, NULL, '2023-11-27 07:31:31', '2023-11-27 07:31:31'),
(3, 'Innovation Support', 'We nurture innovation by creating an environment where novel ideas can flourish. Our team helps innovators transform their concepts into reality through mentorship, prototyping, and access to resources.', 1, 2, NULL, '2023-11-27 07:31:43', '2023-11-27 07:31:43'),
(4, 'Entrepreneurship Development', 'iHub Divyasampark is dedicated to promoting entrepreneurship. We offer guidance and support to aspiring entrepreneurs, helping them navigate the complexities of starting and scaling their businesses.', 1, 2, NULL, '2023-11-27 07:31:57', '2023-11-27 07:31:57'),
(5, 'Technical Expertise', 'Our team comprises subject matter experts in various fields, from engineering and technology to management and social sciences. We offer technical consultancy to help organizations tackle complex challenges.', 1, 2, NULL, '2023-11-27 07:32:09', '2023-11-27 07:32:09'),
(6, 'Market Research and Analysis', 'Stay ahead of the competition with our market research and analysis services. We provide insights into market trends, customer behavior, and competition, enabling you to make informed decisions.', 1, 2, NULL, '2023-11-27 07:32:19', '2023-11-27 07:32:19'),
(7, 'Project Management', 'From planning to execution, we help you manage your projects efficiently. Our project management services ensure that your initiatives are on track and on budget.', 1, 2, NULL, '2023-11-27 07:32:31', '2023-11-27 07:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` tinyint(4) DEFAULT 1 COMMENT '0: internship, 1: certificate',
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fee` varchar(255) DEFAULT NULL,
  `trainer` varchar(255) DEFAULT NULL,
  `seats` varchar(255) DEFAULT NULL,
  `enrolled` varchar(255) DEFAULT NULL,
  `favourites` varchar(255) DEFAULT NULL,
  `schedule` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text DEFAULT NULL,
  `publishstatus` tinyint(4) DEFAULT 0 COMMENT '0: unpublished, 1: published',
  `other2` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT '5',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `type`, `title`, `subtitle`, `image`, `company_id`, `fee`, `trainer`, `seats`, `enrolled`, `favourites`, `schedule`, `category_id`, `description`, `publishstatus`, `other2`, `rating`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(6, 1, 'Advanced Certification in Data Science and AI', 'Learn Data Science and AI from IIT Faculty with Campus Immersion @ IIT Roorkee', '1701079535.png', 1, '120,000', 'Parakash Raina', '200', '188', '122', '5.00 pm - 7.00 pm', 1, 'Gain expertise in Machine Learning and Artificial Intelligence through an advanced certification program in Data Science and AI offered by iHUB DivyaSampark, a Technology Innovation Hub of IIT Roorkee, in collaboration with Intellipaat. Benefit from learning directly from IIT Faculty and industry experts, with personalized 1:1 mentorship, in this immersive online bootcamp.', 1, '1697451115.pdf', '4.5', 1, 2, NULL, '2023-10-16 04:02:12', '2023-11-27 05:05:35'),
(7, 0, 'Executive Post Graduate Certification in Data Science & Artificial Intelligence', 'Learn from IIT Faculty & Industry Experts with Guaranteed Job Interviews. Campus Immersion at IIT Roorkee.', '1698241381.png', 1, '120,000', 'Parakash Raina', '122', '121', '53', '5.00 pm - 7.00 pm', 1, 'Master machine learning and artificial intelligence skills with this advanced data science and artificial intelligence course from iHub IIT Roorkee. Learn from IIT faculty and industry experts with 1:1 mentorship in this intensive online bootcamp. Top 2 performers from each batch may get a fellowship worth Rs. 80,000, plus the opportunity to showcase their startup ideas and secure incubation support of upto Rs. 50 Lakhs for their startup from iHUB DivyaSampark, IIT Roorkee.', 1, '1697451088.pdf', '4.5', 1, 2, NULL, '2023-10-16 05:07:33', '2023-10-25 08:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `course_tetimonials`
--

CREATE TABLE `course_tetimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_tetimonials`
--

INSERT INTO `course_tetimonials` (`id`, `name`, `title`, `description`, `image`, `course_id`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(7, 'Nishchay Agrawal', 'Data Engineer | India', '<p>Intellipaat helped me acquire a solid job in my third year of B.Tech. I received seven job offers, with 30 LPA as the highest CTC. Thanks to Intellipaat for making my career successful.<br></p>', '1701079414.png', 6, 1, 2, 2, '2023-10-16 04:13:32', '2023-11-27 05:03:34'),
(8, 'Gaurav Saboo', 'Senior Technical Associate | India', '<p>I got promoted to senior technical associate with a 60% hike after completing this course from Intellipaat. The training taught me new skills and how to implement them in my current role.<br></p>', '1697447650.webp', 6, 1, 2, NULL, '2023-10-16 04:14:10', '2023-10-16 04:14:10'),
(9, 'Melwin Rodrigues', 'Data Scientist | India', '<p>Becoming a data scientist after working as a customer service agent was possible only due to expert guidance from Intellipaat trainers. Even after working for 10 years in customer care, I am a data scientist today.<br></p>', '1697447687.webp', 6, 1, 2, NULL, '2023-10-16 04:14:47', '2023-10-16 04:14:47');

-- --------------------------------------------------------

--
-- Table structure for table `c_w_c_a_s`
--

CREATE TABLE `c_w_c_a_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_w_c_a_s`
--

INSERT INTO `c_w_c_a_s` (`id`, `name`, `course_id`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(15, 'Individuals with a bachelor’s degree and a keen interest to learn AI and Data Science', 6, 1, 2, NULL, '2023-10-16 04:16:46', '2023-10-16 04:16:46'),
(16, 'IT professionals looking for a career transition as Data Scientists and Artificial Intelligence Engineers', 6, 1, 2, NULL, '2023-10-16 04:16:52', '2023-10-16 04:16:52'),
(17, 'Professionals aiming to move ahead in their IT career', 6, 1, 2, NULL, '2023-10-16 04:16:59', '2023-10-16 04:16:59'),
(18, 'Artificial Intelligence and Business Intelligence professionals', 6, 1, 2, NULL, '2023-10-16 04:17:05', '2023-10-16 04:17:05'),
(19, 'Developers and Project Managers', 6, 1, 2, NULL, '2023-10-16 04:17:10', '2023-10-16 04:17:10'),
(21, 'Freshers who aspire to build their career in the field of Artificial Intelligence and Data Science', 6, 1, 2, NULL, '2023-10-16 04:20:25', '2023-10-16 04:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '4801682f-b735-4dbc-a575-8ca567caa983', 'database', 'default', '{\"uuid\":\"4801682f-b735-4dbc-a575-8ca567caa983\",\"displayName\":\"App\\\\Jobs\\\\SendContactUsEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendContactUsEmail\",\"command\":\"O:27:\\\"App\\\\Jobs\\\\SendContactUsEmail\\\":4:{s:4:\\\"name\\\";s:15:\\\"Muhammad Arslan\\\";s:5:\\\"email\\\";s:24:\\\"calebjanaltair@gmail.com\\\";s:7:\\\"subject\\\";s:20:\\\"Help me with project\\\";s:7:\\\"message\\\";s:42:\\\"Hi, Just help me with this projectsadadsad\\\";}\"}}', 'TypeError: htmlspecialchars(): Argument #1 ($string) must be of type string, Illuminate\\Mail\\Message given in C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\helpers.php:124\nStack trace:\n#0 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\helpers.php(124): htmlspecialchars(Object(Illuminate\\Mail\\Message), 11, \'UTF-8\', true)\n#1 C:\\xampp\\htdocs\\ihub\\storage\\framework\\views\\8a0e80f7c81a051cdd86dc503c398df4.php(12): e(Object(Illuminate\\Mail\\Message))\n#2 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(124): require(\'C:\\\\xampp\\\\htdocs...\')\n#3 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(125): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()\n#4 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire(\'C:\\\\xampp\\\\htdocs...\', Array)\n#5 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(72): Illuminate\\View\\Engines\\PhpEngine->evaluatePath(\'C:\\\\xampp\\\\htdocs...\', Array)\n#6 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(195): Illuminate\\View\\Engines\\CompilerEngine->get(\'C:\\\\xampp\\\\htdocs...\', Array)\n#7 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(178): Illuminate\\View\\View->getContents()\n#8 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(147): Illuminate\\View\\View->renderContents()\n#9 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(402): Illuminate\\View\\View->render()\n#10 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(377): Illuminate\\Mail\\Mailer->renderView(\'emails.contactu...\', Array)\n#11 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(289): Illuminate\\Mail\\Mailer->addContent(Object(Illuminate\\Mail\\Message), \'emails.contactu...\', NULL, NULL, Array)\n#12 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(205): Illuminate\\Mail\\Mailer->send(\'emails.contactu...\', Array, Object(Closure))\n#13 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#14 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#15 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(326): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#16 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(270): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\ContactUsMail))\n#17 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(124): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\ContactUsMail))\n#18 C:\\xampp\\htdocs\\ihub\\app\\Jobs\\SendContactUsEmail.php(33): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\ContactUsMail))\n#19 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendContactUsEmail->handle()\n#20 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#21 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#22 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#23 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#24 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#25 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#26 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#27 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#28 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendContactUsEmail), false)\n#29 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#30 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#31 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#32 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendContactUsEmail))\n#33 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#34 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#35 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#36 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#37 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#38 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#39 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#40 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#41 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#42 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#43 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#44 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#45 C:\\xampp\\htdocs\\ihub\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#46 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#47 C:\\xampp\\htdocs\\ihub\\vendor\\symfony\\console\\Application.php(1081): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 C:\\xampp\\htdocs\\ihub\\vendor\\symfony\\console\\Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#49 C:\\xampp\\htdocs\\ihub\\vendor\\symfony\\console\\Application.php(174): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#50 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#51 C:\\xampp\\htdocs\\ihub\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#52 {main}\n\nNext Illuminate\\View\\ViewException: htmlspecialchars(): Argument #1 ($string) must be of type string, Illuminate\\Mail\\Message given (View: C:\\xampp\\htdocs\\ihub\\resources\\views\\emails\\contactus.blade.php) in C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\helpers.php:124\nStack trace:\n#0 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(60): Illuminate\\View\\Engines\\CompilerEngine->handleViewException(Object(TypeError), 0)\n#1 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(72): Illuminate\\View\\Engines\\PhpEngine->evaluatePath(\'C:\\\\xampp\\\\htdocs...\', Array)\n#2 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(195): Illuminate\\View\\Engines\\CompilerEngine->get(\'C:\\\\xampp\\\\htdocs...\', Array)\n#3 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(178): Illuminate\\View\\View->getContents()\n#4 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(147): Illuminate\\View\\View->renderContents()\n#5 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(402): Illuminate\\View\\View->render()\n#6 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(377): Illuminate\\Mail\\Mailer->renderView(\'emails.contactu...\', Array)\n#7 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(289): Illuminate\\Mail\\Mailer->addContent(Object(Illuminate\\Mail\\Message), \'emails.contactu...\', NULL, NULL, Array)\n#8 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(205): Illuminate\\Mail\\Mailer->send(\'emails.contactu...\', Array, Object(Closure))\n#9 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#10 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#11 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(326): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#12 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(270): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\ContactUsMail))\n#13 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(124): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\ContactUsMail))\n#14 C:\\xampp\\htdocs\\ihub\\app\\Jobs\\SendContactUsEmail.php(33): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\ContactUsMail))\n#15 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendContactUsEmail->handle()\n#16 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#17 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#18 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#19 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#20 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#21 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#22 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#23 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#24 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendContactUsEmail), false)\n#25 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#26 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#27 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#28 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendContactUsEmail))\n#29 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#30 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#31 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#32 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#33 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#34 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#35 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#36 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#37 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#38 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#39 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#40 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#41 C:\\xampp\\htdocs\\ihub\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#42 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#43 C:\\xampp\\htdocs\\ihub\\vendor\\symfony\\console\\Application.php(1081): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 C:\\xampp\\htdocs\\ihub\\vendor\\symfony\\console\\Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 C:\\xampp\\htdocs\\ihub\\vendor\\symfony\\console\\Application.php(174): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 C:\\xampp\\htdocs\\ihub\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 C:\\xampp\\htdocs\\ihub\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 {main}', '2023-10-12 05:40:21'),
(2, '33510732-63ed-4da2-812e-271b7cbbe63c', 'database', 'default', '{\"uuid\":\"33510732-63ed-4da2-812e-271b7cbbe63c\",\"displayName\":\"App\\\\Jobs\\\\SendContactUsEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendContactUsEmail\",\"command\":\"O:27:\\\"App\\\\Jobs\\\\SendContactUsEmail\\\":4:{s:4:\\\"name\\\";s:15:\\\"Muhammad Arslan\\\";s:5:\\\"email\\\";s:24:\\\"calebjanaltair@gmail.com\\\";s:7:\\\"subject\\\";s:20:\\\"Help me with project\\\";s:7:\\\"message\\\";s:11:\\\"adasdasdasd\\\";}\"}}', 'Symfony\\Component\\Mailer\\Exception\\TransportException: Connection could not be established with host \"ssl://bzbeetech.com:465\": stream_socket_client(): php_network_getaddresses: getaddrinfo for bzbeetech.com failed: No such host is known.  in E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\Stream\\SocketStream.php:154\nStack trace:\n#0 [internal function]: Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\SocketStream->Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\{closure}(2, \'stream_socket_c...\', \'E:\\\\iHub v4.0\\\\ve...\', 157)\n#1 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\Stream\\SocketStream.php(157): stream_socket_client(\'ssl://bzbeetech...\', 0, \'\', 60.0, 4, Resource id #900)\n#2 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(275): Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\SocketStream->initialize()\n#3 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(213): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->start()\n#4 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\AbstractTransport.php(69): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->doSend(Object(Symfony\\Component\\Mailer\\SentMessage))\n#5 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(137): Symfony\\Component\\Mailer\\Transport\\AbstractTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#6 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(542): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#7 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(304): Illuminate\\Mail\\Mailer->sendSymfonyMessage(Object(Symfony\\Component\\Mime\\Email))\n#8 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(205): Illuminate\\Mail\\Mailer->send(\'emails.contactu...\', Array, Object(Closure))\n#9 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#10 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#11 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(326): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#12 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(270): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\ContactUsMail))\n#13 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(124): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\ContactUsMail))\n#14 E:\\iHub v4.0\\app\\Jobs\\SendContactUsEmail.php(33): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\ContactUsMail))\n#15 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendContactUsEmail->handle()\n#16 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#17 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#18 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#19 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#20 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#21 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#22 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#23 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#24 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendContactUsEmail), false)\n#25 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#26 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#27 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#28 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendContactUsEmail))\n#29 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#30 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#31 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#32 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#33 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#34 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#35 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#36 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#37 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#38 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#39 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#40 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#41 E:\\iHub v4.0\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#42 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#43 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(1081): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(174): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 E:\\iHub v4.0\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 {main}', '2023-11-06 02:41:52'),
(3, '5fb9f61d-64a3-42d6-b3f6-2d978c8531d5', 'database', 'default', '{\"uuid\":\"5fb9f61d-64a3-42d6-b3f6-2d978c8531d5\",\"displayName\":\"App\\\\Jobs\\\\SendContactUsEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendContactUsEmail\",\"command\":\"O:27:\\\"App\\\\Jobs\\\\SendContactUsEmail\\\":4:{s:4:\\\"name\\\";s:15:\\\"Muhammad Arslan\\\";s:5:\\\"email\\\";s:24:\\\"calebjanaltair@gmail.com\\\";s:7:\\\"subject\\\";s:20:\\\"Help me with project\\\";s:7:\\\"message\\\";s:14:\\\"adasdasdasdasd\\\";}\"}}', 'Symfony\\Component\\Mailer\\Exception\\TransportException: Connection could not be established with host \"ssl://bzbeetech.com:465\": stream_socket_client(): php_network_getaddresses: getaddrinfo for bzbeetech.com failed: No such host is known.  in E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\Stream\\SocketStream.php:154\nStack trace:\n#0 [internal function]: Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\SocketStream->Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\{closure}(2, \'stream_socket_c...\', \'E:\\\\iHub v4.0\\\\ve...\', 157)\n#1 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\Stream\\SocketStream.php(157): stream_socket_client(\'ssl://bzbeetech...\', 0, \'\', 60.0, 4, Resource id #938)\n#2 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(275): Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\SocketStream->initialize()\n#3 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(213): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->start()\n#4 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\AbstractTransport.php(69): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->doSend(Object(Symfony\\Component\\Mailer\\SentMessage))\n#5 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(137): Symfony\\Component\\Mailer\\Transport\\AbstractTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#6 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(542): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#7 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(304): Illuminate\\Mail\\Mailer->sendSymfonyMessage(Object(Symfony\\Component\\Mime\\Email))\n#8 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(205): Illuminate\\Mail\\Mailer->send(\'emails.contactu...\', Array, Object(Closure))\n#9 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#10 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#11 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(326): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#12 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(270): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\ContactUsMail))\n#13 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(124): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\ContactUsMail))\n#14 E:\\iHub v4.0\\app\\Jobs\\SendContactUsEmail.php(33): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\ContactUsMail))\n#15 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendContactUsEmail->handle()\n#16 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#17 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#18 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#19 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#20 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#21 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#22 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#23 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#24 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendContactUsEmail), false)\n#25 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#26 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#27 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#28 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendContactUsEmail))\n#29 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#30 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#31 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#32 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#33 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#34 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#35 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#36 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#37 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#38 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#39 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#40 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#41 E:\\iHub v4.0\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#42 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#43 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(1081): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(174): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 E:\\iHub v4.0\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 {main}', '2023-11-06 02:42:03');
INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(4, '870b357c-f1d0-415c-ae42-fab1f1411b7d', 'database', 'default', '{\"uuid\":\"870b357c-f1d0-415c-ae42-fab1f1411b7d\",\"displayName\":\"App\\\\Jobs\\\\SendContactUsEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendContactUsEmail\",\"command\":\"O:27:\\\"App\\\\Jobs\\\\SendContactUsEmail\\\":4:{s:4:\\\"name\\\";s:8:\\\"John Doe\\\";s:5:\\\"email\\\";s:24:\\\"calebjanaltair@gmail.com\\\";s:7:\\\"subject\\\";s:23:\\\"Simple Mail for Testing\\\";s:7:\\\"message\\\";s:573:\\\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\\\";}\"}}', 'Symfony\\Component\\Mailer\\Exception\\TransportException: Connection could not be established with host \"ssl://bzbeetech.com:465\": stream_socket_client(): php_network_getaddresses: getaddrinfo for bzbeetech.com failed: No such host is known.  in E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\Stream\\SocketStream.php:154\nStack trace:\n#0 [internal function]: Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\SocketStream->Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\{closure}(2, \'stream_socket_c...\', \'E:\\\\iHub v4.0\\\\ve...\', 157)\n#1 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\Stream\\SocketStream.php(157): stream_socket_client(\'ssl://bzbeetech...\', 0, \'\', 60.0, 4, Resource id #941)\n#2 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(275): Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\SocketStream->initialize()\n#3 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(213): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->start()\n#4 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\AbstractTransport.php(69): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->doSend(Object(Symfony\\Component\\Mailer\\SentMessage))\n#5 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(137): Symfony\\Component\\Mailer\\Transport\\AbstractTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#6 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(542): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#7 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(304): Illuminate\\Mail\\Mailer->sendSymfonyMessage(Object(Symfony\\Component\\Mime\\Email))\n#8 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(205): Illuminate\\Mail\\Mailer->send(\'emails.contactu...\', Array, Object(Closure))\n#9 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#10 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#11 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(326): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#12 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(270): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\ContactUsMail))\n#13 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(124): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\ContactUsMail))\n#14 E:\\iHub v4.0\\app\\Jobs\\SendContactUsEmail.php(33): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\ContactUsMail))\n#15 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendContactUsEmail->handle()\n#16 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#17 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#18 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#19 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#20 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#21 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#22 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#23 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#24 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendContactUsEmail), false)\n#25 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#26 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#27 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#28 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendContactUsEmail))\n#29 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#30 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#31 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#32 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#33 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#34 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#35 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#36 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#37 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#38 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#39 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#40 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#41 E:\\iHub v4.0\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#42 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#43 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(1081): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(174): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 E:\\iHub v4.0\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 {main}', '2023-11-06 02:42:14'),
(5, '7b8a0a03-1b4d-4e30-b470-9ccd76d8cada', 'database', 'default', '{\"uuid\":\"7b8a0a03-1b4d-4e30-b470-9ccd76d8cada\",\"displayName\":\"App\\\\Jobs\\\\SendContactUsEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendContactUsEmail\",\"command\":\"O:27:\\\"App\\\\Jobs\\\\SendContactUsEmail\\\":4:{s:4:\\\"name\\\";s:11:\\\"Arjun Mehta\\\";s:5:\\\"email\\\";s:24:\\\"calebjanaltair@gmail.com\\\";s:7:\\\"subject\\\";s:20:\\\"Help me with project\\\";s:7:\\\"message\\\";s:573:\\\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\\\";}\"}}', 'Symfony\\Component\\Mailer\\Exception\\TransportException: Connection could not be established with host \"ssl://bzbeetech.com:465\": stream_socket_client(): php_network_getaddresses: getaddrinfo for bzbeetech.com failed: No such host is known.  in E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\Stream\\SocketStream.php:154\nStack trace:\n#0 [internal function]: Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\SocketStream->Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\{closure}(2, \'stream_socket_c...\', \'E:\\\\iHub v4.0\\\\ve...\', 157)\n#1 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\Stream\\SocketStream.php(157): stream_socket_client(\'ssl://bzbeetech...\', 0, \'\', 60.0, 4, Resource id #944)\n#2 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(275): Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\SocketStream->initialize()\n#3 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(213): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->start()\n#4 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\AbstractTransport.php(69): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->doSend(Object(Symfony\\Component\\Mailer\\SentMessage))\n#5 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(137): Symfony\\Component\\Mailer\\Transport\\AbstractTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#6 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(542): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#7 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(304): Illuminate\\Mail\\Mailer->sendSymfonyMessage(Object(Symfony\\Component\\Mime\\Email))\n#8 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(205): Illuminate\\Mail\\Mailer->send(\'emails.contactu...\', Array, Object(Closure))\n#9 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#10 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#11 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(326): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#12 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(270): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\ContactUsMail))\n#13 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(124): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\ContactUsMail))\n#14 E:\\iHub v4.0\\app\\Jobs\\SendContactUsEmail.php(33): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\ContactUsMail))\n#15 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendContactUsEmail->handle()\n#16 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#17 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#18 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#19 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#20 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#21 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#22 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#23 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#24 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendContactUsEmail), false)\n#25 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#26 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#27 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#28 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendContactUsEmail))\n#29 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#30 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#31 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#32 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#33 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#34 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#35 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#36 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#37 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#38 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#39 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#40 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#41 E:\\iHub v4.0\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#42 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#43 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(1081): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(174): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 E:\\iHub v4.0\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 {main}', '2023-11-06 02:43:02'),
(6, '757604f7-1aac-4e4b-8e2e-7245eeb74bfa', 'database', 'default', '{\"uuid\":\"757604f7-1aac-4e4b-8e2e-7245eeb74bfa\",\"displayName\":\"App\\\\Jobs\\\\SendContactUsEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendContactUsEmail\",\"command\":\"O:27:\\\"App\\\\Jobs\\\\SendContactUsEmail\\\":4:{s:4:\\\"name\\\";s:15:\\\"Muhammad Arslan\\\";s:5:\\\"email\\\";s:24:\\\"calebjanaltair@gmail.com\\\";s:7:\\\"subject\\\";s:20:\\\"Help me with project\\\";s:7:\\\"message\\\";s:573:\\\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\\\";}\"}}', 'Symfony\\Component\\Mailer\\Exception\\TransportException: Connection could not be established with host \"ssl://bzbeetech.com:465\": stream_socket_client(): php_network_getaddresses: getaddrinfo for bzbeetech.com failed: No such host is known.  in E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\Stream\\SocketStream.php:154\nStack trace:\n#0 [internal function]: Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\SocketStream->Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\{closure}(2, \'stream_socket_c...\', \'E:\\\\iHub v4.0\\\\ve...\', 157)\n#1 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\Stream\\SocketStream.php(157): stream_socket_client(\'ssl://bzbeetech...\', 0, \'\', 60.0, 4, Resource id #900)\n#2 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(275): Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\SocketStream->initialize()\n#3 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(213): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->start()\n#4 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\AbstractTransport.php(69): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->doSend(Object(Symfony\\Component\\Mailer\\SentMessage))\n#5 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(137): Symfony\\Component\\Mailer\\Transport\\AbstractTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#6 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(542): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#7 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(304): Illuminate\\Mail\\Mailer->sendSymfonyMessage(Object(Symfony\\Component\\Mime\\Email))\n#8 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(205): Illuminate\\Mail\\Mailer->send(\'emails.contactu...\', Array, Object(Closure))\n#9 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#10 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#11 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(326): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#12 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(270): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\ContactUsMail))\n#13 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(124): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\ContactUsMail))\n#14 E:\\iHub v4.0\\app\\Jobs\\SendContactUsEmail.php(33): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\ContactUsMail))\n#15 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendContactUsEmail->handle()\n#16 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#17 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#18 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#19 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#20 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#21 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#22 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#23 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#24 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendContactUsEmail), false)\n#25 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#26 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#27 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#28 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendContactUsEmail))\n#29 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#30 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#31 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#32 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#33 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#34 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#35 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#36 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#37 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#38 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#39 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#40 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#41 E:\\iHub v4.0\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#42 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#43 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(1081): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(174): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 E:\\iHub v4.0\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 {main}', '2023-11-06 02:48:06'),
(7, '7a10878f-212a-4cf0-ad02-810b2dd7e6e8', 'database', 'default', '{\"uuid\":\"7a10878f-212a-4cf0-ad02-810b2dd7e6e8\",\"displayName\":\"App\\\\Jobs\\\\SendContactUsEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendContactUsEmail\",\"command\":\"O:27:\\\"App\\\\Jobs\\\\SendContactUsEmail\\\":4:{s:4:\\\"name\\\";s:15:\\\"Muhammad Arslan\\\";s:5:\\\"email\\\";s:24:\\\"calebjanaltair@gmail.com\\\";s:7:\\\"subject\\\";s:20:\\\"Help me with project\\\";s:7:\\\"message\\\";s:239:\\\"MAIL_MAILER=smtp\\r\\nMAIL_HOST=bzbeetech.com\\r\\nMAIL_PORT=465\\r\\nMAIL_USERNAME=managament@bzbeetech.com\\r\\nMAIL_PASSWORD=)YW~^a.ng4.^\\r\\nMAIL_ENCRYPTION=tls\\r\\nMAIL_FROM_ADDRESS=managament@bzbeetech.com\\r\\nMAIL_FROM_NAME=\\\"Technology Innovation Hub (TIH)\\\"\\\";}\"}}', 'Symfony\\Component\\Mailer\\Exception\\TransportException: Failed to authenticate on SMTP server with username \"managament@bzbeetech.com\" using the following authenticators: \"LOGIN\", \"PLAIN\". Authenticator \"LOGIN\" returned \"Expected response code \"235\" but got code \"535\", with message \"535 Incorrect authentication data\".\". Authenticator \"PLAIN\" returned \"Expected response code \"235\" but got code \"535\", with message \"535 Incorrect authentication data\".\". in E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\EsmtpTransport.php:224\nStack trace:\n#0 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\EsmtpTransport.php(160): Symfony\\Component\\Mailer\\Transport\\Smtp\\EsmtpTransport->handleAuth(Array)\n#1 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\EsmtpTransport.php(117): Symfony\\Component\\Mailer\\Transport\\Smtp\\EsmtpTransport->doEhloCommand()\n#2 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(254): Symfony\\Component\\Mailer\\Transport\\Smtp\\EsmtpTransport->executeCommand(\'HELO [127.0.0.1...\', Array)\n#3 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(277): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->doHeloCommand()\n#4 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(213): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->start()\n#5 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\AbstractTransport.php(69): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->doSend(Object(Symfony\\Component\\Mailer\\SentMessage))\n#6 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(137): Symfony\\Component\\Mailer\\Transport\\AbstractTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#7 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(542): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#8 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(304): Illuminate\\Mail\\Mailer->sendSymfonyMessage(Object(Symfony\\Component\\Mime\\Email))\n#9 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(205): Illuminate\\Mail\\Mailer->send(\'emails.contactu...\', Array, Object(Closure))\n#10 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#11 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#12 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(326): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#13 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(270): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\ContactUsMail))\n#14 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(124): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\ContactUsMail))\n#15 E:\\iHub v4.0\\app\\Jobs\\SendContactUsEmail.php(33): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\ContactUsMail))\n#16 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendContactUsEmail->handle()\n#17 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#18 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#19 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#20 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#21 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#22 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#23 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#24 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#25 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendContactUsEmail), false)\n#26 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#27 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#28 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#29 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendContactUsEmail))\n#30 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#31 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#32 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#33 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#34 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#35 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#36 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#37 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#38 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#39 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#40 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#41 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#42 E:\\iHub v4.0\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#43 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#44 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(1081): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(174): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 E:\\iHub v4.0\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#49 {main}', '2023-11-06 03:12:48');
INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(8, '8d6d2bd0-4bd4-4526-9eaf-a80f97dc31b7', 'database', 'default', '{\"uuid\":\"8d6d2bd0-4bd4-4526-9eaf-a80f97dc31b7\",\"displayName\":\"App\\\\Jobs\\\\SendContactUsEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendContactUsEmail\",\"command\":\"O:27:\\\"App\\\\Jobs\\\\SendContactUsEmail\\\":4:{s:4:\\\"name\\\";s:15:\\\"Muhammad Arslan\\\";s:5:\\\"email\\\";s:24:\\\"calebjanaltair@gmail.com\\\";s:7:\\\"subject\\\";s:20:\\\"Help me with project\\\";s:7:\\\"message\\\";s:239:\\\"MAIL_MAILER=smtp\\r\\nMAIL_HOST=bzbeetech.com\\r\\nMAIL_PORT=465\\r\\nMAIL_USERNAME=managament@bzbeetech.com\\r\\nMAIL_PASSWORD=)YW~^a.ng4.^\\r\\nMAIL_ENCRYPTION=tls\\r\\nMAIL_FROM_ADDRESS=managament@bzbeetech.com\\r\\nMAIL_FROM_NAME=\\\"Technology Innovation Hub (TIH)\\\"\\\";}\"}}', 'Symfony\\Component\\Mailer\\Exception\\TransportException: Connection could not be established with host \"ssl://nsmtp.iitr.ac.in:465\": stream_socket_client(): Unable to connect to ssl://nsmtp.iitr.ac.in:465 (A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond) in E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\Stream\\SocketStream.php:154\nStack trace:\n#0 [internal function]: Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\SocketStream->Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\{closure}(2, \'stream_socket_c...\', \'E:\\\\iHub v4.0\\\\ve...\', 157)\n#1 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\Stream\\SocketStream.php(157): stream_socket_client(\'ssl://nsmtp.iit...\', 0, \'\', 60.0, 4, Resource id #856)\n#2 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(275): Symfony\\Component\\Mailer\\Transport\\Smtp\\Stream\\SocketStream->initialize()\n#3 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(213): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->start()\n#4 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\AbstractTransport.php(69): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->doSend(Object(Symfony\\Component\\Mailer\\SentMessage))\n#5 E:\\iHub v4.0\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(137): Symfony\\Component\\Mailer\\Transport\\AbstractTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#6 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(542): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#7 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(304): Illuminate\\Mail\\Mailer->sendSymfonyMessage(Object(Symfony\\Component\\Mime\\Email))\n#8 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(205): Illuminate\\Mail\\Mailer->send(\'emails.contactu...\', Array, Object(Closure))\n#9 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->Illuminate\\Mail\\{closure}()\n#10 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(198): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#11 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(326): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\Mailer))\n#12 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(270): Illuminate\\Mail\\Mailer->sendMailable(Object(App\\Mail\\ContactUsMail))\n#13 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\PendingMail.php(124): Illuminate\\Mail\\Mailer->send(Object(App\\Mail\\ContactUsMail))\n#14 E:\\iHub v4.0\\app\\Jobs\\SendContactUsEmail.php(33): Illuminate\\Mail\\PendingMail->send(Object(App\\Mail\\ContactUsMail))\n#15 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendContactUsEmail->handle()\n#16 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#17 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#18 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#19 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#20 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#21 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#22 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#23 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#24 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendContactUsEmail), false)\n#25 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#26 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendContactUsEmail))\n#27 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(122): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#28 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(70): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendContactUsEmail))\n#29 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(98): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#30 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#31 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#32 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#33 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#34 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#35 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#36 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#37 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#38 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#39 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#40 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#41 E:\\iHub v4.0\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#42 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#43 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(1081): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(320): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#45 E:\\iHub v4.0\\vendor\\symfony\\console\\Application.php(174): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#46 E:\\iHub v4.0\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#47 E:\\iHub v4.0\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#48 {main}', '2023-11-06 03:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `featured_courses`
--

CREATE TABLE `featured_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featured_courses`
--

INSERT INTO `featured_courses` (`id`, `course_id`, `created_at`, `updated_at`) VALUES
(8, 7, '2023-10-16 05:14:35', '2023-10-16 05:14:35'),
(9, 6, '2023-11-27 05:01:08', '2023-11-27 05:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `fellowships`
--

CREATE TABLE `fellowships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `brochure` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fellowships`
--

INSERT INTO `fellowships` (`id`, `name`, `image`, `description`, `link`, `brochure`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(4, 'CHANAKYA UG Fellowship', '1701082494.jpg', '<p><span style=\"text-align: justify;\"><b><u>Divyasampark Technology Innovation Hu</u></b><u><b>b</b></u> at IIT Roorkee is committed to enable innovative ecosystem to deliver these smart products that would help in achieving goal of Industry 4.0, digital India and enabling smart health care solutions. Divyasampark iHub will be performing activities in conjunction with industry and start-ups that would lead to new jobs creation and the economic growth.</span><br style=\"text-align: justify;\"><span style=\"text-align: justify;\">We at TIH at IIT Roorkee strongly believe that fresh, creative, and original young minds have huge potential to transform the world. To ignite student’s innovation and entrepreneurship potential, TIH at IIT Roorkee is offering Comprehensive and Holistic Advancement of National Knowledge Yield and Analytics (CHANAKYA) fellowships to motivated UG students who want to work in the broad area of smart devices and materials for cyber physical systems.</span><br></p>', 'https://docs.google.com/forms/d/e/1FAIpQLSdv3e80I9GVgVsSC6kJHXWZtVwyHBiS3OO6T-43LVcawFXCDw/viewform', '1701082494.brochure.pdf', 1, 2, NULL, '2023-11-27 05:54:54', '2023-11-27 05:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `file_path`, `created_at`, `updated_at`) VALUES
(10, 'File 1 Orbit', '/uploads/files/File1Orbit.jpg', '2023-11-27 05:27:25', '2023-11-27 05:27:25');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Image 1', '1701079135.png', 1, 2, 2, '2023-10-12 01:34:16', '2023-11-27 04:58:55'),
(2, 'Image 2', '1697092467.jpg', 1, 2, NULL, '2023-10-12 01:34:27', '2023-10-12 01:34:27'),
(3, 'Image 3', '1697092479.png', 1, 2, NULL, '2023-10-12 01:34:39', '2023-10-12 01:34:39'),
(4, 'Image 4', '1697092487.jpg', 1, 2, NULL, '2023-10-12 01:34:47', '2023-10-12 01:34:47');

-- --------------------------------------------------------

--
-- Table structure for table `hackathons`
--

CREATE TABLE `hackathons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `register_link` varchar(255) NOT NULL,
  `brochure` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hackathons`
--

INSERT INTO `hackathons` (`id`, `title`, `subtitle`, `description`, `register_link`, `brochure`, `poster`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'HACK XR 2022', 'iHUB DivyaSampark @ IIT Roorkee and TechXRCalling All Undergraduate Engineers! Come Flex Your Superpowers!!', '<p><b><u>OVERVIEW &amp; OBJECTIVES</u></b>\r\n</p><p>\r\nObjective of AR-VR Hackathon is to introduce Undergraduate Students to AR-VR Development process. The first stage is to get started with 3D development environment. This Hackathon introduces a step by step Unity3D learning platform. By following simple intuitive pre recorded video tutorials, students will not only learn about the development environment but also will be able to make a beginner level game on Unity3D. Students can further show their creativity and modify the sample project (they will learn to develop). They need to submit modified project to participate in the competition. Learning platform also provides step by step details how to submit the project.\r\n</p><p><b><u>\r\n\r\n\r\n\r\nWHO CAN PARTICIPATE?\r\n</u></b></p><p>\r\nAny under-graduate engineering student can participate in the Hackathon.\r\n\r\nRegister for free till 20th Jan 2022\r\nRegistration fees of 250 INR applicable after 20th Jan 2022\r\nHackathon entry submission last date : 30th Jan 2022\r\n</p><p><b><u>\r\n\r\nHOW TO PARTICIPATE?\r\n</u></b></p><p>\r\nFill the Hackathon registration form by clicking the Register Now button above.\r\nClick here to sign up on the learning portal to access free Learning Modules. The Learning Modules are available in both English and Hindi.\r\nSubmit your entry by 30th January 2022 11:59 PM\r\nHACKATHON PREPARATION \r\n\r\nSet up and get familiar with Unity3D environment.\r\nPre recorded videos in our free module provide all basic details on how to download and set up Unity3D environment. It provides the necessary URLs and versions required for the task.\r\nOur free module provides all the necessary steps on how to design 3D Virtual environment and to create a 3D Maze.\r\nLearn how to make Collect-The-Coins game.\r\nStudents may download the sample projects and play around with them.\r\nHACKATHON TASK \r\n\r\n1. The task consists of making a game with the above completed Collect-The-Coins as the starting point. There are no constraints on the number of features that you may introduce to the game, as long as the basic game play remains similar to the sample projects.</p>', 'https://www.techxr.co/hackathon/', '1701078992.pdf', '1701078992.jpg', 2, 2, '2023-11-06 06:01:36', '2023-11-27 04:56:46');

-- --------------------------------------------------------

--
-- Table structure for table `highlights`
--

CREATE TABLE `highlights` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `highlights`
--

INSERT INTO `highlights` (`id`, `name`, `course_id`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(13, '400 Hrs of Applied Learning', 6, 1, 2, NULL, '2023-10-16 04:21:07', '2023-10-16 04:21:07'),
(14, '50+ Live sessions across 7 months', 6, 1, 2, NULL, '2023-10-16 04:21:15', '2023-10-16 04:21:15'),
(15, '218 Hrs of Self-Paced Learning', 6, 1, 2, NULL, '2023-10-16 04:21:21', '2023-10-16 04:21:21'),
(16, 'Learn from IIT Faculty & Industry Practitioners', 6, 1, 2, NULL, '2023-10-16 04:21:28', '2023-10-16 04:21:28'),
(17, '50+ Industry Projects & Case Studies', 6, 1, 2, NULL, '2023-10-16 04:21:34', '2023-10-16 04:21:34'),
(18, 'One-on-One with Industry Mentors', 6, 1, 2, NULL, '2023-10-16 04:21:41', '2023-10-16 04:21:41'),
(19, 'Placement Assistance', 6, 1, 2, NULL, '2023-10-16 04:21:47', '2023-10-16 04:21:47'),
(20, 'Placement Assistance', 6, 1, 2, NULL, '2023-10-16 04:21:47', '2023-10-16 04:21:47'),
(21, 'Resume Preparation and LinkedIn Profile Review', 6, 1, 2, NULL, '2023-10-16 04:21:53', '2023-10-16 04:21:53'),
(22, '24*7 Support', 6, 1, 2, NULL, '2023-10-16 04:22:01', '2023-10-16 04:22:01'),
(23, 'Designed for Working Professionals & Freshers', 6, 1, 2, NULL, '2023-10-16 04:22:14', '2023-10-16 04:22:14');

-- --------------------------------------------------------

--
-- Table structure for table `home_testimonials`
--

CREATE TABLE `home_testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_testimonials`
--

INSERT INTO `home_testimonials` (`id`, `name`, `title`, `description`, `image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Abhilasha Kumari', 'Executive | India', '<p>                  After developing an interest in data analysis, I enrolled in the training. I am glad I got a job in this domain and shifted from a non-tech role to a data analyst. Also, I am now much more confident in data analysis than before.\r\n</p><div><span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space-collapse: preserve;\"><br></span></div>', '1701079171.jpg', 1, 2, 2, '2023-10-13 02:20:50', '2023-11-27 04:59:31'),
(3, 'Shubham Shinde', 'Data Analyst | India', '<p><span style=\"font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Intellipaat training helped me crack interviews successfully and transition to a data analytics role with a 300% hike at Deloitte. The support staff and mentorship from seasoned educators have greatly contributed to my career growth.</span><br></p>', '1697181695.jpg', 1, 2, NULL, '2023-10-13 02:21:35', '2023-10-13 02:21:35'),
(4, 'Lucky Bajetha', 'Data Analyst | India', '<p><span style=\"font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">After completing my B. Tech, I was working in human resources. While pursuing Intellipaat’s course, I mentioned it in my resume, and that made a great impact. I started getting calls from various MNCs like Infosys, Capgemini, and EY</span><br></p>', '1697181733.jpg', 1, 2, NULL, '2023-10-13 02:22:13', '2023-10-13 02:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `h_g_b_s`
--

CREATE TABLE `h_g_b_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `h_g_b_s`
--

INSERT INTO `h_g_b_s` (`id`, `name`, `title`, `link`, `image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(4, 'Kamal Kishore Pant', 'Director, IIT Roorkee', 'https://www.linkedin.com/in/k-k-pant-b1b31815/', '1701082174.png', 1, 2, 2, '2023-10-16 02:23:40', '2023-11-27 05:49:34'),
(5, 'Arvind Khanna', 'Chief Technology Officer, Luminous Power Technologies', 'https://in.linkedin.com/in/arvind-khanna-46215a83', '1697441044.png', 1, 2, NULL, '2023-10-16 02:24:05', '2023-10-16 02:24:05'),
(6, 'Dr. Ekta Kapoor', 'Mission Director, NM-ICPS, DST, Govt. of India', 'https://www.linkedin.com/in/ekta-kapoor-605bb02b/', '1697441067.jpg', 1, 2, NULL, '2023-10-16 02:24:27', '2023-10-16 02:24:27'),
(7, 'B K Mishra', 'Professor, Department of Mechanical and Industrial Engineering, IIT Roorkee', 'https://www.iitr.ac.in/~ME/_Mishra_Bhanu_K__', '1697441112.png', 1, 2, NULL, '2023-10-16 02:25:12', '2023-10-16 02:25:12'),
(8, 'R P Sharma', 'Sharma G ka Beta Lorem Ipsum Heylo', 'sharma.com', '1699356741.png', 1, 2, 2, '2023-11-07 06:32:21', '2023-11-07 06:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `ihub_news`
--

CREATE TABLE `ihub_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ihub_news`
--

INSERT INTO `ihub_news` (`id`, `title`, `subtitle`, `image`, `link`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(16, 'iHUB DivyaSampark Brochure', 'Download brochure to learn more about us', '1701081110.png', 'http://127.0.0.1:8000/uploads/files/iHub DivyaSampark.pdf', 1, 2, 2, '2023-10-16 02:09:30', '2023-11-27 05:31:50'),
(17, 'Startup\'s incubated and supported at iHUB', 'Download brochure to learn more', '1701085095.png', 'http://127.0.0.1:8000/uploads/files/Startups Brochure.pdf', 1, 2, 2, '2023-10-16 02:10:28', '2023-11-27 06:38:15'),
(18, 'Advertisement for the post of Associate Project Engineer', 'Apply now to be a part of the tribe.', '1697440388.png', 'http://127.0.0.1:8000/uploads/files/Post Advertisment APE2.pdf', 1, 2, 2, '2023-10-16 02:11:07', '2023-10-16 02:13:08'),
(19, 'Advertisement for the post of Project Engineer', 'Apply now to be a part of the tribe', '1697440395.png', 'http://127.0.0.1:8000/uploads/files/Post Advertisment APE2.pdf', 1, 2, 2, '2023-10-16 02:11:41', '2023-10-16 02:13:15'),
(20, 'Lorem Ipsum', 'Lorem Ipsum Continued', '1699356685.png', 'loremipsum.com', 1, 2, 2, '2023-11-07 06:30:19', '2023-11-07 06:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `i_s_p_s`
--

CREATE TABLE `i_s_p_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `i_s_p_s`
--

INSERT INTO `i_s_p_s` (`id`, `name`, `image`, `description`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, 'Grassroots Innovators Support Program', '1701079075.png', '<p><span style=\"font-size: large; text-align: justify; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif;\">Grassroots Innovators Support Program (GISP), iHUB DivyaSampark’s initiative to support Innovators irrespective of their educational level to increase the funnel size of CPS innovation.</span><br style=\"font-size: large; text-align: justify; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif;\"><br style=\"font-size: large; text-align: justify; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"font-size: large; text-align: justify; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif;\">We at iHUB DivyaSampark are committed to support innovators from everywhere that is why we have come up with a program where there would be no restriction on location, age, education, qualification etc. to increase the funnel size of CPS innovation.</span><br style=\"font-size: large; text-align: justify; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif;\"><br style=\"font-size: large; text-align: justify; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"font-size: large; text-align: justify; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif;\">Only criteria is good innovative ideas in the Cyber Physical System that can solve real world problems.</span><br style=\"font-size: large; text-align: justify; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif;\"><br style=\"font-size: large; text-align: justify; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"font-size: large; text-align: justify; color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif;\">If you are not an innovator and you know somebody who has developed an innovative solution you can guide them to approach us.</span><br></p>', 1, 2, 2, '2023-10-12 04:29:37', '2023-11-27 04:57:55');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `position` tinyint(4) NOT NULL DEFAULT 4 COMMENT '0: CEO, 1:SPM, 2:Manager, 3:Deputy Manager, 4:Associate Manager, 5: Associate Admin 6: Associate',
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `name`, `title`, `link`, `image`, `position`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'Aman Dubey', 'Associate (Operations)', 'https://www.linkedin.com/in/aman-dubey-ba4a77165', '1697441713.png', 6, 1, 2, 2, '2023-10-11 09:00:11', '2023-10-16 02:35:13'),
(4, 'Anchal Sharma', 'Manager (Admin & Accounts)', NULL, '1697441578.png', 2, 1, 2, 2, '2023-10-11 12:48:27', '2023-10-16 02:32:58'),
(5, 'Prateek Sharma', 'Senior Program Manager', 'https://www.linkedin.com/in/prateek-sharma-67731250/', '1697441532.png', 1, 1, 2, 2, '2023-10-11 12:49:08', '2023-10-16 02:32:12'),
(6, 'Lalita Kala Bharti', 'Deputy Manager (Training)', 'https://www.linkedin.com/in/lalita-bharti-27b9a543/', '1697441607.png', 3, 1, 2, 2, '2023-10-11 12:49:40', '2023-10-16 02:33:27'),
(7, 'Arjun Mehta', 'Assistant Manager (Technical & Operations)', 'https://www.linkedin.com/in/aj20x/', '1697441631.jpg', 4, 1, 2, 2, '2023-10-11 12:50:14', '2023-10-16 02:33:51'),
(8, 'Tushar Tyagi', 'Associate Admin', 'https://www.linkedin.com/in/tushar-tyagi-217427189/', '1697441670.png', 5, 1, 2, 2, '2023-10-11 12:50:52', '2023-10-16 02:34:30'),
(10, 'Manish Anand', 'Chief Executive Officer', 'https://in.linkedin.com/in/manish-anand-99b7ab5', '1697441498.png', 0, 1, 2, 2, '2023-10-13 15:48:25', '2023-10-16 02:31:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2023_09_20_092740_add_last_login_to_users_table', 2),
(12, '2023_09_25_134330_create_tickers_table', 3),
(13, '2023_09_25_140150_add_status_to_tickers', 4),
(16, '2023_10_10_053619_create_ihub_news_table', 5),
(17, '2023_10_11_083944_add_link_to_ticker_table', 6),
(18, '2023_10_11_101118_create_h_g_b_s_table', 7),
(19, '2023_10_11_112313_create_b_o_d_s_table', 8),
(20, '2023_10_11_115031_create_advisors_table', 9),
(21, '2023_10_11_120120_create_managers_table', 10),
(22, '2023_10_11_181412_create_colabs_table', 11),
(23, '2023_10_11_185814_create_i_s_p_s_table', 12),
(24, '2023_10_12_052340_create_verticals_table', 13),
(25, '2023_10_12_062201_create_galleries_table', 14),
(26, '2023_10_12_070334_create_recruitments_table', 15),
(27, '2023_10_12_071925_create_whatnews_table', 16),
(28, '2023_10_12_103752_create_jobs_table', 17),
(30, '2023_10_12_113026_create_startups_table', 18),
(31, '2023_10_13_065844_create_home_testimonials_table', 19),
(32, '2023_10_13_073040_create_about_news_table', 20),
(61, '2023_10_13_081926_create_companies_table', 21),
(62, '2023_10_13_082107_create_categories_table', 21),
(63, '2023_10_13_082239_create_courses_table', 21),
(64, '2023_10_13_082554_create_course_tetimonials_table', 21),
(65, '2023_10_13_082733_create_career_transitions_table', 21),
(66, '2023_10_13_082902_create_c_w_c_a_s_table', 21),
(67, '2023_10_13_083149_create_highlights_table', 21),
(68, '2023_10_13_170443_create_featured_courses_table', 22),
(69, '2023_10_16_054104_create_files_table', 23),
(70, '2023_10_25_110615_create_nav_news_table', 24),
(71, '2023_10_25_133249_add_rating_column_to_courses_table', 25),
(72, '2023_11_06_054630_create_hackathons_table', 26),
(76, '2023_11_22_092630_create_blog_categories_table', 27),
(77, '2023_11_22_092836_create_blogs_table', 27),
(78, '2023_11_22_093009_blog_and_category_relation', 27),
(79, '2023_11_23_175619_create_fellowships_table', 28),
(80, '2023_11_27_120728_create_consultancy_services_table', 29),
(81, '2023_11_27_124051_create_whyuses_table', 30);

-- --------------------------------------------------------

--
-- Table structure for table `nav_news`
--

CREATE TABLE `nav_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nav_news`
--

INSERT INTO `nav_news` (`id`, `title`, `subtitle`, `link`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Krishna Raj Chouhan visited iHub', 'Lorem Ipsum is simply dummy text of the printing and typesetting.', 'https://www.lipsum.com/', '1701077717.png', 2, 2, NULL, '2023-11-27 04:35:17');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recruitments`
--

CREATE TABLE `recruitments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recruitments`
--

INSERT INTO `recruitments` (`id`, `name`, `link`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'CHANAKYA UG Fellowship has been launched', 'https://tih.iitr.ac.in/assets/CHANAKYA_UG_FELLOWSHIP.pdf', 1, 2, NULL, '2023-10-12 02:17:11', '2023-10-12 02:17:11'),
(3, 'PANKH-THE WINGS equity based startup has been launched', 'https://tih.iitr.ac.in/assets/PANKH-THE_WINGS.pdf', 1, 2, NULL, '2023-10-12 02:17:40', '2023-10-12 02:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `startups`
--

CREATE TABLE `startups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `brochure` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `startups`
--

INSERT INTO `startups` (`id`, `name`, `image`, `description`, `link`, `brochure`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Dedicated Innovation Accelerator Scheme', '1701079758.jpg', '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: large; text-align: justify;\">Pankh Propel- An initiative to accelerate startups and unleash innovation\'s power via DIAL scheme. Innovation is the driving force behind progress, and Dedicated Innovation Accelerator(DIAL) scheme is here to help turn your groundbreaking ideas into reality. Our mission is to provide a supportive environment for startups to bring their Innovative Products and Technologies to the market faster and more effectively.</span><br></p>', 'https://forms.gle/5JfYx9WKaYPhGa6G6', '1701079758.brochure.jpg', 1, 2, 2, '2023-10-12 07:02:41', '2023-11-27 05:09:18'),
(3, 'Entrepreneurs in Residence Program', '1697112206.jpg', '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: large; text-align: justify;\">National Initiative for Developing and Harnessing Innovations (NIDHI) is an umbrella programme conceived and developed by the Innovation &amp; Entrepreneurship division, Department of Science &amp; Technology, Government of India, for nurturing ideas and innovations (knowledge-based and technology-driven) into successful startups. The programme would work in line with the national priorities and goals and its focus would be to build an innovation driven entrepreneurial ecosystem with an objective of socio-economic development through wealth and job creation. NIDHI aims to nurture start-ups through scouting, supporting and scaling of innovations. The key stakeholders of NIDHI includes various departments and ministries of the central government, state governments, academic and R &amp; D institutions, mentors, financial institutions, angel investors, venture capitalists and private sectors. NIDHI is developed keeping in line the new national aspirations and on the basis of DST’s experience of three decades, in promoting innovative start-ups. National Science and Technology Entrepreneurship Development Board (NSTEDB) of the Department of Science and Technology, Government of India has promoted over one hundred sixty Science and Technology Entrepreneurship Parks (STEPs) and Technology Business Incubators (TBIs).The emphasis is to foster indigenously developed innovations and product in alignment with the nation\'s \"AtmaNirbharBharat Mission\"</span><br></p>', 'https://forms.gle/pdMm5hJHXRmGX3gL8', '1697112206.brochure.pdf', 1, 2, NULL, '2023-10-12 07:03:26', '2023-10-12 07:03:26'),
(4, 'Lorem Chiksamaaw', '1698266895.jpg', '<p>Pankh Propel- An initiative to accelerate startups and unleash innovation\'s power via DIAL scheme. Innovation is the driving force behind progress, and Dedicated Innovation Accelerator(DIAL) scheme is here to help turn your groundbreaking ideas into reality. Our mission is to provide a supportive environment for startups to bring their Innovative Products and Technologies to the market faster and more<br></p>', 'https://google.com', '1698266918.brochure.png', 1, 2, 2, '2023-10-25 15:48:15', '2023-10-25 15:48:38');

-- --------------------------------------------------------

--
-- Table structure for table `tickers`
--

CREATE TABLE `tickers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ticker` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0: inactive, 1: active',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickers`
--

INSERT INTO `tickers` (`id`, `ticker`, `link`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(29, 'iHUB DivyaSampark Brochure', 'http://127.0.0.1:8000/uploads/files/iHub DivyaSampark.pdf', 1, 2, NULL, '2023-10-16 01:50:21', '2023-10-16 01:50:21'),
(30, 'Startup\'s incubated and supported at iHUB DivyaSampark', 'http://127.0.0.1:8000/uploads/files/Startups Brochure.pdf', 1, 2, NULL, '2023-10-16 01:51:38', '2023-10-16 01:51:38'),
(31, 'Advertisement for the post of Associate Project Engineer (TIH/RP/05)', 'http://127.0.0.1:8000/uploads/files/Post Advertisment APE2.pdf', 1, 2, NULL, '2023-10-16 01:52:32', '2023-10-16 01:52:32'),
(32, 'Advertisement for the post of Project Engineer (TIH/RP/05).', 'http://127.0.0.1:8000/uploads/files/Post Advertisment PE2.pdf', 1, 2, NULL, '2023-10-16 01:53:15', '2023-10-16 01:53:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `profile_img` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT '0' COMMENT '0: user, 1: super admin',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: inactive, 1: active, 2: blocked',
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `department`, `profile_img`, `role`, `email`, `email_verified_at`, `status`, `password`, `remember_token`, `created_at`, `updated_at`, `last_login`) VALUES
(2, 'Arjun Mehta', 'IT & Ops', '1695643194.jpg', '1', 'admin@ihub.com', '2023-09-05 07:56:45', 1, '$2y$10$uWiEUHBfajfIzGiDgdp33OAiDU7sOIo2l.aZwD720uphNjBirc0t6', NULL, '2023-09-05 07:56:23', '2023-11-27 06:34:48', '2023-11-27 06:34:48'),
(3, 'Rohit Sharma', 'IT and Ops', '1701077281.jpg', '0', 'rohit@ihub.com', '2023-09-05 13:19:20', 1, '$2y$10$AmY.NJWAsLsAnBszP7MKwejEQ7S8e/i6.JwCs913aj5M/eQ1qfAnu', NULL, '2023-09-04 14:08:13', '2023-11-27 04:28:01', '2023-09-25 07:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `verticals`
--

CREATE TABLE `verticals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verticals`
--

INSERT INTO `verticals` (`id`, `name`, `subtitle`, `image`, `description`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Heath Care 4.0', 'Affordable Health Care for all.', '1701079123.png', 'The Government of India has attempted a series of large scale interventions to address the above mentioned challenges through transformation of health and wellness centers, developing district hospitals to cater to long-term care for non-communicable diseases, Ayushman Bharat Mission, promoting e-Health etc. However, it is considerably recognized that the adoption of advanced devices and technologies such as Internet of medical things (IoMT), robotics, telemedicine, augmented (AR) and virtual reality (VR), wearable systems, mobile health apps, Artificial intelligence (AI), data analysis, etc, would bring the much-needed changes in the Indian healthcare system in a much efficient way by reducing costs and providing easy accessibility.\r\n\r\nEmerging technologies hold great potential to address the needs of Indian healthcare services, which IHUB Divyasampark would be undertaking to augment and accelerate Govt initiatives.\r\n\r\nThrough IHUB- Divyasampark, we plan to develop highly modular and customizable solutions that support multiple simultaneous consultations, asset tracking, monitoring supply chain, data storage on server &amp; cloud, data security, rights and privileges based upon user role, integration of legacy medical equipment in an IoMT framework etc.', 1, 2, 2, '2023-10-12 00:44:51', '2023-11-27 04:58:43'),
(2, 'Industry 4.0', 'Making Indian MSME Globally Competitive', '1698264819.jpg', 'The Government of India has made several efforts in this direction at policy level and had set up incentives for infrastructure development on a PPP (Public Private Partnership) model. Samarth Udyog Bharat 4.0 (Smart Advanced Manufacturing and Rapid Transformation Hubs: SUB 4.0) under the Ministry of Heavy Industries &amp; Public Enterprises is the India’s initiative to push for Industry 4.0 implementation to propagate adoption of digital technology solutions by Indian industries [SD].\r\n\r\nOther GoI programs like ‘Make in India’, ‘Skill India’ and ‘Atmanirbhar Bharat’ are complementing SUB 4.0. capabilities in the last few decades. IHUB Divyasampark at IIT Roorkee will leverage upon Industry 4.0 solutions in association with latest technologies like AI, IoT, Cloud computing, AR, 3D printing etc. to enhance global competitiveness of MSMEs and would contribute in influencing sectors like manufacturing, supply chain management, construction, mining, shipping etc. and shall impact all the aspects of our day-to-day activities.', 1, 2, 2, '2023-10-12 00:58:52', '2023-10-25 15:13:39'),
(3, 'Smart Cities', 'People centered Smart Cities', '1698264827.jpg', 'We at Divyasampark IIT Roorkee will aim at making smart cities sustainable, with better quality of life (QoL), urbanization, and smartness. The sustainability of a smart city is related to city infrastructure and governance, energy and climate change, pollution and waste, and social issues, economics and health. The quality of life (QoL) can be measured in terms of the emotional and financial well-being of the citizens. The urbanization aspects of the smart city include multiple aspects and indicators, such as technology, infrastructure, governance, and economics. The smartness of a smart city is conceptualized as the ambition to improve economic, social and environmental standards of the city and its inhabitants. Various commonly quoted aspects of city smartness include smart economy, smart people, smart governance, smart mobility, and smart living. The focus will be on Smart Infrastructure &amp; Building, Smart Transportation and Smart Energy Grids.', 1, 2, 2, '2023-10-12 00:59:48', '2023-10-25 15:13:47');

-- --------------------------------------------------------

--
-- Table structure for table `whatnews`
--

CREATE TABLE `whatnews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whatnews`
--

INSERT INTO `whatnews` (`id`, `name`, `image`, `link`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'IIT Roorkee Divyasampark I-Hub now fully functional', '1697095851.webp', 'https://techobserver.in/2021/06/29/iit-roorkee-divyasampark-i-hub-now-fully-functional/', 1, 2, NULL, '2023-10-12 02:30:51', '2023-10-12 02:30:51'),
(2, 'Divyasampark I-Hub a reality at IIT Roorkee', '1697095938.png', 'https://www.thestatesman.com/features/divyasampark-i-hub-a-reality-at-iit-roorkee-1502977825.html', 1, 2, NULL, '2023-10-12 02:32:18', '2023-10-12 02:32:18'),
(3, 'Roorkee Tech Hub Becomes Functional', '1697096352.jfif', 'https://www.newindianexpress.com/nation/2021/jul/03/dehradun-diary-char-dhamyatra-matter-headed-for-supreme-court-2324859.html', 1, 2, NULL, '2023-10-12 02:39:12', '2023-10-12 02:39:12'),
(4, '“नवाचार पारिस्थितिकी तंत्र और वित्त पोषण के अवसरों” पर वेबिनार', '1697096420.png', 'https://tazakhabar.in/webinar-on-innovation-ecosystem-and-funding-opportunities/', 1, 2, NULL, '2023-10-12 02:40:20', '2023-10-12 02:40:20');

-- --------------------------------------------------------

--
-- Table structure for table `whyuses`
--

CREATE TABLE `whyuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active, 0=inactive',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whyuses`
--

INSERT INTO `whyuses` (`id`, `title`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'Individuals with a bachelor’s degree and a keen interest to learn AI and Data Science', 1, 2, NULL, '2023-11-27 07:48:25', '2023-11-27 07:48:25'),
(3, 'IT professionals looking for a career transition as Data Scientists and Artificial Intelligence Engineers', 1, 2, NULL, '2023-11-27 07:48:33', '2023-11-27 07:48:33'),
(4, 'Professionals aiming to move ahead in their IT career', 1, 2, NULL, '2023-11-27 07:48:40', '2023-11-27 07:48:40'),
(5, 'Artificial Intelligence and Business Intelligence professionals', 1, 2, 2, '2023-11-27 07:48:47', '2023-11-27 07:48:55'),
(6, 'Developers and Project Managers', 1, 2, NULL, '2023-11-27 07:49:00', '2023-11-27 07:49:00'),
(7, 'Freshers who aspire to build their career in the field of Artificial Intelligence and Data Science', 1, 2, NULL, '2023-11-27 07:49:06', '2023-11-27 07:49:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_news`
--
ALTER TABLE `about_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_news_created_by_foreign` (`created_by`),
  ADD KEY `about_news_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `advisors`
--
ALTER TABLE `advisors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advisors_created_by_foreign` (`created_by`),
  ADD KEY `advisors_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category_relation`
--
ALTER TABLE `blog_category_relation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_category_relation_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_category_relation_blog_category_id_foreign` (`blog_category_id`);

--
-- Indexes for table `b_o_d_s`
--
ALTER TABLE `b_o_d_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `b_o_d_s_created_by_foreign` (`created_by`),
  ADD KEY `b_o_d_s_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `career_transitions`
--
ALTER TABLE `career_transitions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `career_transitions_created_by_foreign` (`created_by`),
  ADD KEY `career_transitions_updated_by_foreign` (`updated_by`),
  ADD KEY `career_transitions_course_id_foreign` (`course_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_created_by_foreign` (`created_by`),
  ADD KEY `categories_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `colabs`
--
ALTER TABLE `colabs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `colabs_created_by_foreign` (`created_by`),
  ADD KEY `colabs_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_created_by_foreign` (`created_by`),
  ADD KEY `companies_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `consultancy_services`
--
ALTER TABLE `consultancy_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `consultancy_services_created_by_foreign` (`created_by`),
  ADD KEY `consultancy_services_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_created_by_foreign` (`created_by`),
  ADD KEY `courses_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `course_tetimonials`
--
ALTER TABLE `course_tetimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_tetimonials_created_by_foreign` (`created_by`),
  ADD KEY `course_tetimonials_updated_by_foreign` (`updated_by`),
  ADD KEY `course_tetimonials_course_id_foreign` (`course_id`);

--
-- Indexes for table `c_w_c_a_s`
--
ALTER TABLE `c_w_c_a_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_w_c_a_s_created_by_foreign` (`created_by`),
  ADD KEY `c_w_c_a_s_updated_by_foreign` (`updated_by`),
  ADD KEY `c_w_c_a_s_course_id_foreign` (`course_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `featured_courses`
--
ALTER TABLE `featured_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fellowships`
--
ALTER TABLE `fellowships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fellowships_created_by_foreign` (`created_by`),
  ADD KEY `fellowships_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_created_by_foreign` (`created_by`),
  ADD KEY `galleries_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `hackathons`
--
ALTER TABLE `hackathons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hackathons_created_by_foreign` (`created_by`),
  ADD KEY `hackathons_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `highlights`
--
ALTER TABLE `highlights`
  ADD PRIMARY KEY (`id`),
  ADD KEY `highlights_created_by_foreign` (`created_by`),
  ADD KEY `highlights_updated_by_foreign` (`updated_by`),
  ADD KEY `highlights_course_id_foreign` (`course_id`);

--
-- Indexes for table `home_testimonials`
--
ALTER TABLE `home_testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_testimonials_created_by_foreign` (`created_by`),
  ADD KEY `home_testimonials_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `h_g_b_s`
--
ALTER TABLE `h_g_b_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `h_g_b_s_created_by_foreign` (`created_by`),
  ADD KEY `h_g_b_s_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `ihub_news`
--
ALTER TABLE `ihub_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ihub_news_created_by_foreign` (`created_by`),
  ADD KEY `ihub_news_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `i_s_p_s`
--
ALTER TABLE `i_s_p_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `i_s_p_s_created_by_foreign` (`created_by`),
  ADD KEY `i_s_p_s_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `managers_created_by_foreign` (`created_by`),
  ADD KEY `managers_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav_news`
--
ALTER TABLE `nav_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nav_news_created_by_foreign` (`created_by`),
  ADD KEY `nav_news_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `recruitments`
--
ALTER TABLE `recruitments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recruitments_created_by_foreign` (`created_by`),
  ADD KEY `recruitments_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `startups`
--
ALTER TABLE `startups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `startups_created_by_foreign` (`created_by`),
  ADD KEY `startups_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `tickers`
--
ALTER TABLE `tickers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickers_created_by_foreign` (`created_by`),
  ADD KEY `tickers_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verticals`
--
ALTER TABLE `verticals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verticals_created_by_foreign` (`created_by`),
  ADD KEY `verticals_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `whatnews`
--
ALTER TABLE `whatnews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `whatnews_created_by_foreign` (`created_by`),
  ADD KEY `whatnews_updated_by_foreign` (`updated_by`);

--
-- Indexes for table `whyuses`
--
ALTER TABLE `whyuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `whyuses_created_by_foreign` (`created_by`),
  ADD KEY `whyuses_updated_by_foreign` (`updated_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_news`
--
ALTER TABLE `about_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `advisors`
--
ALTER TABLE `advisors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_category_relation`
--
ALTER TABLE `blog_category_relation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `b_o_d_s`
--
ALTER TABLE `b_o_d_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `career_transitions`
--
ALTER TABLE `career_transitions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `colabs`
--
ALTER TABLE `colabs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `consultancy_services`
--
ALTER TABLE `consultancy_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course_tetimonials`
--
ALTER TABLE `course_tetimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `c_w_c_a_s`
--
ALTER TABLE `c_w_c_a_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `featured_courses`
--
ALTER TABLE `featured_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fellowships`
--
ALTER TABLE `fellowships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hackathons`
--
ALTER TABLE `hackathons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `highlights`
--
ALTER TABLE `highlights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `home_testimonials`
--
ALTER TABLE `home_testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `h_g_b_s`
--
ALTER TABLE `h_g_b_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ihub_news`
--
ALTER TABLE `ihub_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `i_s_p_s`
--
ALTER TABLE `i_s_p_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `nav_news`
--
ALTER TABLE `nav_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recruitments`
--
ALTER TABLE `recruitments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `startups`
--
ALTER TABLE `startups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tickers`
--
ALTER TABLE `tickers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `verticals`
--
ALTER TABLE `verticals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `whatnews`
--
ALTER TABLE `whatnews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `whyuses`
--
ALTER TABLE `whyuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_news`
--
ALTER TABLE `about_news`
  ADD CONSTRAINT `about_news_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `about_news_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `advisors`
--
ALTER TABLE `advisors`
  ADD CONSTRAINT `advisors_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `advisors_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `blog_category_relation`
--
ALTER TABLE `blog_category_relation`
  ADD CONSTRAINT `blog_category_relation_blog_category_id_foreign` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_categories` (`id`),
  ADD CONSTRAINT `blog_category_relation_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`);

--
-- Constraints for table `b_o_d_s`
--
ALTER TABLE `b_o_d_s`
  ADD CONSTRAINT `b_o_d_s_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `b_o_d_s_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `career_transitions`
--
ALTER TABLE `career_transitions`
  ADD CONSTRAINT `career_transitions_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `career_transitions_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `career_transitions_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `categories_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `colabs`
--
ALTER TABLE `colabs`
  ADD CONSTRAINT `colabs_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `colabs_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `companies_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `consultancy_services`
--
ALTER TABLE `consultancy_services`
  ADD CONSTRAINT `consultancy_services_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `consultancy_services_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `courses_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `course_tetimonials`
--
ALTER TABLE `course_tetimonials`
  ADD CONSTRAINT `course_tetimonials_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `course_tetimonials_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `course_tetimonials_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `c_w_c_a_s`
--
ALTER TABLE `c_w_c_a_s`
  ADD CONSTRAINT `c_w_c_a_s_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `c_w_c_a_s_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `c_w_c_a_s_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `fellowships`
--
ALTER TABLE `fellowships`
  ADD CONSTRAINT `fellowships_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fellowships_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `galleries_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `hackathons`
--
ALTER TABLE `hackathons`
  ADD CONSTRAINT `hackathons_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `hackathons_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `highlights`
--
ALTER TABLE `highlights`
  ADD CONSTRAINT `highlights_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `highlights_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `highlights_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `home_testimonials`
--
ALTER TABLE `home_testimonials`
  ADD CONSTRAINT `home_testimonials_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `home_testimonials_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `h_g_b_s`
--
ALTER TABLE `h_g_b_s`
  ADD CONSTRAINT `h_g_b_s_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `h_g_b_s_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `ihub_news`
--
ALTER TABLE `ihub_news`
  ADD CONSTRAINT `ihub_news_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ihub_news_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `i_s_p_s`
--
ALTER TABLE `i_s_p_s`
  ADD CONSTRAINT `i_s_p_s_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `i_s_p_s_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `managers_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `managers_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `nav_news`
--
ALTER TABLE `nav_news`
  ADD CONSTRAINT `nav_news_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `nav_news_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `recruitments`
--
ALTER TABLE `recruitments`
  ADD CONSTRAINT `recruitments_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `recruitments_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `startups`
--
ALTER TABLE `startups`
  ADD CONSTRAINT `startups_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `startups_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `tickers`
--
ALTER TABLE `tickers`
  ADD CONSTRAINT `tickers_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tickers_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `verticals`
--
ALTER TABLE `verticals`
  ADD CONSTRAINT `verticals_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `verticals_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `whatnews`
--
ALTER TABLE `whatnews`
  ADD CONSTRAINT `whatnews_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `whatnews_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `whyuses`
--
ALTER TABLE `whyuses`
  ADD CONSTRAINT `whyuses_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `whyuses_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
