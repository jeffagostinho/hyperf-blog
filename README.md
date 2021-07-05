# Hyperf Blog

Um teste com Hyperf

## Install

Subir os containers
```
docker-compose up -d
```

Instalar as dependências
```
docker exec -it hyperf-blog-app composer install
```

Copiar o .env
```
docker exec -it hyperf-blog-app cp .env.example .env
```

Rodas as migrations
```
docker exec -it hyperf-blog-app php bin/hyperf.php migrate
```

Subir o server
```
docker exec -it hyperf-blog-app php bin/hyperf.php start
```

## Criar um post
```
curl -d "title=Titulo&description=Descrição" -X POST http://127.0.0.1:9501/posts/create
```

## Test
```
ab -k -c 100 -n 10000 http://localhost:9501/posts/1
```

Resultado
```
This is ApacheBench, Version 2.3 <$Revision: 1843412 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking localhost (be patient)
Completed 1000 requests
Completed 2000 requests
Completed 3000 requests
Completed 4000 requests
Completed 5000 requests
Completed 6000 requests
Completed 7000 requests
Completed 8000 requests
Completed 9000 requests
Completed 10000 requests
Finished 10000 requests


Server Software:        Hyperf
Server Hostname:        localhost
Server Port:            9501

Document Path:          /posts/1
Document Length:        119 bytes

Concurrency Level:      100
Time taken for tests:   0.831 seconds
Complete requests:      10000
Failed requests:        0
Keep-Alive requests:    10000
Total transferred:      2830000 bytes
HTML transferred:       1190000 bytes
Requests per second:    12038.26 [#/sec] (mean)
Time per request:       8.307 [ms] (mean)
Time per request:       0.083 [ms] (mean, across all concurrent requests)
Transfer rate:          3326.98 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    0   0.1      0       2
Processing:     1    8   8.2      7     104
Waiting:        1    8   8.2      7     104
Total:          1    8   8.3      7     105

Percentage of the requests served within a certain time (ms)
  50%      7
  66%      8
  75%      9
  80%     10
  90%     12
  95%     14
  98%     19
  99%     56
 100%    105 (longest request)
```