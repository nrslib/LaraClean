<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use packages\Domain\Application\User\UserCreateInteractor;
use packages\Domain\Domain\User\UserId;
use packages\InMemoryInfrastructure\User\InMemoryUserRepository;
use packages\UseCase\User\Create\UserCreateRequest;

class UserCreateInteractorTest extends TestCase
{
    /**
     * テスト：正常にユーザを生成する
     *
     * @return void
     */
    public function testValidCreate()
    {
        $repository = new InMemoryUserRepository();
        $interactor = new UserCreateInteractor($repository);
        $request = new UserCreateRequest('test-name');
        $response = $interactor->handle($request);

        $this->assertNotNull($response);
        $this->assertNotNull($response->getCreatedUserId());

        $userId = new UserId($response->getCreatedUserId());
        $saved = $repository->find($userId);

        $this->assertEquals($saved->getName(), 'test-name');
    }
}
