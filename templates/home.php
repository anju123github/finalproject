
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYBER-HUB</title>
    <link rel="shortcut icon" href="https://assets-global.website-files.com/64a2ab71942e1d57feb6fe39/6528221f95333ff155d01ad2_fav.gif" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
    <link rel="stylesheet" href="style.css">
    <style>
.navbar-nav .nav-link {
    transition: color 0.3s ease;
    background:black;
    color:white;
}

.navbar-nav .nav-link:hover {
    color: #007bff; /* Change color to your desired hover color */
}
.nav-link{
    /* color: red; */
    font-size: 20px;
    text-decoration: none;
    margin-right: 10px;
}
.search-container {
  text-align: center;
  margin-top: 35px;
}

.search-bar {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 600px;
  margin-right: 5px;
}

.search-button {
  padding: 10px 25px;
  border: 1px solid #007bff;
  background-color: #007bff;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.search-button:hover {
  background-color: #0056b3;
}

.section{
    /* margin: 70px; */
    margin-bottom: 100px;
    margin-top: 20px;
}
.sec-left{
    width:27%;
    padding:0vh;

}
.sec-left p {
    margin-top: 2vh;
}

</style>
</head>

<body>
    <nav>
        <h1 style="color:white;">CYBER-HUB.</h1>
        <div class="nav-part2">
        <?php
            echo("<div class='navbar navbar-expand-md bg-body-tertiary border' style='background: black'>
                <div class='container'>
                
                  <!-- ( toggle button ) -->
                  <div class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                  </div>
                  <!-- (navbar) -->
                  <div class='collapse navbar-collapse' style='justify-content: flex-end;' id='navbarNavAltMarkup'>
                    <div class='navbar-nav' style='gap: 0.8rem'>
                    
                      <a class='nav-link active' style: aria-current='page' href='index.php'>Home</a>
                    
                      <a class='nav-link' href='complaine.php'>Complaint</a>
                    
                      <a class='nav-link' href='awerness.php'>Awareness</a>
          
                      <a class='nav-link' href='query.php'>Query</a>
          
                      <a class='nav-link' href='contact.php'>Contact</a>
                      <a class='nav-link' href='index.php'>logout</a>
                    </div>
                  </div>
                
                </div>
              </div>");
          
          ?>  
        </div>
        <div id="nav-bottom">

        </div>
    </nav>
    <div id="main">
        <div id="page1">
            <h1>Cyber security</h1>
            <h1>CYBER WORLD INFO.</h1>
            <p>We Care for you </p>
        </div>
        <!-- new page starts here -->
        <div class="search-container">
    <input type="text" id="searchInput" class="search-bar" placeholder="Search...">
    <button id="searchButton" onclick="docload()" class="search-button" >Search</button>
</div>

<div id="searchResults" class="hide">
    <!-- Search results will be displayed here -->
</div>
        <div id="page4">
            <div class="section">
                <div class="sec-left">
                    <h2>Network</h2>
                    <p>Network is crucial for protecting your digital assets. Remember to use strong passwords, enable encryption, regularly update firmware and software, monitor network traffic for anomalies, and implement access controls to prevent unauthorized access. Additionally, educate all users about the importance of cybersecurity practices to ensure a resilient network infrastructure.</p>
                </div>
                <div class="sec-right">
                    <img src="pic1.PNG"
                        alt="">
                    <video muted src="./accern-rhea-cover-big.mp4"></video>
                </div>
            </div>
            <div class="section">
                <div class="sec-left">
                    <h2>Data</h2>
                    <p>Data is paramount in today's digital landscape. Make sure to encrypt sensitive data both in transit and at rest, implement access controls to limit who can access it, regularly backup your data to prevent loss, and ensure compliance with data protection regulations such as GDPR or CCPA. Educate employees about the importance of data security and regularly review and update your data security policies to address emerging threats.</p>
                </div>
                <div class="sec-right">
                    <img src="pic2.PNG"
                        alt="">
                    <video muted src="https://lazarev.kiev.ua/cases/la24/afrotech-cover-big.mp4"></video>
                </div>
            </div>
            <div class="section">
                <div class="sec-left">
                    <h2>Security</h2>
                    <p>Security is a multi-layered approach encompassing various aspects such as physical security, network security, data security, and more. It involves implementing measures to protect against unauthorized access, data breaches, malware attacks, and other cybersecurity threats. This includes using strong authentication methods, regularly updating software and systems, conducting security audits, and providing ongoing training and awareness programs for employees. Remember, security is everyone's responsibility, so stay vigilant and proactive in safeguarding against potential risks.</p>
                </div>
                <div class="sec-right">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCKr60KjwzYEQPATOULM6X99sU6NAn8AqX1dsTeUSRqQ&s"
                        alt="">
                    <video muted src="./accern-rhea-cover-big.mp4"></video>
                </div>
            </div>
            <div class="section">
                <div class="sec-left">
                    <h2>Froud</h2>
                    <p>Fraud is a serious threat that can have significant financial and reputational consequences. To prevent fraud, it's essential to implement robust security measures such as identity verification, transaction monitoring, and fraud detection systems. Educate employees and customers about common fraud schemes and how to recognize and report suspicious activity. Additionally, establish clear policies and procedures for handling sensitive information and conducting financial transactions to mitigate the risk of fraud occurring within your organization. Remember, staying vigilant and proactive is key to preventing fraud.</p>
                </div>
                <div class="sec-right">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPB1cEkUvZ7LUS-tLQ0eMmEETZ1Gh9Y79hTSIF02webw&s"
                        alt="">
                    <video muted src="./accern-rhea-cover-big.mp4"></video>
                </div>
            </div>
            <div class="section">
                <div class="sec-left">
                    <h2>Cyber security</h2>
                    <p>Cybersecurity is the practice of protecting computer systems, networks, and data from unauthorized access, attacks, and damage. It encompasses a range of technologies, processes, and practices designed to defend against cyber threats such as malware, phishing, ransomware, and hacking. Key aspects of cybersecurity include implementing strong access controls, regularly updating software and systems, conducting risk assessments, encrypting sensitive data, and providing ongoing training and awareness for employees. By prioritizing cybersecurity, organizations can minimize the risk of cyber attacks and safeguard their digital assets and reputation. </p>
                </div>
                <div class="sec-right">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS73JiSb90wWbSXpAJSDdww-Dt2un_dcM4up4W7aIvEHA&s";
                        alt="">
                    <video muted src="./accern-rhea-cover-big.mp4"></video>
                </div>
            </div>
            <div class="section">
                <div class="sec-left">
                    <h2>Phishing </h2>
                    <p>Phishing is a type of cyber attack where attackers impersonate legitimate entities, such as companies or individuals, to deceive users into providing sensitive information such as passwords, credit card numbers, or personal details. Phishing attacks typically occur via email, but can also happen through phone calls, text messages, or social media messages. To protect against phishing, it's important to be cautious of unsolicited messages, verify the authenticity of requests before providing any information, and avoid clicking on suspicious links or attachments. Additionally, organizations can implement email filtering systems, conduct employee training on identifying phishing attempts, and regularly update security protocols to prevent phishing attacks from being successful.

                    </p>
                </div>
                <div class="sec-right">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTk7vERR_DeXcFawr66aXQzEiyw2e1al-UwQgd4aC_bNg&s"
                        alt="">
                    <video muted src="./accern-rhea-cover-big.mp4"></video>
                </div>
            </div>



<!-- from <div class="section" idhar se paste kr dio jo jo content dalna hoga -->
<div class="section">
            <div class="sec-left">
                <h2>Malware </h2>
                <p>Malware, short for malicious software, refers to any software intentionally designed to cause harm to a computer, server, network, or device. Malware comes in various forms, including viruses, worms, trojans, ransomware, spyware, and adware. It can infiltrate systems through email attachments, infected websites, malicious downloads, or removable media. Once installed, malware can steal sensitive information, disrupt system operations, encrypt files for ransom, or turn devices into bots for conducting further attacks. To protect against malware, it's essential to use reputable antivirus software, regularly update operating systems and software, exercise caution when downloading files or clicking on links, and employ email and web filtering tools to block malicious content. Additionally, maintaining regular backups of important data can help mitigate the impact of a malware infection.
                </p>
            </div>
            <div class="sec-right">
                <img src="pic3.PNG"
                    alt="">
                <video muted src="./accern-rhea-cover-big.mp4"></video>
            </div>
</div>

            <div class="section">
                    <div class="sec-left">
                        <h2>Penetration Testing</h2>
                        <p>Penetration testing, also known as pen testing, is a proactive security assessment conducted to identify and exploit vulnerabilities in a computer system, network, or application. The goal of penetration testing is to simulate real-world cyber attacks to evaluate the effectiveness of existing security measures and identify areas for improvement. Penetration testers, often referred to as ethical hackers, use a variety of techniques and tools to simulate common attack scenarios and attempt to gain unauthorized access to systems or sensitive data. By uncovering vulnerabilities and weaknesses before malicious attackers do, organizations can proactively address security issues and strengthen their overall security posture. Penetration testing is typically conducted periodically or in response to significant changes in the IT environment to ensure ongoing protection against cyber threats.
                        </p>
            </div>
            <div class="sec-right">
                 <img src="pic4.PNG"
                            alt="">
                        <video muted src="./accern-rhea-cover-big.mp4"></video>
            </div>
            </div>

            <div class="section">
                    <div class="sec-left">
                            <h2>Social engineering </h2>
                            <p>Social engineering is a technique used by attackers to manipulate individuals into divulging confidential information, providing access to systems, or performing certain actions that compromise security. Unlike traditional cyber attacks that exploit technical vulnerabilities, social engineering relies on psychological manipulation and deception to exploit human behavior. Common forms of social engineering include phishing emails, pretexting phone calls, baiting with USB drives or infected websites, and impersonation via social media or in person. Attackers often research their targets to tailor their approach and increase the likelihood of success. To defend against social engineering attacks, it's crucial to educate employees and individuals about the tactics used by attackers, encourage skepticism towards unsolicited requests for information or actions, and implement security awareness training and protocols to mitigate the risk of falling victim to social engineering scams.
                            </p>
            </div>
            <div class="sec-right">
                            <img src="pic5.PNG"
                                alt="">
                            <video muted src="./accern-rhea-cover-big.mp4"></video>
            </div>
            </div>
            <div class="section">
                <div class="sec-left">
                                <h2>Denial of Service (DoS) attack </h2>
                                <p>
                                    A Denial of Service (DoS) attack is a malicious attempt to disrupt the normal functioning of a targeted server, service, or network by overwhelming it with a flood of illegitimate traffic or requests. The goal of a DoS attack is to make the targeted system unavailable to its intended users, thereby denying access to legitimate traffic. <br>

                                    There are various types of DoS attacks, including: <br>
                                    
                                    1. *Volume-based attacks*: These floods the target with a high volume of traffic, consuming its bandwidth and resources. Examples include UDP floods and ICMP floods.<br>
                                    
                                    2. *Protocol-based attacks*: These exploit vulnerabilities in network protocols or services to consume system resources. An example is a SYN flood attack that targets the TCP handshake process.<br>
                                    
                                    3. *Application layer attacks (Layer 7 DoS)*: These target specific applications or services, exploiting vulnerabilities in the application layer to exhaust server resources. Examples include HTTP floods and Slowloris attacks.
                                    <br>
                                    4. *Distributed Denial of Service (DDoS) attacks*: These involve multiple compromised devices (botnets) coordinating to launch a DoS attack collectively, making it more difficult to mitigate.
                                    <br>
                                    To mitigate DoS attacks, organizations can implement measures such as traffic filtering, rate limiting, deploying intrusion detection/prevention systems (IDS/IPS), using content delivery networks (CDNs) for distributing traffic, and employing DDoS mitigation services. Additionally, keeping systems and software updated with the latest security patches can help mitigate the risk of being exploited in a DoS attack.
                                    
                                </p>
            </div>
            <div class="sec-right">
                <img src="pic6.PNG"
                                    alt="">
                                <video muted src="./accern-rhea-cover-big.mp4"></video>
                            </div>
            </div>

            

<!-- from <div class="section" idhar se paste kr dio jo jo content dalna hoga -->


        </div>
        <!-- 
             
                            
                <div class="section">
                                <div class="sec-left">
                                        <h2>How can I protect my computer and data from malware?</h2>
                                        <p>To protect your computer and data from malware, consider implementing the following measures:

                                            1. *Install Antivirus Software*: Use reputable antivirus software and keep it up-to-date to detect and remove malware threats.
                                            
                                            2. *Keep Software Updated*: Regularly update your operating system, software applications, and antivirus definitions to patch known vulnerabilities and improve security.
                                            
                                            3. *Exercise Caution with Email*: Be wary of unsolicited emails, especially those with attachments or links. Avoid clicking on suspicious links or downloading attachments from unknown senders.
                                            
                                            4. *Use a Firewall*: Enable a firewall on your computer to monitor and control incoming and outgoing network traffic, blocking unauthorized access and potential malware threats.
                                            
                                            5. *Enable Pop-up Blockers*: Configure your web browser to block pop-up windows, which can contain malicious content or redirect you to phishing sites.
                                            
                                            6. *Practice Safe Browsing*: Only visit trusted websites and avoid clicking on ads or links from unfamiliar or suspicious sources. Look for HTTPS encryption and padlock symbols in the browser's address bar for secure connections.
                                            
                                            7. *Use Strong Passwords*: Create complex and unique passwords for your accounts, and consider using a password manager to securely store and manage them.
                                            
                                            8. *Be Careful with Downloads*: Download software and files only from reputable sources, and verify their authenticity before executing or installing them.
                                            
                                            9. *Enable Automatic Updates*: Configure your operating system and software applications to automatically download and install updates to ensure you have the latest security patches.
                                            
                                            10. *Backup Regularly*: Implement a regular backup strategy to protect your data in case of a malware infection or other unforeseen events. Store backups securely, preferably offline or in the cloud.
                                            
                                            11. *Educate Yourself*: Stay informed about the latest malware threats and cybersecurity best practices. Educate yourself and your family members about how to recognize and avoid potential risks online.
                                            
                                            By following these practices, you can significantly reduce the risk of malware infections and protect your computer and data from cyber threats.
                                        </p>
            </div>
          <div class="sec-right">
                            <img src="https://assets-global.website-files.com/64a5e6675a4159253d0ee3e0/65a93ac90b586168e5917ac8_Rhea%20-%20cover_horizontal_low.webp"
                                            alt="">
                                        <video muted src="./accern-rhea-cover-big.mp4"></video>
                                    </div>
                                    <div class="section">
                                        <div class="sec-left">
                                            <h2>What is ransomware,and how can I prevent?</h2>
                                            <p>Ransomware is a type of malware that encrypts files or locks access to a user's system, demanding payment (a ransom) in exchange for restoring access or decrypting the files. Ransomware attacks can be devastating, causing data loss, financial damage, and operational disruptions.

                                                To prevent ransomware attacks, consider the following measures:
                                                
                                                1. *Install and Update Antivirus Software*: Use reputable antivirus or antimalware software and keep it updated to detect and block ransomware threats.
                                                
                                                2. *Keep Software Updated*: Regularly update your operating system, software applications, and security patches to patch known vulnerabilities that ransomware may exploit.
                                                
                                                3. *Exercise Caution with Email*: Be cautious of unsolicited emails and attachments, especially those from unknown senders or containing suspicious links or files. Avoid clicking on links or downloading attachments from suspicious sources.
                                                
                                                4. *Backup Your Data Regularly*: Implement a regular backup strategy to create copies of your important files and data. Store backups securely, preferably offline or in the cloud, to prevent them from being compromised in a ransomware attack.
                                                
                                                5. *Enable Pop-up Blockers*: Configure your web browser to block pop-up windows, which can contain malicious content or redirect you to ransomware-infected sites.
                                                
                                                6. *Use a Firewall*: Enable a firewall on your computer or network to monitor and control incoming and outgoing traffic, blocking unauthorized access and potential ransomware threats.
                                                
                                                7. *Restrict User Privileges*: Limit user privileges to prevent unauthorized installations of software or changes to system settings that could lead to ransomware infections.
                                                
                                                8. *Disable Remote Desktop Protocol (RDP)*: If not needed, disable RDP or use strong, unique passwords and enable two-factor authentication (2FA) for RDP connections to prevent unauthorized access.
                                                
                                                9. *Educate Users*: Educate yourself and your employees about ransomware threats, how to recognize phishing attempts, and best practices for cybersecurity hygiene, such as avoiding clicking on suspicious links or downloading files from unknown sources.
                                                
                                                10. *Implement Endpoint Security Solutions*: Consider using endpoint security solutions that offer advanced threat detection and prevention capabilities, such as behavior-based analysis and ransomware protection features.
                                                
                                                By implementing these preventive measures and maintaining a proactive approach to cybersecurity, you can reduce the risk of falling victim to ransomware attacks and better protect your data and systems.
                                            </p>
            </div>
            <div class="sec-right">
                 <img src="https://assets-global.website-files.com/64a5e6675a4159253d0ee3e0/65a93ac90b586168e5917ac8_Rhea%20-%20cover_horizontal_low.webp"
                                                alt="">
                                            <video muted src="./accern-rhea-cover-big.mp4"></video>
                                        </div>
                                        <div class="section">
                                            <div class="sec-left">
                                                <h2>What if Cyber fraud happen to us?</h2>
                                                <p>If you become a victim of cyber fraud, it's important to take immediate action to mitigate the damage and address the situation. Here are steps you should take:

                                                    1. *Report the Incident*: Contact the appropriate authorities, such as your local law enforcement agency, and file a report about the cyber fraud incident. Provide as much detail as possible about what happened, including any evidence you may have.
                                                    
                                                    2. *Notify Your Bank or Financial Institution*: If the cyber fraud involves unauthorized transactions or compromised financial accounts, notify your bank or financial institution immediately. They can help you secure your accounts, freeze transactions, and initiate investigations into the fraudulent activity.
                                                    
                                                    3. *Change Passwords and Secure Accounts*: Change passwords for all affected accounts, including email, banking, social media, and any other online accounts. Enable multi-factor authentication (MFA) wherever possible to add an extra layer of security.
                                                    
                                                    4. *Review and Monitor Accounts*: Review your financial statements, credit reports, and transaction histories for any unauthorized or suspicious activity. Monitor your accounts regularly for signs of fraud and report any discrepancies to your bank or financial institution.
                                                    
                                                    5. *Report to Credit Bureaus*: If you suspect identity theft or unauthorized access to your personal information, contact the major credit bureaus (Equifax, Experian, TransUnion) to place a fraud alert on your credit report. This can help prevent further fraudulent activity.
                                                    
                                                    6. *Keep Records*: Keep detailed records of all communication, transactions, and evidence related to the cyber fraud incident. This information may be useful for authorities, financial institutions, and credit bureaus during investigations.
                                                    
                                                    7. *Consider Seeking Legal Advice*: Depending on the severity and impact of the cyber fraud, you may want to consult with legal professionals to understand your rights and options for recourse.
                                                    
                                                    8. *Educate Yourself*: Learn from the experience and take steps to improve your cybersecurity awareness and practices. Stay informed about common cyber threats, phishing scams, and best practices for protecting your personal information online.
                                                    
                                                    9. *Stay Vigilant*: Remain vigilant against future cyber threats and scams. Be cautious of unsolicited emails, phone calls, or messages, and avoid clicking on suspicious links or providing personal information to unknown sources.
                                                    
                                                    By taking these proactive steps, you can mitigate the impact of cyber fraud and work towards resolving the issue effectively. Remember, early detection and swift action are crucial in responding to cyber fraud incidents.
                                                </p>
                    </div>
                    <div class="sec-right">
                        <img src="https://assets-global.website-files.com/64a5e6675a4159253d0ee3e0/65a93ac90b586168e5917ac8_Rhea%20-%20cover_horizontal_low.webp"
                                                    alt="">
                                                <video muted src="./accern-rhea-cover-big.mp4"></video>
                                            </div>
                                            <div class="section">
                                                <div class="sec-left">
                                                    <h2>what is Two-factor authentication(2FA),and why is it important?</h2>
                                                    <p>Two-factor authentication (2FA), also known as multi-factor authentication (MFA), is a security mechanism that requires users to provide two different types of identification factors to verify their identity before accessing an account or system. These factors typically fall into three categories:

                                                        1. *Knowledge Factor*: Something the user knows, such as a password, PIN, or security question.
                                                           
                                                        2. *Possession Factor*: Something the user has, such as a smartphone, token, or security key.
                                                           
                                                        3. *Inherence Factor*: Something the user is, such as biometric data (e.g., fingerprint, facial recognition, iris scan).
                                                        
                                                        To authenticate using 2FA, a user must provide two of these factors instead of just a password alone. For example, after entering their password, they may receive a one-time code on their smartphone (possession factor) via an authenticator app or SMS, which they then enter to complete the authentication process.
                                                        
                                                        2FA adds an extra layer of security beyond just a password, making it significantly more difficult for unauthorized individuals to access an account, even if they have obtained the password through phishing, hacking, or other means. It helps mitigate the risk of unauthorized access, identity theft, and account takeover by requiring multiple forms of authentication.
                                                    </p>
                    </div>
                    <div class="sec-right">
                         <img src="https://assets-global.website-files.com/64a5e6675a4159253d0ee3e0/65a93ac90b586168e5917ac8_Rhea%20-%20cover_horizontal_low.webp"
                                                        alt="">
                                                    <video muted src="./accern-rhea-cover-big.mp4"></video>
                                                </div>
                                                <div class="section">
                                                    <div class="sec-left">
                                                        <h2>How can I create strong and secure passwords?</h2>
                                                        <p>Creating a strong and secure password is essential for protecting your accounts and personal information from unauthorized access. Here are some tips for creating strong passwords:

                                                            1. *Length*: Make your password long, ideally at least 12 characters or more. Longer passwords are generally more secure as they are harder for attackers to crack using brute force attacks.
                                                            
                                                            2. *Complexity*: Use a combination of uppercase letters, lowercase letters, numbers, and special characters (!, @, #, $, etc.). Mixing different character types increases the complexity of the password and makes it more difficult to guess or crack.
                                                            
                                                            3. *Avoid Predictable Patterns*: Avoid using easily guessable patterns such as common words, phrases, or sequences of numbers (e.g., "password123" or "123456"). Similarly, avoid using personal information like your name, birthdate, or common words related to your interests.
                                                            
                                                            4. *Randomness*: Generate random passwords using a password manager or online password generator. Randomly generated passwords are typically more secure than ones created by humans, as they are less likely to be based on predictable patterns or easily guessable information.
                                                            
                                                            5. *Unique Passwords*: Use a unique password for each of your accounts. Reusing passwords across multiple accounts increases the risk of a security breach, as compromising one account could lead to unauthorized access to others.
                                                            
                                                            6. *Avoid Dictionary Words*: Avoid using dictionary words or common phrases as passwords, as these are susceptible to dictionary attacks where attackers try known words and phrases to crack passwords.
                                                            
                                                            7. *Passphrases*: Consider using a passphrase—a series of random words or a sentence—that is easy to remember but difficult for others to guess. For example, "CorrectHorseBatteryStaple" is a passphrase that is long, complex, and easy to remember.
                                                            
                                                            8. *Update Regularly*: Regularly update your passwords, especially for sensitive accounts such as online banking or email. Changing passwords periodically reduces the risk of them being compromised over time.
                                                            
                                                            9. *Use Two-Factor Authentication (2FA)*: Whenever possible, enable two-factor authentication (2FA) on your accounts for an extra layer of security. Even if your password is compromised, 2FA requires an additional verification step to access your account.
                                                            
                                                            By following these guidelines, you can create strong and secure passwords that help protect your accounts and personal information from unauthorized access and cyber threats.
                                                        </p>
                    </div>
                    <div class="sec-right">
                        <img src="https://assets-global.website-files.com/64a5e6675a4159253d0ee3e0/65a93ac90b586168e5917ac8_Rhea%20-%20cover_horizontal_low.webp"
                                                            alt="">
                                                        <video muted src="./accern-rhea-cover-big.mp4"></video>
                                                    </div>
                                                    <div class="section">
                                                        <div class="sec-left">
                                                            <h2>What steps can i take to secure my home wi-fi network.</h2>
                                                            <p>Securing your home Wi-Fi network is crucial to protect your internet connection, devices, and personal information from unauthorized access and cyber threats. Here are steps you can take to secure your home Wi-Fi password and network:

                                                                1. *Change the Default Admin Password*: Start by changing the default administrator password for your Wi-Fi router. Use a strong and unique password that is not easily guessable.
                                                                
                                                                2. *Use Strong Encryption*: Enable WPA2 or WPA3 encryption (Wi-Fi Protected Access) on your router to encrypt data transmitted between devices and the router. Avoid using outdated or insecure encryption protocols like WEP (Wired Equivalent Privacy).
                                                                
                                                                3. *Change the Default SSID*: Change the default network name (SSID) of your Wi-Fi network to something unique that doesn't reveal personal information. Avoid using common names or identifying information that could make your network a target.
                                                                
                                                                4. *Enable Network Encryption*: Enable network encryption to secure data transmitted over your Wi-Fi network. This prevents unauthorized users from intercepting and deciphering your data packets.
                                                                
                                                                5. *Use a Strong Wi-Fi Password*: Set a strong and complex Wi-Fi password for your network. Use a combination of uppercase and lowercase letters, numbers, and special characters. Make sure the password is at least 12 characters long and avoid using easily guessable information like dictionary words or personal information.
                                                                
                                                                6. *Enable MAC Address Filtering*: Configure your router to only allow devices with specific MAC addresses to connect to your Wi-Fi network. This adds an extra layer of security by preventing unauthorized devices from accessing your network, even if they have the correct password.
                                                                
                                                                7. *Disable Remote Management*: Disable remote management access to your router's admin interface from the internet. This prevents attackers from accessing your router's settings remotely.
                                                                
                                                                8. *Update Router Firmware*: Regularly check for and install firmware updates for your router to patch security vulnerabilities and improve performance. Many routers have an option to enable automatic updates.
                                                                
                                                                9. *Disable WPS*: Disable Wi-Fi Protected Setup (WPS) on your router, as it can be vulnerable to brute force attacks. WPS allows for easy connection of devices to your network, but it can also be exploited by attackers to gain unauthorized access.
                                                                
                                                                10. *Position the Router Securely*: Place your router in a central location in your home and away from windows or exterior walls to minimize signal leakage outside your home. This helps prevent unauthorized users from accessing your network from outside.
                                                                
                                                                By following these steps, you can significantly improve the security of your home Wi-Fi network and protect your internet connection and devices from unauthorized access and cyber threats.
                                                            </p>
                </div>
               <div class="sec-right">
                    <img src="https://assets-global.website-files.com/64a5e6675a4159253d0ee3e0/65a93ac90b586168e5917ac8_Rhea%20-%20cover_horizontal_low.webp"
                                                                alt="">
                                                            <video muted src="./accern-rhea-cover-big.mp4"></video>
                                                        </div>
                                                        <div class="section">
                                                            <div class="sec-left">
                                                                <h2>What are the risks of using Public wi-fi and how can i stay safe?</h2>
                                                                <p>Using public Wi-Fi networks comes with several security risks due to the open and unsecured nature of these networks. Here are some risks associated with using public Wi-Fi and ways to stay safe:

                                                                    1. *Man-in-the-Middle (MitM) Attacks*: Hackers can intercept and eavesdrop on your internet traffic when connected to public Wi-Fi, potentially capturing sensitive information such as login credentials, credit card numbers, or personal data.
                                                                    
                                                                       - *Stay Safe*: Use a virtual private network (VPN) to encrypt your internet traffic and establish a secure connection to a remote server. VPNs create a secure tunnel between your device and the VPN server, protecting your data from interception by hackers.
                                                                    
                                                                    2. *Rogue Access Points*: Attackers can set up rogue Wi-Fi networks with legitimate-sounding names in public places to trick users into connecting to them. Once connected, hackers can monitor your online activity or launch attacks against your device.
                                                                    
                                                                       - *Stay Safe*: Verify the authenticity of the public Wi-Fi network before connecting by checking with the venue staff or using official signage or information. Avoid connecting to unsecured or unknown networks.
                                                                    
                                                                    3. *Malware Distribution*: Public Wi-Fi networks can be used by attackers to distribute malware to connected devices, either through malicious websites or compromised network infrastructure.
                                                                    
                                                                       - *Stay Safe*: Ensure your device's security software, including antivirus and firewall, is up-to-date. Avoid visiting suspicious or untrusted websites, and refrain from downloading files or clicking on links from unknown sources.
                                                                    
                                                                    4. *Session Hijacking*: Attackers can hijack active sessions on public Wi-Fi networks by stealing session cookies or exploiting session management vulnerabilities, allowing them to impersonate users and gain unauthorized access to their accounts.
                                                                    
                                                                       - *Stay Safe*: Use secure, HTTPS-enabled websites whenever possible, especially for sensitive activities like online banking or shopping. HTTPS encrypts data transmitted between your device and the website, making it more difficult for attackers to intercept or manipulate.
                                                                    
                                                                    5. *Evil Twin Attacks*: Similar to rogue access points, evil twin attacks involve setting up a fake Wi-Fi network with the same name as a legitimate one, tricking users into connecting to it and exposing their data to attackers.
                                                                    
                                                                       - *Stay Safe*: Always verify the SSID (network name) and security settings of public Wi-Fi networks before connecting. Avoid connecting to networks with suspicious or duplicate names.
                                                                    
                                                                    6. *Unencrypted Connections*: Public Wi-Fi networks may lack proper encryption, leaving your data vulnerable to interception by attackers.
                                                                    
                                                                       - *Stay Safe*: Avoid transmitting sensitive information over unencrypted connections, such as unsecured websites or services. Use HTTPS-enabled websites and encrypted communication protocols whenever possible.
                                                                    
                                                                    By taking these precautions, you can minimize the security risks associated with using public Wi-Fi networks and help protect your sensitive information from unauthorized access and interception by attackers.
                                                                </p>
                </div>
                <div class="section">
                    <div class="sec-left">
                        <h2>Call forwarding </h2>
                        <p>Call forwarding is a feature provided by telecommunications carriers that allows incoming calls to be redirected to another phone number. It's commonly used to ensure calls reach users even when they're unavailable or out of the office. However, call forwarding can also be exploited by attackers for malicious purposes, such as diverting calls to unauthorized numbers to intercept sensitive information or conduct fraudulent activities.

                            To stop call forwarding and prevent unauthorized use, follow these steps:
                            
                            1. *Check Call Forwarding Settings*: Review the call forwarding settings on your phone or mobile device to ensure that call forwarding is not enabled. This can usually be done through the phone's settings menu or by dialing a specific code provided by your carrier.
                            
                            2. *Reset Call Forwarding*: If you suspect that call forwarding has been enabled without your consent, contact your telecommunications carrier immediately and request to reset or disable call forwarding on your account. Provide any necessary authentication or verification information to confirm your identity.
                            
                            3. *Change Passwords and PINs*: If you believe your account may have been compromised, change your voicemail password or PIN to prevent unauthorized access to your voicemail and call forwarding settings. Choose a strong and unique password or PIN that is not easily guessable.
                            
                            4. *Monitor Account Activity*: Regularly monitor your phone bill and account activity for any suspicious or unauthorized call forwarding charges or activities. Report any discrepancies or suspicious activity to your carrier promptly.
                            
                            5. *Enable Security Features*: Take advantage of any security features offered by your carrier, such as account PINs, authentication tokens, or two-factor authentication (2FA), to add an extra layer of protection to your account and prevent unauthorized changes.
                            
                            6. *Educate Users*: Educate yourself and your employees about the risks of call forwarding and the importance of safeguarding account credentials and personal information. Train users to recognize and report any suspicious or unauthorized changes to their account settings.
                            
                            By taking these precautions and staying vigilant, you can help prevent unauthorized call forwarding and protect your phone number and communications from being intercepted or manipulated by attackers. If you suspect any unauthorized activity on your account, contact your telecommunications carrier immediately for assistance.</p>
                    </div>
                    <div class="sec-right">
                        <img src="https://assets-global.website-files.com/64a5e6675a4159253d0ee3e0/65a93ac90b586168e5917ac8_Rhea%20-%20cover_horizontal_low.webp"
                            alt="">
                        <video muted src="./accern-rhea-cover-big.mp4"></video>
                    </div>
                </div>
                <div class="section">
                    <div class="sec-left">
                        <h2>Whatsapp-> 2 layer aunthentication.</h2>
                        <p>WhatsApp's two-factor authentication works by adding an extra layer of security to your account beyond just your phone number. When you enable 2FA, you'll be asked to create a six-digit PIN that you'll need to enter each time you verify your phone number on WhatsApp. This PIN adds an additional barrier to prevent unauthorized access to your account, even if someone else has access to your phone number.

                            To enable two-factor authentication on WhatsApp:
                            
                            1. Open WhatsApp and go to "Settings."
                            2. Select "Account," then "Two-step verification."
                            3. Tap "Enable" and follow the prompts to set up a six-digit PIN and provide an optional email address for account recovery.
                            
                            Once enabled, you'll need to enter the PIN whenever you verify your phone number on WhatsApp, such as when you reinstall the app on a new device. Additionally, WhatsApp will periodically prompt you to enter your PIN as an extra security check.
                            
                            While WhatsApp's two-factor authentication provides an extra layer of security, it's important to note that it's not a "three-layer authentication" system. It's always a good idea to keep your WhatsApp app updated and to use strong, unique passwords for your associated email account and any other accounts linked to WhatsApp.</p>
                    </div>
                    <div class="sec-right">
                        <img src="https://assets-global.website-files.com/64a5e6675a4159253d0ee3e0/65a93ac90b586168e5917ac8_Rhea%20-%20cover_horizontal_low.webp"
                            alt="">
                        <video muted src="./accern-rhea-cover-big.mp4"></video>
                    </div>
                </div>
                <div class="section">
                    <div class="sec-left">
                        <h2>How to secure social media account</h2>
                        <p></p>
                    <div class="sec-right">
                        <img src="https://assets-global.website-files.com/64a5e6675a4159253d0ee3e0/65a93ac90b586168e5917ac8_Rhea%20-%20cover_horizontal_low.webp"
                            alt="">
                        <video muted src="./accern-rhea-cover-big.mp4"></video>
                    </div>
                </div>
                <div class="section">
                    <div class="sec-left">
                        <h2></h2>
                        <p></p>
                    </div>
                    <div class="sec-right">
                        <img src="https://assets-global.website-files.com/64a5e6675a4159253d0ee3e0/65a93ac90b586168e5917ac8_Rhea%20-%20cover_horizontal_low.webp"
                            alt="">
                        <video muted src="./accern-rhea-cover-big.mp4"></video>
                    </div>
                </div>
                <div class="section">
                    <div class="sec-left">
                        <h2>Network</h2>
                        <p>Network is crucial for protecting your digital assets. Remember to use strong passwords, enable encryption, regularly update firmware and software, monitor network traffic for anomalies, and implement access controls to prevent unauthorized access. Additionally, educate all users about the importance of cybersecurity practices to ensure a resilient network infrastructure.</p>
                    </div>
                    <div class="sec-right">
                        <img src="https://assets-global.website-files.com/64a5e6675a4159253d0ee3e0/65a93ac90b586168e5917ac8_Rhea%20-%20cover_horizontal_low.webp"
                            alt="">
                        <video muted src="./accern-rhea-cover-big.mp4"></video>
                    </div>
                </div>
                <div class="section">
                    <div class="sec-left">
                        <h2>Network</h2>
                        <p>Network is crucial for protecting your digital assets. Remember to use strong passwords, enable encryption, regularly update firmware and software, monitor network traffic for anomalies, and implement access controls to prevent unauthorized access. Additionally, educate all users about the importance of cybersecurity practices to ensure a resilient network infrastructure.</p>
                    </div>
                    <div class="sec-right">
                        <img src="https://assets-global.website-files.com/64a5e6675a4159253d0ee3e0/65a93ac90b586168e5917ac8_Rhea%20-%20cover_horizontal_low.webp"
                            alt="">
                        <video muted src="./accern-rhea-cover-big.mp4"></video>
                    </div>
                </div>
                <div class="section">
                    <div class="sec-left">
                        <h2>Network</h2>
                        <p>Network is crucial for protecting your digital assets. Remember to use strong passwords, enable encryption, regularly update firmware and software, monitor network traffic for anomalies, and implement access controls to prevent unauthorized access. Additionally, educate all users about the importance of cybersecurity practices to ensure a resilient network infrastructure.</p>
                    </div>
                    <div class="sec-right">
                        <img src="https://assets-global.website-files.com/64a5e6675a4159253d0ee3e0/65a93ac90b586168e5917ac8_Rhea%20-%20cover_horizontal_low.webp"
                            alt="">
                        <video muted src="./accern-rhea-cover-big.mp4"></video>
                    </div>
                </div>
                 <div class="sec-right">
                <img src="https://assets-global.website-files.com/64a5e6675a4159253d0ee3e0/65a93ac90b586168e5917ac8_Rhea%20-%20cover_horizontal_low.webp"
                                                                    alt="">
                                                                <video muted src="./accern-rhea-cover-big.mp4"></video>
                                                            </div> -->

        <div id="page6">
            <h1>The scale of the cyber threat</h1>
            <div id="page6-content">
                <div id="blue-btn">
                    <h4>See all Case Studies <i class="ri-arrow-right-up-line"></i></h4>
                    <h4>See all Case Studies <i class="ri-arrow-right-up-line"></i></h4>
                </div>
                <div id="right-6">
                    <p>The global cyber threat continues to evolve at a rapid pace, with a rising number of data breaches each year. A report by RiskBased Security revealed that a shocking 7.9 billion records have been exposed by data breaches in the first nine months of 2019 alone. This figure is more than double (112%) the number of records exposed in the same period in 2018.

Medical services, retailers and public entities experienced the most breaches, with malicious criminals responsible for most incidents. Some of these sectors are more appealing to cybercriminals because they collect financial and medical data, but all businesses that use networks can be targeted for customer data, corporate espionage, or customer attacks.
</p>
                    <p>With the scale of the cyber threat set to continue to rise, global spending on cybersecurity solutions is naturally increasing. Gartner predicts cybersecurity spending will reach $188.3 billion in 2023 and surpass $260 billion globally by 2026. Governments across the globe have responded to the rising cyber threat with guidance to help organizations implement effective cyber-security practices.

In the U.S., the National Institute of Standards and Technology (NIST) has created a cyber-security framework. To combat the proliferation of malicious code and aid in early detection, the framework recommends continuous, real-time monitoring of all electronic resources.</p>

                </div>
            </div>
        </div>
        <div id="page7">
            <div class="footer">
                <p>&copy; 2024 Cybersecurity Hub. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
              </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
    integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
    integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- <script src="js/script.js"></script> -->
    <script src="script.js"></script>

</body>

</html>