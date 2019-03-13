<?php 
 return array (
  'getUser' => 
  array (
  ),
  'getUserAndProfile' => 
  array (
  ),
  'initSystemUsers' => 
  array (
  ),
  'getSimpleUser' => 
  array (
  ),
  'getUserByNickname' => 
  array (
  ),
  'getUserByType' => 
  array (
  ),
  'getUserByUUID' => 
  array (
  ),
  'updateUserUpdatedTime' => 
  array (
  ),
  'getUserByLoginField' => 
  array (
  ),
  'getUserByVerifiedMobile' => 
  array (
  ),
  'countUsersByMobileNotEmpty' => 
  array (
  ),
  'countUserHasMobile' => 
  array (
  ),
  'findUsersHasMobile' => 
  array (
  ),
  'findUnlockedUserMobilesByUserIds' => 
  array (
  ),
  'getUserByEmail' => 
  array (
  ),
  'findUsersByIds' => 
  array (
  ),
  'findUserProfilesByIds' => 
  array (
  ),
  'searchUsers' => 
  array (
  ),
  'countUsers' => 
  array (
  ),
  'setEmailVerified' => 
  array (
  ),
  'changeUserOrg' => 
  array (
  ),
  'batchUpdateOrg' => 
  array (
  ),
  'changeNickname' => 
  array (
    'module' => 'user',
    'action' => 'nickname_change',
    'param' => 'userId',
    'postfix' => '',
    'funcName' => 'getUser',
    'funcParam' => 
    array (
      0 => 'userId',
      1 => 'nickname',
    ),
    'service' => 'User:UserService',
  ),
  'changeEmail' => 
  array (
    'module' => 'user',
    'action' => 'email-changed',
    'param' => 'userId',
    'postfix' => '',
    'funcName' => 'getUser',
    'funcParam' => 
    array (
      0 => 'userId',
      1 => 'email',
    ),
    'service' => 'User:UserService',
  ),
  'changeAvatar' => 
  array (
    'module' => 'user',
    'action' => 'avatar-changed',
    'param' => 'userId',
    'postfix' => '',
    'funcName' => 'getUser',
    'funcParam' => 
    array (
      0 => 'userId',
      1 => 'data',
    ),
    'service' => 'User:UserService',
  ),
  'isNicknameAvaliable' => 
  array (
  ),
  'isEmailAvaliable' => 
  array (
  ),
  'isMobileAvaliable' => 
  array (
  ),
  'hasAdminRoles' => 
  array (
  ),
  'rememberLoginSessionId' => 
  array (
  ),
  'changePayPassword' => 
  array (
    'module' => 'user',
    'action' => 'pay-password-changed',
    'param' => 'userId',
    'postfix' => '',
    'funcName' => 'getUser',
    'funcParam' => 
    array (
      0 => 'userId',
      1 => 'newPayPassword',
    ),
    'service' => 'User:UserService',
  ),
  'verifyPayPassword' => 
  array (
  ),
  'verifyInSaltOut' => 
  array (
  ),
  'isMobileUnique' => 
  array (
  ),
  'changeMobile' => 
  array (
    'module' => 'user',
    'action' => 'verifiedMobile-changed',
    'param' => 'id',
    'postfix' => '',
    'funcName' => 'getUser',
    'funcParam' => 
    array (
      0 => 'id',
      1 => 'mobile',
    ),
    'service' => 'User:UserService',
  ),
  'changePassword' => 
  array (
    'module' => 'user',
    'action' => 'password-changed',
    'param' => 'id',
    'postfix' => '',
    'funcName' => 'getUser',
    'funcParam' => 
    array (
      0 => 'id',
      1 => 'password',
    ),
    'service' => 'User:UserService',
  ),
  'changeRawPassword' => 
  array (
    'module' => 'user',
    'action' => 'raw-password-changed',
    'param' => 'id',
    'postfix' => '',
    'funcName' => 'getUser',
    'funcParam' => 
    array (
      0 => 'id',
      1 => 'rawPassword',
    ),
    'service' => 'User:UserService',
  ),
  'verifyPassword' => 
  array (
  ),
  'register' => 
  array (
  ),
  'markLoginInfo' => 
  array (
  ),
  'markLoginFailed' => 
  array (
  ),
  'markLoginSuccess' => 
  array (
  ),
  'checkLoginForbidden' => 
  array (
  ),
  'updateUserProfile' => 
  array (
    'module' => 'user',
    'action' => 'update',
    'param' => 'id',
    'postfix' => '',
    'funcName' => 'getUserAndProfile',
    'funcParam' => 
    array (
      0 => 'id',
      1 => 'fields',
    ),
    'service' => 'User:UserService',
  ),
  'getUserProfile' => 
  array (
  ),
  'searchUserProfiles' => 
  array (
  ),
  'searchUserProfileCount' => 
  array (
  ),
  'searchApprovals' => 
  array (
  ),
  'searchApprovalsCount' => 
  array (
  ),
  'changeUserRoles' => 
  array (
    'module' => 'user',
    'action' => 'change_role',
    'param' => 'id',
    'postfix' => '',
    'funcName' => 'getUser',
    'funcParam' => 
    array (
      0 => 'id',
      1 => 'roles',
    ),
    'service' => 'User:UserService',
  ),
  'makeToken' => 
  array (
  ),
  'getToken' => 
  array (
  ),
  'searchTokenCount' => 
  array (
  ),
  'deleteToken' => 
  array (
  ),
  'lockUser' => 
  array (
    'module' => 'user',
    'action' => 'lock',
    'param' => 'id',
    'postfix' => '',
    'funcName' => 'getUser',
    'funcParam' => 
    array (
      0 => 'id',
    ),
    'service' => 'User:UserService',
  ),
  'unlockUser' => 
  array (
    'module' => 'user',
    'action' => 'unlock',
    'param' => 'id',
    'postfix' => '',
    'funcName' => 'getUser',
    'funcParam' => 
    array (
      0 => 'id',
    ),
    'service' => 'User:UserService',
  ),
  'promoteUser' => 
  array (
  ),
  'cancelPromoteUser' => 
  array (
  ),
  'findLatestPromotedTeacher' => 
  array (
  ),
  'waveUserCounter' => 
  array (
  ),
  'clearUserCounter' => 
  array (
  ),
  'bindUser' => 
  array (
  ),
  'getUserBindByTypeAndFromId' => 
  array (
  ),
  'getUserBindByTypeAndUserId' => 
  array (
  ),
  'getUserBindByToken' => 
  array (
  ),
  'findBindsByUserId' => 
  array (
  ),
  'unBindUserByTypeAndToId' => 
  array (
  ),
  'follow' => 
  array (
  ),
  'unFollow' => 
  array (
  ),
  'isFollowed' => 
  array (
  ),
  'findUserFollowing' => 
  array (
  ),
  'findAllUserFollowing' => 
  array (
  ),
  'findUserFollowingCount' => 
  array (
  ),
  'findUserFollowers' => 
  array (
  ),
  'findUserFollowerCount' => 
  array (
  ),
  'findAllUserFollower' => 
  array (
  ),
  'findFriends' => 
  array (
  ),
  'findFriendCount' => 
  array (
  ),
  'filterFollowingIds' => 
  array (
  ),
  'getLastestApprovalByUserIdAndStatus' => 
  array (
  ),
  'applyUserApproval' => 
  array (
  ),
  'findUserApprovalsByUserIds' => 
  array (
  ),
  'passApproval' => 
  array (
  ),
  'rejectApproval' => 
  array (
  ),
  'analysisRegisterDataByTime' => 
  array (
  ),
  'countUsersByLessThanCreatedTime' => 
  array (
  ),
  'dropFieldData' => 
  array (
  ),
  'parseAts' => 
  array (
  ),
  'getUserByInviteCode' => 
  array (
  ),
  'findUserIdsByInviteCode' => 
  array (
  ),
  'createInviteCode' => 
  array (
  ),
  'getUserPayAgreement' => 
  array (
  ),
  'getUserPayAgreementByUserIdAndBankAuth' => 
  array (
  ),
  'getUserPayAgreementByUserId' => 
  array (
  ),
  'createUserPayAgreement' => 
  array (
  ),
  'updateUserPayAgreementByUserIdAndBankAuth' => 
  array (
  ),
  'findUserPayAgreementsByUserId' => 
  array (
  ),
  'deleteUserPayAgreements' => 
  array (
  ),
  'updateUserLocale' => 
  array (
  ),
  'changeAvatarFromImgUrl' => 
  array (
  ),
  'changeAvatarByFileId' => 
  array (
  ),
  'generateNickname' => 
  array (
  ),
  'getUserIdsByKeyword' => 
  array (
  ),
  'updateUserNewMessageNum' => 
  array (
  ),
  'makeUUID' => 
  array (
  ),
  'generateUUID' => 
  array (
  ),
  'getSmsRegisterCaptchaStatus' => 
  array (
  ),
  'updateSmsRegisterCaptchaStatus' => 
  array (
  ),
  'initPassword' => 
  array (
  ),
  'setFaceRegistered' => 
  array (
  ),
);