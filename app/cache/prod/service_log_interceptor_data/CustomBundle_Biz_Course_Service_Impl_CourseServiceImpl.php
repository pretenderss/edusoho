<?php 
 return array (
  'getCourse' => 
  array (
  ),
  'hasCourseManagerRole' => 
  array (
  ),
  'findCoursesByIds' => 
  array (
  ),
  'findCoursesByCourseSetIds' => 
  array (
  ),
  'findCoursesByParentIdAndLocked' => 
  array (
  ),
  'findPublishedCoursesByCourseSetId' => 
  array (
  ),
  'findCoursesByCourseSetId' => 
  array (
  ),
  'getDefaultCourseByCourseSetId' => 
  array (
  ),
  'getDefaultCoursesByCourseSetIds' => 
  array (
  ),
  'setDefaultCourse' => 
  array (
  ),
  'getSeqMinPublishedCourseByCourseSetId' => 
  array (
  ),
  'getFirstPublishedCourseByCourseSetId' => 
  array (
  ),
  'getFirstCourseByCourseSetId' => 
  array (
  ),
  'createCourse' => 
  array (
    'module' => 'course',
    'action' => 'create_course',
    'param' => NULL,
    'postfix' => '',
    'funcName' => NULL,
    'funcParam' => 
    array (
      0 => 'course',
    ),
    'service' => 'CustomBundle:Course:CourseService',
  ),
  'copyCourse' => 
  array (
  ),
  'getChapter' => 
  array (
  ),
  'createChapter' => 
  array (
    'module' => 'course',
    'action' => 'create_chapter',
    'param' => NULL,
    'postfix' => '',
    'funcName' => NULL,
    'funcParam' => 
    array (
      0 => 'chapter',
    ),
    'service' => 'CustomBundle:Course:CourseService',
  ),
  'updateChapter' => 
  array (
  ),
  'deleteChapter' => 
  array (
    'module' => 'course',
    'action' => 'delete_chapter',
    'param' => NULL,
    'postfix' => '',
    'funcName' => NULL,
    'funcParam' => 
    array (
      0 => 'courseId',
      1 => 'chapterId',
    ),
    'service' => 'CustomBundle:Course:CourseService',
  ),
  'findChaptersByCourseId' => 
  array (
  ),
  'updateCourse' => 
  array (
    'module' => 'course',
    'action' => 'update_course',
    'param' => 'id',
    'postfix' => '',
    'funcName' => NULL,
    'funcParam' => 
    array (
      0 => 'id',
      1 => 'fields',
    ),
    'service' => 'CustomBundle:Course:CourseService',
  ),
  'updateCourseMarketing' => 
  array (
  ),
  'validateCourseRewardPoint' => 
  array (
  ),
  'updateCourseStatistics' => 
  array (
  ),
  'deleteCourse' => 
  array (
    'module' => 'course',
    'action' => 'delete_course',
    'param' => NULL,
    'postfix' => '',
    'funcName' => NULL,
    'funcParam' => 
    array (
      0 => 'id',
    ),
    'service' => 'CustomBundle:Course:CourseService',
  ),
  'closeCourse' => 
  array (
    'module' => 'course',
    'action' => 'close_course',
    'param' => NULL,
    'postfix' => '',
    'funcName' => 'getCourse',
    'funcParam' => 
    array (
      0 => 'id',
    ),
    'service' => 'CustomBundle:Course:CourseService',
  ),
  'publishCourse' => 
  array (
    'module' => 'course',
    'action' => 'publish_course',
    'param' => 'id',
    'postfix' => '',
    'funcName' => 'getCourse',
    'funcParam' => 
    array (
      0 => 'id',
      1 => 'withTasks',
    ),
    'service' => 'CustomBundle:Course:CourseService',
  ),
  'hasNoTitleForDefaultPlanInMulPlansCourse' => 
  array (
  ),
  'hasMulCourses' => 
  array (
  ),
  'isCourseSetCoursesSummaryEmpty' => 
  array (
  ),
  'publishAndSetDefaultCourseType' => 
  array (
  ),
  'findCourseItems' => 
  array (
  ),
  'findCourseItemsByPaging' => 
  array (
  ),
  'tryManageCourse' => 
  array (
  ),
  'tryTakeCourse' => 
  array (
  ),
  'canTakeCourse' => 
  array (
  ),
  'canJoinCourse' => 
  array (
  ),
  'canLearnCourse' => 
  array (
  ),
  'canLearnTask' => 
  array (
  ),
  'findStudentsByCourseId' => 
  array (
  ),
  'findTeachersByCourseId' => 
  array (
  ),
  'countStudentsByCourseId' => 
  array (
  ),
  'getUserRoleInCourse' => 
  array (
  ),
  'findPriceIntervalByCourseSetIds' => 
  array (
  ),
  'findUserTeachingCoursesByCourseSetId' => 
  array (
  ),
  'findTeachingCoursesByUserId' => 
  array (
  ),
  'findLearnCoursesByUserId' => 
  array (
  ),
  'findUserTeachCourseCount' => 
  array (
  ),
  'findUserTeachCourses' => 
  array (
  ),
  'findUserLearnCourseIds' => 
  array (
  ),
  'countUserLearnCourses' => 
  array (
  ),
  'findPublicCoursesByIds' => 
  array (
  ),
  'countUserLearningCourses' => 
  array (
  ),
  'findUserLearningCourses' => 
  array (
  ),
  'countUserLearnedCourses' => 
  array (
  ),
  'findUserLearnedCourses' => 
  array (
  ),
  'findLearnedCoursesByCourseIdAndUserId' => 
  array (
  ),
  'searchCourses' => 
  array (
  ),
  'searchWithJoinCourseSet' => 
  array (
  ),
  'searchBySort' => 
  array (
  ),
  'searchByStudentNumAndTimeZone' => 
  array (
  ),
  'searchByRatingAndTimeZone' => 
  array (
  ),
  'searchByRecommendedSeq' => 
  array (
  ),
  'searchCourseCount' => 
  array (
  ),
  'countWithJoinCourseSet' => 
  array (
  ),
  'sortCourseItems' => 
  array (
  ),
  'analysisCourseDataByTime' => 
  array (
  ),
  'countCourses' => 
  array (
  ),
  'countCoursesGroupByCourseSetIds' => 
  array (
  ),
  'getMinAndMaxPublishedCoursePriceByCourseSetId' => 
  array (
  ),
  'updateMaxRateByCourseSetId' => 
  array (
  ),
  'recommendCourseByCourseSetId' => 
  array (
  ),
  'cancelRecommendCourseByCourseSetId' => 
  array (
  ),
  'findUserLearningCourseCountNotInClassroom' => 
  array (
  ),
  'findUserLearningCoursesNotInClassroom' => 
  array (
  ),
  'findUserLeanedCourseCount' => 
  array (
  ),
  'findUserLearnedCoursesNotInClassroom' => 
  array (
  ),
  'findUserLearnCourseCountNotInClassroom' => 
  array (
  ),
  'findUserLearnCoursesNotInClassroom' => 
  array (
  ),
  'findUserLearnCoursesNotInClassroomWithType' => 
  array (
  ),
  'findUserTeachCourseCountNotInClassroom' => 
  array (
  ),
  'findUserTeachCoursesNotInClassroom' => 
  array (
  ),
  'findUserFavoritedCourseCountNotInClassroom' => 
  array (
  ),
  'findUserFavoritedCoursesNotInClassroom' => 
  array (
  ),
  'findCourseTasksAndChapters' => 
  array (
  ),
  'updateCategoryByCourseSetId' => 
  array (
  ),
  'calculateLearnProgressByUserIdAndCourseIds' => 
  array (
  ),
  'convertTasks' => 
  array (
  ),
  'findUserManageCoursesByCourseSetId' => 
  array (
  ),
  'unlockCourse' => 
  array (
  ),
  'getFavoritedCourseByUserIdAndCourseSetId' => 
  array (
  ),
  'buildCourseExpiryDataFromClassroom' => 
  array (
  ),
  'hitCourse' => 
  array (
  ),
  'recountLearningData' => 
  array (
  ),
  'tryFreeJoin' => 
  array (
  ),
  'findLiveCourse' => 
  array (
  ),
  'changeHidePublishLesson' => 
  array (
  ),
  'countCoursesByCourseSetId' => 
  array (
  ),
  'sortCourse' => 
  array (
  ),
  'sortByCourses' => 
  array (
  ),
  'countCourseItems' => 
  array (
  ),
  'appendReservationConditions' => 
  array (
  ),
  'fillCourseTryLookVideo' => 
  array (
  ),
  'updateBaseInfo' => 
  array (
    'module' => 'course',
    'action' => 'update_course',
    'param' => 'id',
    'postfix' => '',
    'funcName' => 'getCourse',
    'funcParam' => 
    array (
      0 => 'id',
      1 => 'fields',
    ),
    'service' => 'CustomBundle:Course:CourseService',
  ),
  'canUpdateCourseBaseInfo' => 
  array (
  ),
  'getCustomCourseById' => 
  array (
  ),
);