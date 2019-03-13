<?php 
 return array (
  'searchMembers' => 
  array (
  ),
  'findClassroomsByIds' => 
  array (
  ),
  'findActiveCoursesByClassroomId' => 
  array (
  ),
  'findMembersByUserIdAndClassroomIds' => 
  array (
  ),
  'getClassroom' => 
  array (
  ),
  'updateClassroom' => 
  array (
    'module' => 'classroom',
    'action' => 'update',
    'param' => NULL,
    'postfix' => '',
    'funcName' => NULL,
    'funcParam' => 
    array (
      0 => 'id',
      1 => 'fields',
    ),
    'service' => 'Classroom:ClassroomService',
  ),
  'batchUpdateOrg' => 
  array (
  ),
  'waveClassroom' => 
  array (
  ),
  'findAssistants' => 
  array (
  ),
  'findTeachers' => 
  array (
  ),
  'canManageClassroom' => 
  array (
  ),
  'tryManageClassroom' => 
  array (
  ),
  'canCreateThreadEvent' => 
  array (
  ),
  'addCoursesToClassroom' => 
  array (
  ),
  'canTakeClassroom' => 
  array (
  ),
  'tryTakeClassroom' => 
  array (
  ),
  'canHandleClassroom' => 
  array (
  ),
  'tryHandleClassroom' => 
  array (
  ),
  'canLookClassroom' => 
  array (
  ),
  'tryLookClassroom' => 
  array (
  ),
  'canJoinClassroom' => 
  array (
  ),
  'canLearnClassroom' => 
  array (
  ),
  'deleteClassroom' => 
  array (
    'module' => 'classroom',
    'action' => 'delete',
    'param' => NULL,
    'postfix' => '',
    'funcName' => NULL,
    'funcParam' => 
    array (
      0 => 'id',
    ),
    'service' => 'Classroom:ClassroomService',
  ),
  'searchClassrooms' => 
  array (
  ),
  'countClassrooms' => 
  array (
  ),
  'addClassroom' => 
  array (
    'module' => 'classroom',
    'action' => 'create',
    'param' => NULL,
    'postfix' => '',
    'funcName' => NULL,
    'funcParam' => 
    array (
      0 => 'classroom',
    ),
    'service' => 'Classroom:ClassroomService',
  ),
  'findClassroomByTitle' => 
  array (
  ),
  'findClassroomsByLikeTitle' => 
  array (
  ),
  'closeClassroom' => 
  array (
    'module' => 'classroom',
    'action' => 'close',
    'param' => NULL,
    'postfix' => '',
    'funcName' => 'getClassroom',
    'funcParam' => 
    array (
      0 => 'id',
    ),
    'service' => 'Classroom:ClassroomService',
  ),
  'publishClassroom' => 
  array (
    'module' => 'classroom',
    'action' => 'publish',
    'param' => NULL,
    'postfix' => '',
    'funcName' => 'getClassroom',
    'funcParam' => 
    array (
      0 => 'id',
    ),
    'service' => 'Classroom:ClassroomService',
  ),
  'updateClassroomCourses' => 
  array (
  ),
  'findClassroomsByCoursesIds' => 
  array (
  ),
  'findClassroomsByCourseSetIds' => 
  array (
  ),
  'findClassroomCourseByCourseSetIds' => 
  array (
  ),
  'getClassroomByCourseId' => 
  array (
  ),
  'getClassroomCourseByCourseSetId' => 
  array (
  ),
  'updateClassroomTeachers' => 
  array (
  ),
  'changePicture' => 
  array (
    'module' => 'classroom',
    'action' => 'update_picture',
    'param' => 'id',
    'postfix' => '',
    'funcName' => 'getClassroom',
    'funcParam' => 
    array (
      0 => 'id',
      1 => 'data',
    ),
    'service' => 'Classroom:ClassroomService',
  ),
  'isCourseInClassroom' => 
  array (
  ),
  'deleteClassroomCourses' => 
  array (
  ),
  'isClassroomStudent' => 
  array (
  ),
  'isClassroomAuditor' => 
  array (
  ),
  'isClassroomAssistant' => 
  array (
  ),
  'isClassroomHeadTeacher' => 
  array (
  ),
  'updateMember' => 
  array (
  ),
  'searchMemberCount' => 
  array (
  ),
  'searchMemberCountGroupByFields' => 
  array (
  ),
  'getClassroomMember' => 
  array (
  ),
  'remarkStudent' => 
  array (
  ),
  'removeStudent' => 
  array (
  ),
  'becomeStudent' => 
  array (
  ),
  'becomeStudentWithOrder' => 
  array (
  ),
  'becomeAuditor' => 
  array (
  ),
  'becomeAssistant' => 
  array (
  ),
  'addHeadTeacher' => 
  array (
    'module' => 'classroom',
    'action' => 'update_head_teacher',
    'param' => 'classroomId',
    'postfix' => '',
    'funcName' => 'getClassroom',
    'funcParam' => 
    array (
      0 => 'classroomId',
      1 => 'userId',
    ),
    'service' => 'Classroom:ClassroomService',
  ),
  'updateAssistants' => 
  array (
  ),
  'isClassroomTeacher' => 
  array (
  ),
  'findClassroomIdsByCourseId' => 
  array (
  ),
  'findClassroomsByCourseId' => 
  array (
  ),
  'getClassroomCourse' => 
  array (
  ),
  'findCoursesByClassroomId' => 
  array (
  ),
  'findClassroomStudents' => 
  array (
  ),
  'findClassroomMembersByRole' => 
  array (
  ),
  'lockStudent' => 
  array (
  ),
  'unlockStudent' => 
  array (
  ),
  'recommendClassroom' => 
  array (
    'module' => 'classroom',
    'action' => 'recommend',
    'param' => NULL,
    'postfix' => '',
    'funcName' => 'getClassroom',
    'funcParam' => 
    array (
      0 => 'id',
      1 => 'number',
    ),
    'service' => 'Classroom:ClassroomService',
  ),
  'cancelRecommendClassroom' => 
  array (
    'module' => 'classroom',
    'action' => 'cancel_recommend',
    'param' => NULL,
    'postfix' => '',
    'funcName' => 'getClassroom',
    'funcParam' => 
    array (
      0 => 'id',
    ),
    'service' => 'Classroom:ClassroomService',
  ),
  'tryAdminClassroom' => 
  array (
  ),
  'getClassroomMembersByCourseId' => 
  array (
  ),
  'findUserJoinedClassroomIds' => 
  array (
  ),
  'updateLearndNumByClassroomIdAndUserId' => 
  array (
  ),
  'countCoursesByClassroomId' => 
  array (
  ),
  'countMobileFilledMembersByClassroomId' => 
  array (
  ),
  'isClassroomOverDue' => 
  array (
  ),
  'updateMemberDeadlineByMemberId' => 
  array (
  ),
  'updateMembersDeadlineByClassroomId' => 
  array (
  ),
  'findWillOverdueClassrooms' => 
  array (
  ),
  'countCourseTasksByClassroomId' => 
  array (
  ),
  'findUserPaidCoursesInClassroom' => 
  array (
  ),
  'findMembersByMemberIds' => 
  array (
  ),
  'tryFreeJoin' => 
  array (
  ),
  'refreshClassroomHotSeq' => 
  array (
  ),
);