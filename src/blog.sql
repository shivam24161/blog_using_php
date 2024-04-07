-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-server
-- Generation Time: Aug 23, 2022 at 05:51 AM
-- Server version: 8.0.19
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(256) NOT NULL,
  `slug` varchar(256) NOT NULL,
  `description` text,
  `navbar_status` tinyint(1) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `navbar_status`, `status`, `created_at`) VALUES
(15, 'HTML', 'HTML', 'This is HTML tutorial', 0, 0, '2022-08-23 05:08:17'),
(16, 'CSS', 'CSS', 'This is CSS tutorial..', 0, 0, '2022-08-23 05:09:06'),
(17, 'SQL', 'SQL', 'SQL Tutorial', 0, 0, '2022-08-23 05:09:27'),
(18, 'PYTHON', 'PYTHON', 'Python tutorial..', 0, 0, '2022-08-23 05:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `name`, `slug`, `description`, `image`, `status`, `created_at`) VALUES
(37, 15, 'HTML Introduction', 'HTML Introduction', '<p><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>!DOCTYPE<span class=\"attributecolor\" style=\"box-sizing: inherit; color: red;\">&nbsp;html</span><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>html<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>head<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>title<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><span style=\"font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\">Page Title</span><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>/title<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>/head<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>body<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>h1<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><span style=\"font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\">My First Heading</span><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>/h1<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>p<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><span style=\"font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\">My first paragraph.</span><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>/p<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>/body<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>/html<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><br></p>', '', 0, '2022-08-23 05:11:47'),
(38, 15, 'HTML Basic', 'HTML Basic', '<p><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>!DOCTYPE<span class=\"attributecolor\" style=\"box-sizing: inherit; color: red;\">&nbsp;html</span><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>html<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>body<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>h1<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><span style=\"font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\">My First Heading</span><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>/h1<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>p<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><span style=\"font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\">My first paragraph.</span><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>/p<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>/body<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagnamecolor\" style=\"box-sizing: inherit; color: brown; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>/html<span class=\"tagcolor\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span><br></p>', '', 0, '2022-08-23 05:12:35'),
(39, 15, 'HTML Elements', 'HTML Elements', '<p style=\"box-sizing: inherit; margin-top: 1.2em; margin-bottom: 1.2em; font-size: 15px; font-family: Verdana, sans-serif;\">The HTML&nbsp;<span style=\"box-sizing: inherit; font-weight: bolder;\">element</span>&nbsp;is everything from the start tag to the end tag:</p><div style=\"box-sizing: inherit; font-family: Verdana, sans-serif; font-size: 20px; padding: 10px; margin-bottom: 10px;\"><span class=\"spes_tagname\" style=\"box-sizing: inherit; color: brown;\"><span class=\"spes_tag\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>tagname<span class=\"spes_tag\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span>Content goes here...<span class=\"spes_tagname\" style=\"box-sizing: inherit; color: brown;\"><span class=\"spes_tag\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>/tagname<span class=\"spes_tag\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span></div><p style=\"box-sizing: inherit; margin-top: 1.2em; margin-bottom: 1.2em; font-size: 15px; font-family: Verdana, sans-serif;\">Examples of some HTML elements:</p><div style=\"box-sizing: inherit; font-family: Verdana, sans-serif; font-size: 20px; padding: 10px; margin-bottom: 10px;\"><span class=\"spes_tagname\" style=\"box-sizing: inherit; color: brown;\"><span class=\"spes_tag\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;<span class=\"spes_tagname\" style=\"box-sizing: inherit; color: brown;\">h1</span>&gt;</span></span>My First Heading<span class=\"spes_tagname\" style=\"box-sizing: inherit; color: brown;\"><span class=\"spes_tag\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>/h1<span class=\"spes_tag\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span></div><div style=\"box-sizing: inherit; font-family: Verdana, sans-serif; font-size: 20px; padding: 10px; margin-bottom: 10px;\"><span class=\"spes_tagname\" style=\"box-sizing: inherit; color: brown;\"><span class=\"spes_tag\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>p<span class=\"spes_tag\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span>My first paragraph.<span class=\"spes_tagname\" style=\"box-sizing: inherit; color: brown;\"><span class=\"spes_tag\" style=\"box-sizing: inherit; color: mediumblue;\">&lt;</span>/p<span class=\"spes_tag\" style=\"box-sizing: inherit; color: mediumblue;\">&gt;</span></span></div>', '', 0, '2022-08-23 05:13:44'),
(40, 15, 'HTML Attributes', 'HTML Attributes', '<ul style=\"box-sizing: inherit; font-family: Verdana, sans-serif; font-size: 15px;\"><li style=\"box-sizing: inherit;\"><b>All HTML elements can have&nbsp;<span style=\"box-sizing: inherit;\">attributes</span></b></li><li style=\"box-sizing: inherit;\"><b>Attributes provide&nbsp;<span style=\"box-sizing: inherit;\">additional information</span>&nbsp;about elements</b></li><li style=\"box-sizing: inherit;\"><b>Attributes are always specified in&nbsp;<span style=\"box-sizing: inherit;\">the start tag</span></b></li><li style=\"box-sizing: inherit;\"><b>Attributes usually come in name/value pairs like:&nbsp;<span style=\"box-sizing: inherit;\">name=\"value\"</span></b></li></ul>', '', 0, '2022-08-23 05:14:55'),
(41, 16, 'CSS Introduction', 'CSS Introduction', '<p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; font-family: Verdana, sans-serif;\">CSS is the language we use to style an HTML document.</p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; font-family: Verdana, sans-serif;\">CSS describes how HTML elements should be displayed.</p><p style=\"box-sizing: inherit; margin-top: 1em; margin-bottom: 1em; font-size: 15px; font-family: Verdana, sans-serif;\">This tutorial will teach you CSS from basic to advanced.</p>', '1661231823.png', 0, '2022-08-23 05:17:03'),
(42, 16, 'CSS Selectors', 'CSS Selectors', '<ul style=\"box-sizing: inherit; font-family: Verdana, sans-serif; font-size: 15px;\"><li style=\"box-sizing: inherit;\">Simple selectors (select elements based on name, id, class)</li><li style=\"box-sizing: inherit;\"><a href=\"https://www.w3schools.com/css/css_combinators.asp\" style=\"box-sizing: inherit; color: inherit;\">Combinator selectors</a> (select elements based on a specific relationship between them)</li><li style=\"box-sizing: inherit;\"><a href=\"https://www.w3schools.com/css/css_pseudo_classes.asp\" style=\"box-sizing: inherit; color: inherit;\">Pseudo-class selectors</a> (select elements based on a certain state)</li><li style=\"box-sizing: inherit;\"><a href=\"https://www.w3schools.com/css/css_pseudo_elements.asp\" style=\"box-sizing: inherit; color: inherit;\">Pseudo-elements selectors</a> (select and style a part of an element)</li><li style=\"box-sizing: inherit;\"><a href=\"https://www.w3schools.com/css/css_attribute_selectors.asp\" style=\"box-sizing: inherit; color: inherit;\">Attribute selectors</a> (select elements based on an attribute or attribute value)</li></ul>', '1661231914.png', 0, '2022-08-23 05:18:14'),
(43, 17, 'SQL Introduction', 'SQL Introduction', '<ul style=\"box-sizing: inherit; font-family: Verdana, sans-serif; font-size: 15px;\"><li style=\"box-sizing: inherit;\"><b>SQL stands for Structured Query Language</b></li><li style=\"box-sizing: inherit;\"><b>SQL lets you access and manipulate databases</b></li><li style=\"box-sizing: inherit;\"><b>SQL became a standard of the American National Standards Institute (ANSI) in 1986, and of the International Organization for Standardization (ISO) in 1987.</b></li></ul>', '1661232012.png', 0, '2022-08-23 05:20:12'),
(44, 17, 'SQL Select', 'SQL Select', '<p><span class=\"sqlkeywordcolor\" style=\"box-sizing: inherit; color: mediumblue; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\">SELECT</span><span style=\"font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\">&nbsp;</span><em style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\">column1</em><span style=\"font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\">,</span><em style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\">&nbsp;column2, ...</em><br style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\"><span class=\"sqlkeywordcolor\" style=\"box-sizing: inherit; color: mediumblue; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\">FROM</span><span style=\"font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\">&nbsp;</span><em style=\"box-sizing: inherit; font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\">table_name</em><span style=\"font-family: Consolas, Menlo, &quot;courier new&quot;, monospace; font-size: 15px;\">;</span><br></p>', '1661232101.png', 0, '2022-08-23 05:21:41'),
(45, 18, 'Python Introduction', 'Python Introduction', '<p style=\"box-sizing: inherit; margin-top: 1.2em; margin-bottom: 1.2em; font-size: 15px; font-family: Verdana, sans-serif;\">Python is a popular programming language. It was created by Guido van Rossum, and released in 1991.</p><p style=\"box-sizing: inherit; margin-top: 1.2em; margin-bottom: 1.2em; font-size: 15px; font-family: Verdana, sans-serif;\">It is used for:</p><ul style=\"box-sizing: inherit; font-family: Verdana, sans-serif; font-size: 15px;\"><li style=\"box-sizing: inherit;\">web development (server-side),</li><li style=\"box-sizing: inherit;\">software development,</li><li style=\"box-sizing: inherit;\">mathematics,</li><li style=\"box-sizing: inherit;\">system scripting.</li></ul>', '1661232191.jpeg', 0, '2022-08-23 05:23:11'),
(46, 18, 'Python Syntax', 'Python Syntax', '<p><span style=\"color: rgb(255, 255, 255); font-family: Consolas, Menlo, \"courier new\", monospace; font-size: 15px; background-color: rgb(0, 0, 0);\">>>> print(\"Hello, World!\")</span><br style=\"box-sizing: inherit; color: rgb(255, 255, 255); font-family: Consolas, Menlo, \"courier new\", monospace; font-size: 15px;\"><span style=\"color: rgb(255, 255, 255); font-family: Consolas, Menlo, \"courier new\", monospace; font-size: 15px; background-color: rgb(0, 0, 0);\">Hello, World!</span><br></p>', '1661232279.jpeg', 0, '2022-08-23 05:24:15'),
(47, 15, 'HTML Headings', 'HTML Headings', '<p style=\"box-sizing: inherit; margin-top: 1.2em; margin-bottom: 1.2em; font-size: 15px; font-family: Verdana, sans-serif;\">HTML headings are defined with the <code class=\"w3-codespan\" style=\"box-sizing: inherit; font-family: Consolas, Menlo, \"courier new\", monospace; font-size: 15.75px; color: crimson; background-color: rgba(222, 222, 222, 0.3); padding-left: 4px; padding-right: 4px;\"><h1></code> to <code class=\"w3-codespan\" style=\"box-sizing: inherit; font-family: Consolas, Menlo, \"courier new\", monospace; font-size: 15.75px; color: crimson; background-color: rgba(222, 222, 222, 0.3); padding-left: 4px; padding-right: 4px;\"><h6></code> tags.</p><p style=\"box-sizing: inherit; margin-top: 1.2em; margin-bottom: 1.2em; font-size: 15px; font-family: Verdana, sans-serif;\"><code class=\"w3-codespan\" style=\"box-sizing: inherit; font-family: Consolas, Menlo, \"courier new\", monospace; font-size: 15.75px; color: crimson; background-color: rgba(222, 222, 222, 0.3); padding-left: 4px; padding-right: 4px;\"><h1></code> defines the most important heading. <code class=\"w3-codespan\" style=\"box-sizing: inherit; font-family: Consolas, Menlo, \"courier new\", monospace; font-size: 15.75px; color: crimson; background-color: rgba(222, 222, 222, 0.3); padding-left: 4px; padding-right: 4px;\"><h6></code> defines the least important heading.</p>', '1661233720.png', 0, '2022-08-23 05:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_as` tinyint NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `role_as`, `status`, `created_at`) VALUES
(6, 'Admin', '', 'admin@gmail.com', 'admin', 1, 0, '2022-08-23 05:05:31'),
(8, 'shiv', 'shakti', 'shiv@gmail.com', 'shivshakti', 1, 0, '2022-08-23 05:29:53'),
(9, 'Satyam', 'Awasthi', 'satyam@gmail.com', '12345', 0, 0, '2022-08-23 05:41:50'),
(10, 'Sachin', 'Gupta', 'sachin@gmail.com', '1234', 0, 0, '2022-08-23 05:42:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
