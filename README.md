# webtest-GREEN

# 8583

docker pull donamato/green:latest

docker run -d -p 8583:80 donamato/green

 -d detached 
 -p specify port
 
  docker run -h http-at-last -d -p 443:443 donamato/green
  
  docker run -h https-at-last -d -p 443:443 -p 80:80 donamato/green
 
