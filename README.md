# Web Security Workshop: Introduction to XSS (Cross-Site Scripting)

## Overview
This repository contains the materials for the "Introduction to XSS" workshop. The workshop covers the basics of Cross-Site Scripting (XSS), including types, practical examples, prevention techniques, and hands-on challenges.

## Requirements
- Docker
- A modern web browser (e.g., Google Chrome)
- Basic knowledge of web development and security

## Setup
1. Install Docker:
   - **Windows and macOS:** Download Docker Desktop from the [official website](https://www.docker.com/products/docker-desktop) and follow the installation instructions.
   - **Linux:** Open a terminal and run the following commands:
     ```bash
     sudo apt-get update
     sudo apt-get install -y apt-transport-https ca-certificates curl gnupg-agent software-properties-common
     curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
     sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"
     sudo apt-get update
     sudo apt-get install -y docker-ce docker-ce-cli containerd.io
     sudo systemctl start docker
     sudo systemctl enable docker
     sudo usermod -aG docker $USER
     ```

2. Clone this repository:
   ```bash
   git clone https://github.com/tu_usuario/web-security-workshop-xss.git
   cd web-security-workshop-xss

3. Navigate to the `setup` directory and start Docker Compose:
   ```bash
   cd setup
   docker-compose up
   ```
- **Access the web application:** Open your web browser and navigate to `http://localhost:8080`.

## Content
- **Introduction to XSS:** Definition, types, and importance of web security.
- **Types of XSS:** Reflected, Persistent, and DOM-based XSS.
- **Practical Demonstrations:** Step-by-step examples for each type of XSS.
- **Prevention Techniques:** Data validation, sanitization, and Content Security Policies.
- **Hands on (CTF):** Practical challenges to detect and exploit XSS vulnerabilities and implement mitigations.

## License
This project is licensed under the MIT License.

