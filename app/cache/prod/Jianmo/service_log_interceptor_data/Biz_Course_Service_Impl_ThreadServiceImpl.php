<?php 
 return array (
  'searchThreads' => 
  array (
  ),
  'countThreads' => 
  array (
  ),
  'getThreadByThreadId' => 
  array (
  ),
  'getThread' => 
  array (
  ),
  'findThreadsByType' => 
  array (
  ),
  'findLatestThreadsByType' => 
  array (
  ),
  'findEliteThreadsByType' => 
  array (
  ),
  'searchThreadCountInCourseIds' => 
  array (
  ),
  'searchThreadInCourseIds' => 
  array (
  ),
  'createThread' => 
  array (
    'module' => 'course',
    'action' => 'create_thread',
    'param' => NULL,
    'postfix' => '',
    'funcName' => NULL,
    'funcParam' => 
    array (
      0 => 'thread',
    ),
    'service' => 'Course:ThreadService',
  ),
  'updateThread' => 
  array (
    'module' => 'course',
    'action' => 'update_thread',
    'param' => 'threadId',
    'postfix' => '',
    'funcName' => 'getThreadByThreadId',
    'funcParam' => 
    array (
      0 => 'courseId',
      1 => 'threadId',
      2 => 'thread',
    ),
    'service' => 'Course:ThreadService',
  ),
  'deleteThread' => 
  array (
    'module' => 'course',
    'action' => 'delete_thread',
    'param' => NULL,
    'postfix' => '',
    'funcName' => 'getThreadByThreadId',
    'funcParam' => 
    array (
      0 => 'threadId',
    ),
    'service' => 'Course:ThreadService',
  ),
  'stickThread' => 
  array (
  ),
  'unstickThread' => 
  array (
  ),
  'eliteThread' => 
  array (
  ),
  'uneliteThread' => 
  array (
  ),
  'hitThread' => 
  array (
  ),
  'findThreadPosts' => 
  array (
  ),
  'searchThreadPosts' => 
  array (
  ),
  'searchThreadPostsCount' => 
  array (
  ),
  'getPostCountByuserIdAndThreadId' => 
  array (
  ),
  'getThreadPostCountByThreadId' => 
  array (
  ),
  'getMyReplyThreadCount' => 
  array (
  ),
  'getMyLatestReplyPerThread' => 
  array (
  ),
  'getThreadPostCount' => 
  array (
  ),
  'findThreadElitePosts' => 
  array (
  ),
  'getPost' => 
  array (
  ),
  'createPost' => 
  array (
  ),
  'postAtNotifyEvent' => 
  array (
  ),
  'updatePost' => 
  array (
  ),
  'deletePost' => 
  array (
  ),
  'countPartakeThreadsByUserId' => 
  array (
  ),
  'findThreadIds' => 
  array (
  ),
  'findPostThreadIds' => 
  array (
  ),
);