# LaraClean

Clean Architecture sample with Laravel

Laravel で実践クリーンアーキテクチャの形に組んでみました。  
詳しい解説は下記解説をご覧ください。  
Laravelで実践クリーンアーキテクチャ: https://qiita.com/nrslib/items/aa49d10dd2bcb3110f22

また次の記事もあわせていただくと参考になるでしょう。
実践クリーンアーキテクチャ: https://nrslib.com/clean-architecture/
実装クリーンアーキテクチャ: https://qiita.com/nrslib/items/a5f902c4defc83bd46b8

# どれがどれにあたるか

どの実装が図におけるどれにあたるかを書いておきます。

## 同心円

![いつもの](https://github.com/nrslib/LaraClean/blob/master/image/CleanArchitecture.jpg)

いつもの図です。

### Controllers
- App\Http\Controllers\UserController

### UseCases
- packages\UseCase\User\Create\UserCreateUseCaseInterface
- packages\UseCase\User\GetList\UserGetUseCaseInterface
- packages\Domain\Application\User\UserCreateInteractor
- packages\Domain\Application\User\UserGetListInteractor
- packages\MockInteractor\User\MockUserCreateInteractor
- packages\MockInteractor\User\MockUserGetInteractor

### Entities
- packages\Domain\Domain 以下

### Presenters
MVC フレームワークにおいては相性が悪いので採用していません。  
ただ Laravel では再現できる方法があるという情報を聞いているので調査後実装予定です。

### Gateways
- packages\Domain\Domain\User\UserRepositoryInterface
- packages\Infrastructure\User\UserRepository
- packages\InMemoryInfrastructure\User\InMemoryUserRepository

Interface と Adapter です。

## 同心円の図の右下

![右下の図](https://github.com/nrslib/LaraClean/blob/master/image/LowerRight.jpg)

案外わかりやすい右下の図です。

### Controller
- App\Http\Controllers\UserController

通常の MVC フレームワークのコントローラです。  
ヘキサゴナルアーキテクチャのアダプタにあたります。

### UseCaseInputPort
- packages\UseCase\User\Create\UserCreateUseCaseInterface
- packages\UseCase\User\GetList\UserGetUseCaseInterface

### UseCaseInteractor
- packages\Domain\Application\User\UserCreateInteractor
- packages\Domain\Application\User\UserGetListInteractor
- packages\MockInteractor\User\MockUserCreateInteractor
- packages\MockInteractor\User\MockUserGetInteractor

### UseCaseOutputPort
MVC フレームワークにおいては相性が悪いので採用していません。  
ただ Laravel では再現できる方法があるという情報を聞いているので調査後実装予定です。

### Presenter
MVC フレームワークにおいては相性が悪いので採用していません。  
ただ Laravel では再現できる方法があるという情報を聞いているので調査後実装予定です。

## クラス図

![クラス図みたいなの](https://github.com/nrslib/LaraClean/blob/master/image/ClassDiagram.jpg)

左上から書いていきます。

### Controller
- App\Http\Controllers\UserController

### InputData
- packages\UseCase\User\Create\UserCreateRequest
- packages\UseCase\User\GetList\UserGetRequest

### InputBoundary
- packages\UseCase\User\Create\UserCreateUseCaseInterface
- packages\UseCase\User\GetList\UserGetUseCaseInterface

### UseCaseInteractor
- packages\Domain\Application\User\UserCreateInteractor
- packages\Domain\Application\User\UserGetListInteractor
- packages\MockInteractor\User\MockUserCreateInteractor
- packages\MockInteractor\User\MockUserGetInteractor

### Entities
- packages\Domain\Domain 以下

### DataAccessInterface
- packages\Domain\Domain\User\UserRepositoryInterface

### OutputData
- packages\UseCase\User\Create\UserCreateResponse
- packages\UseCase\User\GetList\UserGetResponse

### OutputBoundary
MVC フレームワークにおいては相性が悪いので採用していません。  
ただ Laravel では再現できる方法があるという情報を聞いているので調査後実装予定です。

### Presenter
MVC フレームワークにおいては相性が悪いので採用していません。  
ただ Laravel では再現できる方法があるという情報を聞いているので調査後実装予定です。

### ViewModel
- App\Http\Models 以下
