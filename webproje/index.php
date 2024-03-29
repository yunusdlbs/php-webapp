<?php
require_once "temam.php";
head_ustkismi("DevOps&Cloud");
sol_menu();
banner();
/*
$content_d=array("<p>Kubernetes is an open-source container orchestration platform designed to automate the deployment, scaling, and management of containerized applications. Containers are lightweight, portable, and consistent environments that package an application and its dependencies, allowing for seamless deployment across different environments.

Key features of Kubernetes include:

Container Orchestration: Kubernetes enables the automated deployment, scaling, and management of containerized applications. It ensures that the desired state of your application is maintained, and it can automatically adjust resources based on demand.

Container Abstraction: Kubernetes abstracts the underlying infrastructure, providing a consistent environment for deploying and managing applications regardless of the infrastructure (on-premises, public cloud, or hybrid cloud).

Declarative Configuration: Users define the desired state of their applications and infrastructure using declarative YAML files. Kubernetes then works to bring the system to the specified state.
</p>",
"<p>
Docker is a platform and set of tools that enables developers to automate the deployment of applications inside lightweight, portable containers. Containers are standalone, executable packages that include everything needed to run a piece of software, including the code, runtime, libraries, and system tools. Docker containers provide a consistent and reproducible environment, ensuring that applications run reliably across different computing environments.

Key features of Docker include:

Containerization: Docker allows developers to package their applications and dependencies into containers. Containers encapsulate the application, making it portable and ensuring that it runs consistently across various environments.

Isolation: Containers provide process and file system isolation, allowing applications to run independently of the underlying infrastructure. This isolation helps prevent conflicts between different applications and their dependencies.
</p>","<p>It seems like there might be a typo in your question, but I'll assume you're asking about GitLab and GitHub, which are both web-based platforms that provide version control and collaborative features for software development using the Git version control system. Here's an overview of each:<br>

<u><b>GitHub:</b></u><br>

<b>Description:</b> GitHub is a widely used platform for hosting and collaborating on Git repositories. It provides a web-based interface for managing repositories, tracking issues, and facilitating collaboration among developers.<br>
<b>Features:</b>
Repository hosting: Allows developers to host their Git repositories on GitHub.<br>
<u><b>GitLab:</b></u>

<u><b>Description:</b></u> GitLab is another web-based platform for managing Git repositories. It offers a comprehensive set of features for the entire DevOps lifecycle, including source code management, CI/CD, code review, and more.
Features:
Repository hosting: Like GitHub, GitLab allows users to host Git repositories on their platform.
<u><b>CI/CD:</b></u> GitLab includes built-in CI/CD pipelines, making it easy to set up and automate testing and deployment processes.
Code review: Offers tools for code review, including inline commenting and discussions.
</p>","<p>DevOps, short for Development and Operations, is a set of practices, principles, and cultural philosophies that aims to improve collaboration and communication between software development and IT operations teams. Here are several reasons why organizations adopt DevOps:

    Faster Time-to-Market:
    
    DevOps practices enable more frequent and reliable releases, reducing the time it takes to bring new features, enhancements, or bug fixes to production. This results in a faster time-to-market for software products.
    Continuous Integration and Continuous Deployment (CI/CD):
    
    DevOps promotes the implementation of CI/CD pipelines, which automate the process of integrating code changes, running tests, and deploying applications. This automation improves efficiency, reduces errors, and accelerates the release cycle.
    Improved Collaboration:
    
    DevOps breaks down silos between development, operations, and other teams, fostering a culture of collaboration and shared responsibility. This collaboration leads to better communication, understanding, and cooperation across different functional areas.
</p>", "<p>Terraform is an open-source Infrastructure as Code (IaC) tool developed by HashiCorp. It enables users to define and provision infrastructure components in a declarative and version-controlled way. Terraform supports multiple cloud providers, as well as on-premises infrastructure, and allows for the management of resources such as virtual machines, networks, storage, and more.
</p>", "<p>Amazon Web Services (AWS) is a comprehensive and widely used cloud computing platform provided by Amazon. It offers a broad set of services and solutions that enable businesses and individuals to build and deploy applications, store and retrieve data, and perform various computing tasks in the cloud. AWS provides a scalable, flexible, and cost-effective infrastructure, eliminating the need for organizations to invest in and maintain physical hardware.
</p>", "<p>Creating an instance (virtual server) in Amazon Web Services (AWS) typically involves using the Amazon Elastic Compute Cloud (EC2) service. Here are the general steps to create an EC2 instance in AWS:

Step 1: Sign in to the AWS Management Console<br/>
Go to the AWS Management Console.<br/>
Sign in with your AWS account credentials.<br/>
Step 2: Navigate to EC2 Dashboard<br/>
In the AWS Management Console, navigate to the 'Services' dropdown.<br/>
Under the 'Compute' section, select 'EC2.'<br/>
Step 3: Launch an Instance<br/>
In the EC2 Dashboard, click the 'Launch Instance' button.<br/>
</p>", "<p>
Microsoft Azure, commonly referred to as Azure, is a cloud computing platform and service offered by Microsoft. It provides a wide range of cloud services, including computing power, storage, databases, networking, artificial intelligence (AI), analytics, Internet of Things (IoT), and more. Azure allows individuals and organizations to build, deploy, and manage applications and services through Microsoft's global network of data centers.
</p>");
$baslik_d=array("What is Kubernetes?","Why Docker?","GitHub or GitLab?","Why Shuld I Use DevOps?", "How Terraform Works?", "Basically AWS Explained", "How To Create Insrance In AWS?", "Shortly Microsoft Azure Explained");
$resim_d=array("kubernetes.png","docker.png","gitlab-github.png","devops-2.png", "terraform.png", "aws.png", "aws-instance.png", "azure.png"); 

*/

$content_d = []; // Boş Liste
$baslik_d  = [];
$resim_d   = [];
$id_d      = [];
$topic_d   = [];

require_once 'yonetim/functions.php';
$baglanti = baglan();

if( isset($_GET["topic"]) ){
    $topic = $_GET["topic"];
    $sorgu = "SELECT * FROM devops_cloud WHERE topic='$topic'";
}else{
    $sorgu = "SELECT * FROM devops_cloud";
}

$usernames = "test";


$sonuc = mysqli_query($baglanti,$sorgu);
if($sonuc){
    while($satir = mysqli_fetch_assoc($sonuc))    {
        $id_d[]      = $satir["id"];
        $content_d[] = $satir["content"];
        $resim_d[]      = $satir["photo"];
        $baslik_d[]   = $satir["title"];
        $topic_d[]   = $satir["topic"];
    }
}

ana_icerik_coklu($content_d,$baslik_d,$resim_d,$id_d);

alt_kisim();
?>
