# LaraClean

Clean Architecture sample with Laravel

# どれがどれにあたるか

## 同心円

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
同様です。

## クラス図

左上から

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
