pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                echo 'Running build automation'
                sh 'docker build -t md5 .'
              
            }
        }
        
        stage('Deploy'){
            steps{
                echo 'Doploying Containers'
                echo 'Stopping all md services'
                sh 'docker stop $(docker ps -a -q)'
                sh 'docker system prune -f'
                
                
                sh 'docker run -dit -p 8000:80 --name md5 md5:latest'
               
            
            }
        }
    }
}
