# 🎯 Guess the Number – Scalable PHP Web App with Boto3 on AWS

This project is a **lightweight PHP web application** deployed on AWS infrastructure using `boto3` and implements a simple **“Guess the Number”** game. It serves as a **cloud computing demo** focused on **Infrastructure as Code** (IaC) and **scalability** per NIST cloud definitions.

---

## 🚀 Project Overview

- Deploys an **Apache/PHP web server** running a small guessing game.
- Uses **boto3 (Python)** to:
  - Create a security group
  - Set up a **launch configuration**
  - Create an **Auto Scaling Group**
  - Deploy an **Application Load Balancer (ALB)** with Target Group and Listener
- Automatically fetches the PHP app from [my GitHub repo](https://github.com/Kimiaf93/CloudComp).

---

## 📦 Technologies Used

| Category       | Tool/Service                      |
|----------------|-----------------------------------|
| IaC            | Python + Boto3                    |
| Compute        | Amazon EC2                        |
| Load Balancing | AWS Application Load Balancer     |
| Scaling        | AWS Auto Scaling Group            |
| Web Server     | Apache + PHP                      |
| App            | “Guess the Number” PHP Game       |
| OS             | Amazon Linux 2 (x86_64)           |

---

## 🛠 How to Use

1. 🔑 **Log in to [AWS Academy Learner Lab](https://awsacademy.instructure.com/)** using your account.

2. 💻 **Launch your Learner Lab environment**

3. 📂 **Clone this GitHub repository**:

   ```bash
   git clone https://github.com/Kimiaf93/CloudComp.git
   cd CloudComp/aws-boto3
4. ▶️ **Run the deployment script**:
    ```bash
    python3 start.py
5. **⏳ Wait ~2–3 minutes. Once the script completes, it will display a URL like**:
   Load Balancer should be reachable at: http://kimiya-asg-loadbalancer-1122844693.us-east-1.elb.amazonaws.com
6. **Open the link in a browser and enjoy the game!**

## 🧩 Want to scale to more instances?
Just update this block in the Python script:
  ```bash
  MaxSize=3,  # change to 5, 7, etc.
  MinSize=1,
