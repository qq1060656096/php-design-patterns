```
需要企业微信和自有系统的用户同步
1. 创建企业微信部门
2. 企业微信用户同步到自有系统
3. 自有系统的用户同步到企业微信
4. 企业微信userid同步到自有系统
```

```
php examples/StatePattern/WorkWeChatSync/WorkWeChatSyncExample.php
结果:
[step.1]state(CreateWorkWeChatDepartmentState): work weChat create department success
[step.2]state(WorkWeChatUserSyncMySystemState): work weChat user sync my system.
[step.3]state(MySystemUserSyncWorkWeChatState): my system user sync work weChat success.
[step.4]state(WorkWeChatUserIdSyncMySystemState): work weChat userId sync my system.
progress: 100.00
```
