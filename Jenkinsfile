pipeline {
	agent none
	stages {
		stage('Checkout SCM'){
			steps{
				checkout scm
			}
		}
		stage("SonarQube check"){
			steps{
				script{
					def scannerHome = tool 'ICT3103Quiz';
					 withSonarQubeEnv() {
					 sh "${tool("SonarQube")}/bin/sonar-scanner \
					 -Dsonar.projectKey=ICT3103Quiz \
					 -Dsonar.sources=. \
					 -Dsonar.host.url=http://47.254.214.83:9000 \
					 -Dsonar.login=a8de1089d49fd6e0dda25c55dc81077019bdce0c94a71cb159585379e3bd23ac"
				}
			}
		}
	}
}