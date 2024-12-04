-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2024 at 11:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knowledge_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `description` text DEFAULT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `description`, `answer`) VALUES
(1, 'What are workplace contingencies?', 
'Cohesive teams are better able to accomplish tasks, solve problems, and create innovation. As a team leader, describe several strategies you would use to develop team cohesion and effectiveness.', 
'• Code of Conduct: Details acceptable organisational, ethical, and professional behaviours.\n• Corporate Social Responsibility: Highlights social responsibilities, sustainability, and accountability.\n• Equity and Diversity Policy: Ensures equal opportunity and diversity in the workplace.\n• OSH Policy: Outlines safety and health responsibilities for employees and employers.'),
(2, 'How do you handle cross-cultural communication?', 
'When working with teams from other divisions, describe the organizational policies you would refer to, ensuring project alignment with organizational requirements.', 
'• Listening: Actively note thoughts and concerns.\n• Asking Questions: Use open-ended, strategic questions to explore and clarify.\n• Making Observations: Reflect observations neutrally and validate with the team member.'),
(3, 'What are effective communication methods for resolving conflict?', 
'Project success depends on effective communication. Steady communication from leadership can improve morale and engagement.', 
'• Communicate clearly: Clarify work purpose and expectations.\n• Staff development: Invest in education and training.\n• Feedback: Offer balanced evaluations to build confidence.\n• Collaboration: Encourage teamwork and creative brainstorming.\n• Consistency: Apply policies fairly and consistently.'),
(4, 'What are coaching and mentoring techniques?', 
'Coaching and mentoring are one-to-one approaches to enhance individual skills, knowledge, or work performance. Describe techniques to support team members.', 
'• Maintain etiquette: Research cultural norms and communication styles.\n• Avoid slang: Use clear, simple language.\n• Speak slowly and clearly.\n• Keep communication inclusive and patient.'),
(5, 'What are key professional behaviours for team leaders?', 
'A good team leader leads by example. Describe the professional behaviours you would role model as a leader for your team.', 
'• Verbal and non-verbal communication: Maintain clarity and positive body language.\n• Written communication: Use concise and professional language.\n• Assertiveness: Achieve goals while respecting team rights and feelings.'),
(6, 'What is a team performance plan?', 
'What does establishing a team performance plan mean, and how do you handle risks and ethical issues during a project?', 
'• Identify desired team performance levels and strategies.\n• Address risks (e.g., virtual meetings during a pandemic).\n• Reiterate code of conduct and counsel team members to avoid unethical decisions.'),
(7, 'How can personal events impact team performance?', 
'Personal events can often strain teams. Describe contingencies you plan for unplanned leave, task reallocation, and succession planning.', 
'• Identify common goals.\n• Search for agreements and solutions.\n• Commit to resolving issues collaboratively.'),
(8, 'What are principles of communication in diverse communities?', 
'We work in diverse communities with varying needs. Describe principles of communication for these groups and their application in your team.', 
'• Ethics and integrity: Do the right thing for the right reasons.\n• Build trust: Gain respect through actions.\n• Inspire and reward: Motivate and acknowledge achievements.'),
(9, 'What is your strategy for resolving conflicts in teamwork?', 
'When conflict is resolved effectively, it leads to many benefits. Outline a strategy for resolving team conflicts.', 
'• Prioritize tasks based on team and organizational goals.\n• Match tasks with skill sets for better results.\n• Invest in professional development and clear communication about roles.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
