# PHP-VUL-APP
## Key OWASP Top 10 Vulnerabilities Included:
Injection (SQL Injection) – index.php has a SQL Injection vulnerability.
Broken Authentication – Not explicitly included but could be simulated by adding vulnerable login logic.
Sensitive Data Exposure – db.php exposes sensitive information (hardcoded credentials).
XML External Entities (XXE) – Not directly covered, but could be added in the future.
Broken Access Control – Could be simulated by exposing unauthorized resources.
Security Misconfigurations – config.php shows error handling issues.
Cross-Site Scripting (XSS) – Reflected XSS in index.php.
Insecure Deserialization – Could be added with deserialization logic.
Using Components with Known Vulnerabilities (SCA) – Outdated libraries in composer.json.
Insufficient Logging and Monitoring – Not explicitly covered but could be simulated with poor logging mechanisms.

# Running SAST, SCA, and IaC Scans:
SAST: Tools like Checkmarx, SonarQube, or Semgrep will detect vulnerabilities like SQL Injection, XSS, hardcoded credentials, and other static code issues.
SCA: Tools like Checkmarx SCA or Snyk will identify outdated and vulnerable third-party libraries, as shown in composer.json.
