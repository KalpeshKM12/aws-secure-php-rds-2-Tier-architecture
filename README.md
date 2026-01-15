# AWS Secure PHP RDS – 2 Tier Architecture

This project demonstrates how to host a secure PHP web application on AWS using EC2, RDS, ALB, SSL and Secrets Manager.

---

## Architecture
This setup uses:
- VPC with Public & Private subnets
- EC2 for PHP Web Server
- RDS MySQL in Private Subnet
- Application Load Balancer
- SSL using AWS ACM
- Secrets Manager for DB credentials

---

## Flow
User → Route53 → ALB (HTTPS) → EC2 (Nginx + PHP) → RDS (MySQL Private Subnet)

---

## Security
- RDS is not publicly accessible
- Only EC2 can access RDS on port 3306
- HTTPS enabled
- Credentials stored in Secrets Manager

---

## Result
The PHP application connects to MySQL and displays records from the database.

See screenshots folder for output proof.

