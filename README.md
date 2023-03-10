# update
2023/03/10

# Docks
https://docs.aws.amazon.com/AmazonECS/latest/developerguide/create-container-image.html

## 基本操作
```shell
docker build -t hello-image .
docker run -t -i -p 5000:80 hello-image
aws ecr create-repository --repository-name hello-repository --region ap-northeast-1
docker tag hello-image aws_account_id.dkr.ecr.region.amazonaws.com/hello-repository
aws ecr get-login-password | docker login --username AWS --password-stdin aws_account_id.dkr.ecr.region.amazonaws.com
docker push aws_account_id.dkr.ecr.region.amazonaws.com/hello-repository
```

## 簡易操作
```shell
aws ecr get-login-password --region ap-northeast-1 | docker login --username AWS --password-stdin 944082320565.dkr.ecr.ap-northeast-1.amazonaws.com
docker build -t hello-image .
docker tag hello-image:latest 944082320565.dkr.ecr.ap-northeast-1.amazonaws.com/test-repository:latest
docker push 944082320565.dkr.ecr.ap-northeast-1.amazonaws.com/test-repository:latest
```

## 文字列書き換え
```sed
sed -i 's/APP_NAME=Laravel/APP_NAME=NewAPP/g' .env
```
