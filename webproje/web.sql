-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2024 at 11:01 AM
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
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `devops_cloud`
--

CREATE TABLE `devops_cloud` (
  `id` int(11) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `devops_cloud`
--

INSERT INTO `devops_cloud` (`id`, `topic`, `title`, `content`, `photo`) VALUES
(6, 'AWS', 'Basically AWS Explained', 'Amazon Web Services (AWS) is a comprehensive and widely used cloud computing platform provided by Amazon. It offers a broad set of services and solutions that enable businesses and individuals to build and deploy applications, store and retrieve data, and perform various computing tasks in the cloud. AWS provides a scalable, flexible, and cost-effective infrastructure, eliminating the need for organizations to invest in and maintain physical hardware.', '../resimler/aws.png'),
(7, 'AWS', 'How To Create Insrance In AWS?', 'Creating an instance (virtual server) in Amazon Web Services (AWS) typically involves using the Amazon Elastic Compute Cloud (EC2) service. Here are the general steps to create an EC2 instance in AWS: Step 1: Sign in to the AWS Management Console\r\nGo to the AWS Management Console.\r\nSign in with your AWS account credentials.\r\nStep 2: Navigate to EC2 Dashboard\r\nIn the AWS Management Console, navigate to the \'Services\' dropdown.\r\nUnder the \'Compute\' section, select \'EC2.\'\r\nStep 3: Launch an Instance\r\nIn the EC2 Dashboard, click the \'Launch Instance\' button.', '../resimler/aws-instance.png'),
(8, 'Azure', 'Shortly Microsoft Azure Explained', 'Microsoft Azure, commonly referred to as Azure, is a cloud computing platform and service offered by Microsoft. It provides a wide range of cloud services, including computing power, storage, databases, networking, artificial intelligence (AI), analytics, Internet of Things (IoT), and more. Azure allows individuals and organizations to build, deploy, and manage applications and services through Microsoft\'s global network of data centers.', '../resimler/azure.png'),
(18, 'Kubernetes', 'Mainly Kubernetes', 'Kubernetes is a portable, extensible, open source platform for managing containerized workloads and services, that facilitates both declarative configuration and automation. It has a large, rapidly growing ecosystem. Kubernetes services, support, and tools are widely available.\r\n\r\nThe name Kubernetes originates from Greek, meaning helmsman or pilot. K8s as an abbreviation results from counting the eight letters between the \"K\" and the \"s\". Google open-sourced the Kubernetes project in 2014. Kubernetes combines over 15 years of Google\'s experience running production workloads at scale with best-of-breed ideas and practices from the community.', '../resimler/kubernetes.png'),
(44, 'AWS', 'How Create VPN?', 'A VPN (Virtual Private Network) is important if you want to have more secure and safe browsing and also using it when you want to create access to your VPC(Virtual Private Cloud). Sometimes getting a VPN can be hard at times, especially when you have to pay to use the service. In this article, I will show you how you can set up a working VPN server on AWS and you don’t have to necessarily pay for anything at all to use it. Let’s get started.', '../resimler/aws.png'),
(47, 'Kubernetes', 'What is Pod in Kubernetes?', 'Pods are the smallest deployable units of computing that you can create and manage in Kubernetes.\r\n\r\nA Pod (as in a pod of whales or pea pod) is a group of one or more containers, with shared storage and network resources, and a specification for how to run the containers. A Pod\'s contents are always co-located and co-scheduled, and run in a shared context. A Pod models an application-specific \"logical host\": it contains one or more application containers which are relatively tightly coupled. In non-cloud contexts, applications executed on the same physical or virtual machine are analogous to cloud applications executed on the same logical host.', '../resimler/kubernetes.png'),
(51, 'Docker', 'History of Docker', 'Docker is a software platform for building applications based on containers—small and lightweight execution environments that make shared use of the operating system kernel but otherwise run in isolation from one another. While containers have been used in Linux and Unix systems for some time, Docker, an open source project launched in 2013, helped popularize the technology by making it easier than ever for developers to package their software to “build once and run anywhere.”', '../resimler/docker.png'),
(52, 'Jenkins', 'Jenkins as CI/CD Tool', 'Jenkins is an open source continuous integration/continuous delivery and deployment (CI/CD) automation software DevOps tool written in the Java programming language. It is used to implement CI/CD workflows, called pipelines.\r\n\r\nPipelines automate testing and reporting on isolated changes in a larger code base in real time and facilitates the integration of disparate branches of the code into a main branch. They also rapidly detect defects in a code base, build the software, automate testing of their builds, prepare the code base for deployment (delivery), and ultimately deploy code to containers and virtual machines, as well as bare metal and cloud servers. There are several commercial versions of Jenkins. This definition only describes the upstream Open Source project.', '../resimler/jenkins.png'),
(53, 'Ansible', 'Usage of Ansible', 'If you’re in IT, you hear about Ansible more and more lately. CIO calls it the DevOps “darling” for software automation, adding that Ansible “has come from nowhere to be the No. 1 choice for software automation in many organizations.” StackShare lists more than 1,000 companies that use Ansible, including Intel, Evernote, and Hootsuite, and the Ansib1. le blog says Apple and NASA have adopted it as well. So, what is Ansible, and why has it gained popularity so quickly? We’ll delve into that here, and we’ll also tell you a bit about why Ansible and Docker work so well together, and how to use Ansible in Docker. You’ll get a glimpse of why the Ansible-Docker combination is so powerful. Let’s get started by going through what is ansible.', '../resimler/ansible.png'),
(54, 'Docker', 'Network In Docker', 'Docker networks configure communications between neighboring containers and external services. Containers must be connected to a Docker network to receive any network connectivity. The communication routes available to the container depend on the network connections it has.\r\n\r\nDocker comes with five built-in network drivers that implement core networking functionality:\r\n\r\nbridge\r\nhost\r\noverlay\r\nIPvLAN\r\nmacvlan', '../resimler/docker.png'),
(55, 'Docker', 'Images In Docker, Do We Need Them?', 'Docker Image is an executable package of software that includes everything needed to run an application. This image informs how a container should instantiate, determining which software components will run and how. Docker Container is a virtual environment that bundles application code with all the dependencies required to run the application. The application runs quickly and reliably from one computing environment to another.', '../resimler/docker.png'),
(56, 'IBM', 'History of IBM', 'In June of 1911, a financier and businessman named Charles Ranlett Flint put the finishing touches on a fateful merger. The new business, which consolidated the Hollerith Tabulating Machine Company with two other market-leading purveyors of data-processing technologies, was called the Computing-Tabulating-Recording Company; later, it would become IBM.\r\n\r\nFlint had built a successful business bundling companies in industries such as rubber and wool, a talent that would eventually earn him the nickname “Father of Trusts.” With C-T-R, however, he set his sights on a more forward-thinking and ambitious merger in a decidedly abstract sector.', '../resimler/ibm.png'),
(57, 'Digital Ocean', 'What is Digital Ocean', 'DigitalOcean is a cloud hosting provider that offers cloud computing services and Infrastructure as a Service (IaaS). Known for pricing and scalability, teams can deploy on DigitalOcean in seconds with plans start at just $5 a month. This structure can help anyone get up and running quickly in the cloud.', '../resimler/digitalocean.png'),
(58, 'AWS', 'AWS Test', 'Test test yeni test', '../resimler/aws.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devops_cloud`
--
ALTER TABLE `devops_cloud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devops_cloud`
--
ALTER TABLE `devops_cloud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
