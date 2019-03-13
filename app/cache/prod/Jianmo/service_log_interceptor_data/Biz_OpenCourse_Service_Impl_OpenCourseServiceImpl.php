<?php 
 return array (
  'getCourse' => 
  array (
  ),
  'findCoursesByIds' => 
  array (
  ),
  'searchCourses' => 
  array (
  ),
  'countCourses' => 
  array (
  ),
  'createCourse' => 
  array (
    'module' => 'open_course',
    'action' => 'create_course',
    'param' => NULL,
    'postfix' => '',
    'funcName' => NULL,
    'funcParam' => 
    array (
      0 => 'course',
    ),
    'service' => 'OpenCourse:OpenCourseService',
  ),
  'updateCourse' => 
  array (
    'module' => 'open_course',
    'action' => 'update_course',
    'param' => 'id',
    'postfix' => '',
    'funcName' => NULL,
    'funcParam' => 
    array (
      0 => 'id',
      1 => 'fields',
    ),
    'service' => 'OpenCourse:OpenCourseService',
  ),
  'deleteCourse' => 
  array (
    'module' => 'open_course',
    'action' => 'delete_course',
    'param' => NULL,
    'postfix' => '',
    'funcName' => NULL,
    'funcParam' => 
    array (
      0 => 'id',
    ),
    'service' => 'OpenCourse:OpenCourseService',
  ),
  'waveCourse' => 
  array (
  ),
  'favoriteCourse' => 
  array (
  ),
  'unFavoriteCourse' => 
  array (
  ),
  'changeCoursePicture' => 
  array (
    'module' => 'open_course',
    'action' => 'update_picture',
    'param' => 'courseId',
    'postfix' => '',
    'funcName' => 'getCourse',
    'funcParam' => 
    array (
      0 => 'courseId',
      1 => 'data',
    ),
    'service' => 'OpenCourse:OpenCourseService',
  ),
  'getFavoriteByUserIdAndCourseId' => 
  array (
  ),
  'publishCourse' => 
  array (
    'module' => 'open_course',
    'action' => 'pulish_course',
    'param' => NULL,
    'postfix' => '',
    'funcName' => 'getCourse',
    'funcParam' => 
    array (
      0 => 'id',
    ),
    'service' => 'OpenCourse:OpenCourseService',
  ),
  'closeCourse' => 
  array (
    'module' => 'open_course',
    'action' => 'close_course',
    'param' => NULL,
    'postfix' => '',
    'funcName' => 'getCourse',
    'funcParam' => 
    array (
      0 => 'id',
    ),
    'service' => 'OpenCourse:OpenCourseService',
  ),
  'tryManageOpenCourse' => 
  array (
  ),
  'findCourseTeachers' => 
  array (
  ),
  'getLesson' => 
  array (
  ),
  'getCourseLesson' => 
  array (
  ),
  'findLessonsByIds' => 
  array (
  ),
  'findLessonsByCourseId' => 
  array (
  ),
  'searchLessons' => 
  array (
  ),
  'countLessons' => 
  array (
  ),
  'createLesson' => 
  array (
    'module' => 'open_course',
    'action' => 'add_lesson',
    'param' => NULL,
    'postfix' => '',
    'funcName' => NULL,
    'funcParam' => 
    array (
      0 => 'lesson',
    ),
    'service' => 'OpenCourse:OpenCourseService',
  ),
  'updateLesson' => 
  array (
    'module' => 'open_course',
    'action' => 'update_lesson',
    'param' => 'courseId,lessonId',
    'postfix' => '',
    'funcName' => 'getCourseLesson',
    'funcParam' => 
    array (
      0 => 'courseId',
      1 => 'lessonId',
      2 => 'fields',
    ),
    'service' => 'OpenCourse:OpenCourseService',
  ),
  'waveCourseLesson' => 
  array (
  ),
  'deleteLesson' => 
  array (
    'module' => 'open_course',
    'action' => 'delete_lesson',
    'param' => NULL,
    'postfix' => '',
    'funcName' => NULL,
    'funcParam' => 
    array (
      0 => 'id',
    ),
    'service' => 'OpenCourse:OpenCourseService',
  ),
  'getLessonItems' => 
  array (
  ),
  'unpublishLesson' => 
  array (
  ),
  'publishLesson' => 
  array (
  ),
  'resetLessonMediaId' => 
  array (
  ),
  'sortCourseItems' => 
  array (
  ),
  'liveLessonTimeCheck' => 
  array (
  ),
  'getNextLesson' => 
  array (
  ),
  'generateLessonVideoReplay' => 
  array (
  ),
  'findFinishedLivesWithinTwoHours' => 
  array (
  ),
  'updateLiveStatus' => 
  array (
  ),
  'getMember' => 
  array (
  ),
  'getCourseMember' => 
  array (
  ),
  'getCourseMemberByIp' => 
  array (
  ),
  'getCourseMemberByMobile' => 
  array (
  ),
  'findMembersByCourseIds' => 
  array (
  ),
  'countMembers' => 
  array (
  ),
  'searchMembers' => 
  array (
  ),
  'createMember' => 
  array (
  ),
  'updateMember' => 
  array (
  ),
  'deleteMember' => 
  array (
  ),
  'setCourseTeachers' => 
  array (
    'module' => 'open_course',
    'action' => 'update_teacher',
    'param' => 'courseId',
    'postfix' => '',
    'funcName' => 'getCourse',
    'funcParam' => 
    array (
      0 => 'courseId',
      1 => 'teachers',
    ),
    'service' => 'OpenCourse:OpenCourseService',
  ),
  'getTodayOpenLiveCourseNumber' => 
  array (
  ),
  'findOpenLiveCourse' => 
  array (
  ),
);