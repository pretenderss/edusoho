<?php 
return array (
  'admin' => 
  array (
    'name' => 'admin.basic_menu',
    'parent' => NULL,
    'children' => 
    array (
      'admin_user' => 
      array (
        'name' => 'admin.nav.user',
        'children' => 
        array (
          'admin_user_show' => 
          array (
            'name' => 'admin.user.basic_menu',
            'children' => 
            array (
              'admin_user_manage' => 
              array (
                'name' => 'admin.user.basic.basic_tab',
                'router_name' => 'admin_user',
                'children' => 
                array (
                  'admin_user_create' => 
                  array (
                    'name' => 'admin.user.basic.basic_tab.create_btn',
                    'mode' => 'modal',
                    'group' => 'topBtn',
                    'visible' => '(user.type != \'system\')',
                  ),
                  'admin_user_edit' => 
                  array (
                    'name' => 'admin.user.basic.basic_tab.edit_btn',
                    'mode' => 'modal',
                    'group' => 'groupButton',
                    'visible' => '(user.type != \'system\')',
                    'router_params' => 
                    array (
                      'id' => '(user.id)',
                    ),
                  ),
                  'admin_user_roles' => 
                  array (
                    'name' => 'admin.user.basic.basic_tab.setting_roles_btn',
                    'mode' => 'modal',
                    'group' => 'groupButton',
                    'visible' => '(user.type != \'system\')',
                    'router_params' => 
                    array (
                      'id' => '(user.id)',
                    ),
                  ),
                  'admin_user_avatar' => 
                  array (
                    'name' => 'admin.user.basic.basic_tab.update_avatar_btn',
                    'mode' => 'modal',
                    'group' => 'groupButton',
                    'visible' => '(user.type != \'system\')',
                    'router_params' => 
                    array (
                      'id' => '(user.id)',
                    ),
                  ),
                  'admin_user_change_password' => 
                  array (
                    'name' => 'admin.user.basic.basic_tab.change_password_btn',
                    'mode' => 'modal',
                    'group' => 'groupButton',
                    'visible' => '(user.type != \'system\')',
                    'router_params' => 
                    array (
                      'userId' => '(user.id)',
                    ),
                  ),
                  'admin_user_send_passwordreset_email' => 
                  array (
                    'name' => 'admin.user.basic.basic_tab.send_passwordreset_email_btn',
                    'group' => 'groupButton',
                    'class' => 'send-passwordreset-email',
                    'mode' => 'none',
                    'visible' => '(user.type != \'system\')',
                    'router_params' => 
                    array (
                      'id' => '(user.id)',
                    ),
                  ),
                  'admin_user_send_emailverify_email' => 
                  array (
                    'name' => 'admin.user.basic.basic_tab.send_emailverify_email_btn',
                    'class' => 'send-emailverify-email',
                    'group' => 'groupButton',
                    'mode' => 'none',
                    'visible' => '(user.type != \'system\')',
                    'router_params' => 
                    array (
                      'id' => '(user.id)',
                    ),
                  ),
                  'admin_user_lock' => 
                  array (
                    'name' => 'admin.user.basic.basic_tab.lock_btn',
                    'group' => 'groupButton',
                    'class' => 'lock-user',
                    'mode' => 'none',
                    'visible' => '(user.type != \'system\' and user.locked == 0)',
                    'router_params' => 
                    array (
                      'id' => '(user.id)',
                    ),
                  ),
                  'admin_user_unlock' => 
                  array (
                    'name' => 'admin.user.basic.basic_tab.unlock_btn',
                    'class' => 'unlock-user',
                    'group' => 'groupButton',
                    'mode' => 'none',
                    'visible' => '(user.type != \'system\' and user.locked == 1)',
                    'router_params' => 
                    array (
                      'id' => '(user.id)',
                    ),
                  ),
                  'admin_user_org_update' => 
                  array (
                    'name' => 'admin.user.basic.basic_tab.org_update_btn',
                    'parent' => 'admin_user_manage',
                    'mode' => 'modal',
                    'group' => 'groupButton',
                    'visible' => '( app.user.id != user.id and setting(\'magic.enable_org\', 0) == 1 )',
                    'router_params' => 
                    array (
                      'id' => '(user.id)',
                    ),
                    'disable' => true,
                  ),
                ),
              ),
              'admin_online' => 
              array (
                'name' => 'admin.user.basic.online',
              ),
              'admin_login_record' => 
              array (
                'name' => 'admin.user.basic.login_record_tab',
              ),
            ),
          ),
          'admin_user_learn_statistics_manage' => 
          array (
            'name' => 'admin.user.statistics_manage',
            'children' => 
            array (
              'admin_user_learn_statistics' => 
              array (
                'name' => 'admin.user.statistics_manage',
              ),
            ),
          ),
          'admin_teacher' => 
          array (
            'name' => 'admin.user.teacher_menu',
            'children' => 
            array (
              'admin_teacher_manage' => 
              array (
                'name' => 'admin.user.teacher.basic_tab',
                'router_name' => 'admin_teacher',
                'disable' => true,
                'children' => 
                array (
                  'admin_teacher_promote' => 
                  array (
                    'name' => 'admin.user.teacher.basic_tab.promote_btn',
                    'class' => 'promote-teacher',
                    'mode' => 'modal',
                    'icon' => 'glyphicon glyphicon-hand-up',
                    'group' => 'groupButton',
                    'visible' => '(user.promoted == 0)',
                    'router_params' => 
                    array (
                      'id' => '(user.id)',
                      'type' => 'teacherList',
                    ),
                  ),
                  'admin_teacher_promote_cancel' => 
                  array (
                    'name' => 'admin.btn.recommend_cancel_btn',
                    'class' => 'cancel-promote-teacher',
                    'mode' => 'none',
                    'group' => 'groupButton',
                    'visible' => '(user.promoted == 1)',
                    'router_params' => 
                    array (
                      'id' => '(user.id)',
                    ),
                  ),
                ),
              ),
              'admin_teacher_promote_list' => 
              array (
                'name' => 'admin.user.teacher.promote_list_tab',
                'disable' => true,
              ),
            ),
          ),
          'admin_approval_manage' => 
          array (
            'name' => 'admin.user.approval_menu',
            'children' => 
            array (
              'admin_approval_approvals' => 
              array (
                'name' => 'admin.user.approval.basic_tab',
                'router_params' => 
                array (
                  'approvalStatus' => 'approving',
                ),
                'disable' => true,
                'children' => 
                array (
                  'admin_approval_cancel' => 
                  array (
                    'name' => 'admin.user.approval.basic_tab.cancel_btn',
                    'router_params' => 
                    array (
                      'id' => '(user.id)',
                    ),
                    'class' => 'btn cancel-approval',
                    'mode' => 'none',
                    'group' => 'groupButton',
                  ),
                ),
              ),
            ),
          ),
          'admin_message_manage' => 
          array (
            'name' => 'admin.user.message_menu',
            'children' => 
            array (
              'admin_message' => 
              array (
                'name' => 'admin.user.message.basic_tab',
                'disable' => true,
              ),
            ),
          ),
        ),
      ),
      'admin_course' => 
      array (
        'name' => 'admin.nav.course',
        'children' => 
        array (
          'admin_course_show' => 
          array (
            'name' => 'admin.course.basic_menu',
            'children' => 
            array (
              'admin_course_manage' => 
              array (
                'name' => 'admin.course.basic.basic_tab',
                'router_name' => 'admin_course_set',
                'children' => 
                array (
                  'admin_course_content_manage' => 
                  array (
                    'name' => 'admin.course.basic.basic_tab.manage_btn',
                  ),
                  'admin_course_add' => 
                  array (
                    'name' => 'admin.course.basic.basic_tab.create_btn',
                    'router_name' => 'course_set_manage_create',
                    'group' => 'topBtn',
                    'blank' => 1,
                  ),
                  'admin_course_set_recommend' => 
                  array (
                    'name' => 'admin.course.basic.basic_tab.recommend_btn',
                    'router_params' => 
                    array (
                      'id' => '(courseSet.id)',
                      'filter' => '(filter)',
                      'ref' => 'courseList',
                    ),
                    'group' => 'groupButton',
                    'visible' => '( filter == \'normal\' and not courseSet.recommended )',
                    'icon' => 'glyphicon glyphicon-hand-up',
                    'mode' => 'modal',
                  ),
                  'admin_course_set_cancel_recommend' => 
                  array (
                    'name' => 'admin.btn.recommend_cancel_btn',
                    'router_params' => 
                    array (
                      'id' => '(courseSet.id)',
                      'filter' => '(filter)',
                      'target' => '(target)',
                    ),
                    'group' => 'groupButton',
                    'class' => 'cancel-recommend-course',
                    'visible' => '( filter == \'normal\' and courseSet.recommended )',
                    'icon' => 'glyphicon glyphicon-hand-right',
                    'mode' => 'none',
                  ),
                  'admin_course_guest_member_preview' => 
                  array (
                    'name' => 'admin.course.basic.basic_tab.preview_btn',
                    'router_name' => 'course_set_show',
                    'router_params' => 
                    array (
                      'id' => '(courseSet.id)',
                      'previewAs' => 'guest',
                    ),
                    'group' => 'groupButton',
                    'icon' => 'glyphicon glyphicon-eye-open',
                    'blank' => 1,
                  ),
                  'admin_course_set_close' => 
                  array (
                    'name' => 'admin.course.basic.basic_tab.close_btn',
                    'router_params' => 
                    array (
                      'id' => '(courseSet.id)',
                      'filter' => '(filter)',
                    ),
                    'group' => 'groupButton',
                    'icon' => 'glyphicon glyphicon-ban-circle',
                    'mode' => 'none',
                    'class' => 'close-course',
                    'visible' => '(courseSet.status == \'published\')',
                  ),
                  'admin_course_sms_prepare' => 
                  array (
                    'name' => 'admin.btn.sms_send_btn',
                    'router_name' => 'sms_prepare',
                    'router_params' => 
                    array (
                      'id' => '(courseSet.id)',
                      'targetType' => 'course',
                    ),
                    'group' => 'groupButton',
                    'icon' => 'glyphicon glyphicon-envelope',
                    'mode' => 'modal',
                    'visible' => '(courseSet.status == \'published\')',
                  ),
                  'admin_course_set_clone' => 
                  array (
                    'name' => 'admin.course.basic.basic_tab.clone_btn',
                    'router_params' => 
                    array (
                      'courseSetId' => '(courseSet.id)',
                    ),
                    'group' => 'groupButton',
                    'class' => 'js-course-set-clone',
                    'icon' => 'glyphicon glyphicon-repeat',
                    'mode' => 'none',
                    'visible' => '(courseSet.parentId == 0 and courseSet.type != \'live\')',
                  ),
                  'admin_course_set_publish' => 
                  array (
                    'name' => 'admin.course.basic.basic_tab.publish_submit_btn',
                    'router_params' => 
                    array (
                      'id' => '(courseSet.id)',
                      'filter' => '(filter)',
                    ),
                    'group' => 'groupButton',
                    'class' => 'publish-course',
                    'icon' => 'glyphicon glyphicon-ok-circle',
                    'mode' => 'none',
                    'visible' => '(courseSet.status != \'published\')',
                  ),
                  'admin_course_set_delete' => 
                  array (
                    'name' => 'admin.course.basic.basic_tab.delete_submit_btn',
                    'class' => 'delete-course',
                    'router_params' => 
                    array (
                      'id' => '(courseSet.id)',
                      'filter' => '(filter)',
                      'type' => '',
                    ),
                    'group' => 'groupButton',
                    'icon' => 'glyphicon glyphicon-trash',
                    'mode' => 'none',
                    'visible' => '( courseSet.status in [\'closed\', \'draft\', \'published\'])',
                  ),
                ),
              ),
              'admin_course_set_recommend_list' => 
              array (
                'name' => 'admin.course.basic.recommend_list_tab',
              ),
              'admin_course_set_data' => 
              array (
                'name' => 'admin.course.basic.analysis_tab',
              ),
            ),
          ),
          'admin_classroom' => 
          array (
            'name' => 'admin.course.classroom_menu',
            'parent' => 'admin_course',
            'before' => 'admin_course_thread',
            'children' => 
            array (
              'admin_classroom_manage' => 
              array (
                'name' => 'admin.course.classroom.basic_tab',
                'router_name' => 'admin_classroom',
                'children' => 
                array (
                  'admin_classroom_content_manage' => 
                  array (
                    'name' => 'admin.course.classroom.basic_tab.manage_btn',
                    'router_name' => 'classroom_manage',
                    'group' => 'btn',
                    'router_params' => 
                    array (
                      'id' => '(classroom.id)',
                    ),
                    'blank' => true,
                  ),
                  'admin_classroom_create' => 
                  array (
                    'name' => 'admin.course.classroom.basic_tab.create_btn',
                    'group' => 'topBtn',
                    'blank' => true,
                  ),
                  'admin_classroom_cancel_recommend' => 
                  array (
                    'name' => 'admin.btn.recommend_cancel_btn',
                    'mode' => 'none',
                    'class' => 'cancel-recommend-classroom',
                    'icon' => 'glyphicon glyphicon-hand-right',
                    'group' => 'groupButton',
                    'router_params' => 
                    array (
                      'id' => '(classroom.id)',
                      'ref' => 'classroomList',
                    ),
                    'visible' => '( classroom.recommended )',
                  ),
                  'admin_classroom_set_recommend' => 
                  array (
                    'name' => 'admin.course.classroom.basic_tab.recommend_btn',
                    'mode' => 'modal',
                    'icon' => 'glyphicon glyphicon-hand-up',
                    'group' => 'groupButton',
                    'router_params' => 
                    array (
                      'id' => '(classroom.id)',
                      'ref' => 'classroomList',
                    ),
                    'visible' => '( not classroom.recommended )',
                  ),
                  'admin_classroom_close' => 
                  array (
                    'name' => 'admin.course.classroom.basic_tab.close_btn',
                    'mode' => 'none',
                    'class' => 'close-classroom',
                    'icon' => 'glyphicon glyphicon-off',
                    'group' => 'groupButton',
                    'router_params' => 
                    array (
                      'id' => '(classroom.id)',
                    ),
                    'visible' => '( classroom.status == \'published\' )',
                  ),
                  'admin_sms_prepare' => 
                  array (
                    'name' => 'admin.btn.sms_send_btn',
                    'router_name' => 'sms_prepare',
                    'mode' => 'modal',
                    'icon' => 'glyphicon glyphicon-envelope',
                    'group' => 'groupButton',
                    'router_params' => 
                    array (
                      'id' => '(classroom.id)',
                      'targetType' => 'classroom',
                    ),
                    'visible' => '( classroom.status == \'published\' )',
                  ),
                  'admin_classroom_open' => 
                  array (
                    'name' => 'admin.course.classroom.basic_tab.publish_submit_btn',
                    'mode' => 'none',
                    'icon' => 'glyphicon glyphicon-ok',
                    'group' => 'groupButton',
                    'class' => 'open-classroom',
                    'router_params' => 
                    array (
                      'id' => '(classroom.id)',
                    ),
                    'visible' => '( classroom.status != \'published\' )',
                  ),
                  'admin_classroom_delete' => 
                  array (
                    'name' => 'admin.course.classroom.basic_tab.delete_submit_btn',
                    'mode' => 'none',
                    'icon' => 'glyphicon glyphicon-remove',
                    'class' => 'delete-classroom',
                    'group' => 'groupButton',
                    'router_params' => 
                    array (
                      'id' => '(classroom.id)',
                    ),
                    'visible' => '( classroom.status==\'draft\' )',
                  ),
                ),
              ),
              'admin_classroom_recommend' => 
              array (
                'name' => 'admin.course.classroom.recommend_tab',
                'router_name' => 'admin_classroom_recommend_list',
              ),
            ),
          ),
          'admin_open_course_manage' => 
          array (
            'name' => 'admin.course.open_course_menu',
            'router_name' => 'admin_open_course',
            'children' => 
            array (
              'admin_open_course' => 
              array (
                'name' => 'admin.course.open_course.basic_tab',
                'disable' => true,
                'router_name' => 'admin_open_course',
              ),
              'admin_open_course_recommend_list' => 
              array (
                'name' => 'admin.course.open_course.recommend_list_tab',
                'disable' => true,
              ),
              'admin_opencourse_analysis' => 
              array (
                'name' => 'admin.course.open_course.analysis_tab',
                'disable' => true,
              ),
            ),
          ),
          'admin_live_course' => 
          array (
            'name' => 'admin.course.live_menu',
            'children' => 
            array (
              'admin_live_course_manage' => 
              array (
                'name' => 'admin.course.live.basic_tab',
                'router_params' => 
                array (
                  'status' => 'coming',
                ),
                'router_name' => 'admin_live_course',
                'disable' => true,
              ),
            ),
          ),
          'admin_course_thread' => 
          array (
            'name' => 'admin.course.thread_menu',
            'children' => 
            array (
              'admin_course_thread_manage' => 
              array (
                'name' => 'admin.course.thread.course_thread_tab',
                'router_name' => 'admin_thread',
                'disable' => true,
              ),
              'admin_classroom_thread_manage' => 
              array (
                'name' => 'admin.course.thread.classroom_thread_tab',
                'parent' => 'admin_course_thread',
                'router_name' => 'admin_classroom_thread',
                'disable' => true,
              ),
            ),
          ),
          'admin_course_question' => 
          array (
            'name' => 'admin.course.question_menu',
            'children' => 
            array (
              'admin_course_question_manage' => 
              array (
                'name' => 'admin.course.question.basic_tab',
                'router_name' => 'admin_question',
                'router_params' => 
                array (
                  'postStatus' => 'unPosted',
                ),
                'disable' => true,
              ),
            ),
          ),
          'admin_course_note' => 
          array (
            'name' => 'admin.course.note_menu',
            'children' => 
            array (
              'admin_course_note_manage' => 
              array (
                'name' => 'admin.course.note.basic_tab',
                'router_name' => 'admin_course_note',
                'disable' => true,
              ),
            ),
          ),
          'admin_course_review' => 
          array (
            'name' => 'admin.course.review_menu',
            'children' => 
            array (
              'admin_course_review_tab' => 
              array (
                'name' => 'admin.course.review.course_review_tab',
                'router_name' => 'admin_review',
                'group' => 1,
                'disable' => true,
              ),
              'admin_classroom_review_tab' => 
              array (
                'name' => 'admin.course.review.classroom_review_tab',
                'router_name' => 'admin_classroom_review',
                'parent' => 'admin_course_review',
                'disable' => true,
              ),
            ),
          ),
          'admin_course_category' => 
          array (
            'name' => 'admin.course.category_menu',
            'children' => 
            array (
              'admin_course_category_manage' => 
              array (
                'name' => 'admin.course.category.course_category_tab',
                'router_name' => 'admin_course_category',
                'disable' => true,
                'children' => 
                array (
                  'admin_category_create' => 
                  array (
                    'name' => 'admin.btn.create_category_btn',
                    'router_params' => 
                    array (
                      'groupId' => '(group.id)',
                    ),
                    'router_params_context' => 1,
                    'group' => 'topBtn',
                    'mode' => 'modal',
                  ),
                ),
              ),
              'admin_classroom_category_manage' => 
              array (
                'name' => 'admin.course.category.classroom_category_tab',
                'parent' => 'admin_course_category',
                'router_name' => 'admin_classroom_category',
                'disable' => true,
                'children' => 
                array (
                  'admin_classroom_category_create' => 
                  array (
                    'name' => 'admin.btn.create_category_btn',
                    'parent' => 'admin_classroom_category_manage',
                    'router_name' => 'admin_category_create',
                    'router_params' => 
                    array (
                      'groupId' => '(group.id)',
                    ),
                    'router_params_context' => 1,
                    'group' => 'topBtn',
                    'mode' => 'modal',
                  ),
                ),
              ),
            ),
          ),
          'admin_course_tag' => 
          array (
            'name' => 'admin.course.tag_menu',
            'children' => 
            array (
              'admin_course_tag_manage' => 
              array (
                'name' => 'admin.course.tag.basic_tab',
                'router_name' => 'admin_tag',
                'disable' => true,
                'children' => 
                array (
                  'admin_course_tag_add' => 
                  array (
                    'name' => 'admin.course.tag.basic_tab.create_btn',
                    'router_name' => 'admin_tag_create',
                    'mode' => 'modal',
                    'group' => 'topBtn',
                  ),
                ),
              ),
              'admin_course_tag_group_manage' => 
              array (
                'name' => 'admin.course.tag.tag_group_tab',
                'router_name' => 'admin_tag_group',
                'disable' => true,
                'children' => 
                array (
                  'admin_course_tag_group_add' => 
                  array (
                    'name' => 'admin.course.tag.tag_group_tab.create_tag_group_btn',
                    'router_name' => 'admin_tag_group_create',
                    'mode' => 'modal',
                    'group' => 'topBtn',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'admin_operation' => 
      array (
        'name' => 'admin.nav.operation',
        'children' => 
        array (
          'admin_operation_article' => 
          array (
            'name' => 'admin.operation.article_menu',
            'children' => 
            array (
              'admin_operation_article_manage' => 
              array (
                'name' => 'admin.operation.article.basic_tab',
                'disable' => true,
                'router_name' => 'admin_article',
                'children' => 
                array (
                  'admin_operation_article_create' => 
                  array (
                    'name' => 'admin.operation.article.basic_tab.create_btn',
                    'router_name' => 'admin_article_create',
                    'group' => 'topBtn',
                  ),
                ),
              ),
              'admin_operation_article_category' => 
              array (
                'name' => 'admin.operation.article.category_tab',
                'disable' => true,
                'router_name' => 'admin_article_category',
                'children' => 
                array (
                  'admin_operation_category_create' => 
                  array (
                    'name' => 'admin.operation.article.category_tab.category_create_btn',
                    'router_name' => 'admin_article_category_create',
                    'mode' => 'modal',
                    'group' => 'topBtn',
                  ),
                ),
              ),
            ),
          ),
          'admin_operation_group' => 
          array (
            'name' => 'admin.operation.group_menu',
            'children' => 
            array (
              'admin_operation_group_manage' => 
              array (
                'name' => 'admin.operation.group.group_tab',
                'disable' => true,
                'router_name' => 'admin_group',
                'children' => 
                array (
                  'admin_operation_group_create' => 
                  array (
                    'name' => 'admin.operation.group.group_tab.create_group_btn',
                    'router_name' => 'group_add',
                    'group' => 'topBtn',
                    'blank' => 1,
                  ),
                ),
              ),
              'admin_operation_group_thread' => 
              array (
                'name' => 'admin.operation.group.group_thread_tab',
                'disable' => true,
                'router_name' => 'admin_groupThread',
              ),
            ),
          ),
          'admin_operation_invite' => 
          array (
            'name' => 'admin.operation.invite_menu',
            'children' => 
            array (
              'admin_operation_invite_record' => 
              array (
                'name' => 'admin.operation.invite.record_tab',
                'disable' => true,
                'router_name' => 'admin_invite_record',
              ),
              'admin_operation_invite_user' => 
              array (
                'name' => 'admin.operation.invite.user_tab',
                'disable' => true,
                'router_name' => 'admin_invite',
              ),
              'admin_operation_invite_coupon' => 
              array (
                'name' => 'admin.operation.invite.coupon_tab',
                'disable' => true,
                'router_name' => 'admin_invite_coupon',
              ),
            ),
          ),
          'admin_announcement' => 
          array (
            'name' => 'admin.operation.announcement_menu',
            'group' => 2,
            'children' => 
            array (
              'admin_announcement_manage' => 
              array (
                'name' => 'admin.operation.announcement.basic_tab',
                'disable' => true,
                'router_name' => 'admin_announcement',
                'children' => 
                array (
                  'admin_announcement_create' => 
                  array (
                    'name' => 'admin.operation.announcement.basic_tab.create_btn',
                    'mode' => 'modal',
                    'group' => 'topBtn',
                  ),
                ),
              ),
            ),
          ),
          'admin_operation_notification' => 
          array (
            'name' => 'admin.operation.notification_menu',
            'group' => 2,
            'children' => 
            array (
              'admin_batch_notification' => 
              array (
                'name' => 'admin.operation.notification.basic_tab',
                'disable' => true,
                'children' => 
                array (
                  'admin_batch_notification_create' => 
                  array (
                    'name' => 'admin.operation.notification.basic_tab.create_btn',
                    'group' => 'topBtn',
                  ),
                ),
              ),
            ),
          ),
          'admin_block_manage' => 
          array (
            'name' => 'admin.operation.block_menu',
            'group' => 2,
            'children' => 
            array (
              'admin_block' => 
              array (
                'name' => 'admin.operation.block.basic_tab',
                'disable' => true,
                'router_params' => 
                array (
                  'category' => 'all',
                ),
                'children' => 
                array (
                  'admin_block_visual_edit' => 
                  array (
                    'name' => 'admin.operation.block.basic_tab.edit_btn',
                    'router_params' => 
                    array (
                      'blockId' => '(blockTemplateId:block.blockTemplateId)',
                    ),
                  ),
                ),
              ),
            ),
          ),
          'admin_operation_content' => 
          array (
            'name' => 'admin.operation.content_menu',
            'group' => 2,
            'children' => 
            array (
              'admin_content' => 
              array (
                'name' => 'admin.operation.content.basic_tab',
                'disable' => true,
                'router_params' => 
                array (
                  'type' => 'page',
                ),
              ),
            ),
          ),
          'admin_operation_mobile' => 
          array (
            'name' => 'admin.operation.mobile_menu',
            'group' => 2,
            'children' => 
            array (
              'admin_operation_mobile_banner_manage' => 
              array (
                'name' => 'admin.operation.mobile.banner_setting_tab',
                'disable' => true,
                'router_name' => 'admin_operation_mobile',
              ),
              'admin_operation_mobile_select_manage' => 
              array (
                'name' => 'admin.operation.mobile.selection_setting_tab',
                'disable' => true,
                'router_name' => 'admin_operation_mobile_select',
              ),
              'admin_discovery_column_index' => 
              array (
                'name' => 'admin.operation.mobile.discovery_column_tab',
                'disable' => true,
                'children' => 
                array (
                  'admin_discovery_column_create' => 
                  array (
                    'name' => 'admin.operation.mobile.discovery_column_tab.create_btn',
                    'group' => 'topBtn',
                    'mode' => 'modal',
                  ),
                ),
              ),
            ),
          ),
          'admin_operation_analysis_register' => 
          array (
            'name' => 'admin.operation.analysis_menu',
            'group' => 3,
            'children' => 
            array (
              'admin_operation_analysis' => 
              array (
                'disable' => true,
                'name' => 'admin.operation.analysis.basic_tab',
                'router_params' => 
                array (
                  'tab' => 'trend',
                  'analysisDateType' => 'register',
                ),
                'router_name' => 'admin_operation_analysis_register',
              ),
            ),
          ),
          'admin_operation_keyword' => 
          array (
            'name' => 'admin.operation.sensitive_words_menu',
            'parent' => 'admin_operation',
            'group' => 4,
            'children' => 
            array (
              'admin_keyword' => 
              array (
                'name' => 'admin.operation.sensitive_words.sensitive_words_list_tab',
                'disable' => true,
                'children' => 
                array (
                  'admin_keyword_create' => 
                  array (
                    'name' => 'admin.operation.sensitive_words.sensitive_words_list_tab.create_btn',
                    'mode' => 'modal',
                    'group' => 'topBtn',
                  ),
                ),
              ),
              'admin_keyword_banlogs' => 
              array (
                'name' => 'admin.operation.sensitive_words.banlogs_tab',
                'disable' => true,
              ),
            ),
          ),
        ),
      ),
      'admin_finance' => 
      array (
        'name' => 'admin.nav.finance',
        'children' => 
        array (
          'admin_orders' => 
          array (
            'name' => 'admin.finance.order_menu',
            'children' => 
            array (
              'admin_order_manage' => 
              array (
                'name' => 'admin.finance.order_menu',
              ),
            ),
          ),
          'admin_order_refunds' => 
          array (
            'name' => 'admin.finance.refunds_menu',
            'children' => 
            array (
              'admin_order_refunds_manage' => 
              array (
                'name' => 'admin.finance.refunds.basic_tab',
                'router_name' => 'admin_order_refunds',
              ),
            ),
          ),
          'admin_bills' => 
          array (
            'name' => 'admin.finance.bills_menu',
            'children' => 
            array (
              'admin_bill_cash' => 
              array (
                'name' => 'admin.finance.bills.cash_records_tab',
                'router_name' => 'admin_bill',
                'router_params' => 
                array (
                  'type' => 'money',
                ),
                'disable' => true,
              ),
              'admin_bill_coin' => 
              array (
                'name' => 'admin.finance.bills.coin_records_tab',
                'router_name' => 'admin_bill',
                'router_params' => 
                array (
                  'type' => 'coin',
                ),
                'disable' => true,
              ),
            ),
          ),
          'admin_coin_user' => 
          array (
            'name' => 'admin.finance.coin_menu',
            'children' => 
            array (
              'admin_coin_user_records' => 
              array (
                'name' => 'admin.finance.coin.basic_tab',
                'disable' => true,
                'router_name' => 'admin_coin_user_records',
              ),
            ),
          ),
        ),
      ),
      'admin_app' => 
      array (
        'name' => 'admin.nav.cloud',
        'visible' => '(not (setting(\'copyright.thirdCopyright\', false) == 1) and not is_without_network())',
        'children' => 
        array (
          'admin_my_cloud' => 
          array (
            'name' => 'admin.cloud.overview_menu',
            'children' => 
            array (
              'admin_my_cloud_overview' => 
              array (
                'name' => 'admin.cloud.overview.basic_tab',
                'disable' => true,
              ),
            ),
          ),
          'admin_cloud_video_setting' => 
          array (
            'name' => 'admin.cloud.video_menu',
            'router_name' => 'admin_cloud_video_overview',
            'visible' => '(cloudStatus())',
            'children' => 
            array (
              'admin_cloud_video_overview' => 
              array (
                'name' => 'admin.tab.overview_tab',
                'disable' => true,
              ),
              'admin_cloud_setting_video' => 
              array (
                'name' => 'admin.tab.setting_tab',
                'disable' => true,
              ),
            ),
          ),
          'admin_cloud_edulive_setting' => 
          array (
            'name' => 'admin.cloud.edulive_menu',
            'visible' => '(cloudStatus())',
            'router_name' => 'admin_cloud_edulive_overview',
            'children' => 
            array (
              'admin_cloud_edulive_overview' => 
              array (
                'name' => 'admin.tab.overview_tab',
                'disable' => true,
              ),
              'admin_setting_cloud_edulive' => 
              array (
                'name' => 'admin.tab.setting_tab',
                'disable' => true,
              ),
            ),
          ),
          'admin_edu_cloud_sms' => 
          array (
            'name' => 'admin.cloud.sms_menu',
            'visible' => '(cloudStatus())',
            'children' => 
            array (
              'admin_edu_cloud_sms_overview' => 
              array (
                'name' => 'admin.tab.overview_tab',
                'router_name' => 'admin_edu_cloud_sms',
                'disable' => true,
              ),
              'admin_edu_cloud_setting_sms' => 
              array (
                'name' => 'admin.tab.setting_tab',
                'disable' => true,
              ),
            ),
          ),
          'admin_edu_cloud_email' => 
          array (
            'name' => 'admin.cloud.email_menu',
            'visible' => '(cloudStatus())',
            'children' => 
            array (
              'admin_edu_cloud_email_overview' => 
              array (
                'name' => 'admin.tab.overview_tab',
                'router_name' => 'admin_edu_cloud_email',
                'disable' => true,
              ),
              'admin_edu_cloud_email_setting' => 
              array (
                'name' => 'admin.tab.setting_tab',
                'disable' => true,
              ),
            ),
          ),
          'admin_edu_cloud_search_setting' => 
          array (
            'name' => 'admin.cloud.search_menu',
            'visible' => '(cloudStatus())',
            'router_name' => 'admin_edu_cloud_search',
            'children' => 
            array (
              'admin_edu_cloud_search_overview' => 
              array (
                'name' => 'admin.tab.overview_tab',
                'router_name' => 'admin_edu_cloud_search',
                'disable' => true,
              ),
              'admin_edu_cloud_setting_search' => 
              array (
                'name' => 'admin.tab.setting_tab',
                'disable' => true,
              ),
            ),
          ),
          'admin_app_im' => 
          array (
            'name' => 'admin.cloud.im_setting_menu',
            'visible' => '(cloudStatus())',
            'children' => 
            array (
              'admin_app_im_setting' => 
              array (
                'name' => 'admin.cloud.im_setting.basic_tab',
                'router_name' => 'admin_app_im',
                'disable' => true,
              ),
            ),
          ),
          'admin_cloud_file_manage' => 
          array (
            'name' => 'admin.cloud.file_menu',
            'visible' => '(cloudStatus())',
            'parent' => 'admin_app',
            'after' => 'admin_app_center_show',
            'children' => 
            array (
              'admin_cloud_file' => 
              array (
                'name' => 'admin.cloud.file.basic_tab',
                'disable' => true,
              ),
            ),
          ),
          'admin_setting_cloud_attachment' => 
          array (
            'name' => 'admin.cloud.attachment_setting_menu',
            'visible' => '(cloudStatus())',
            'children' => 
            array (
              'admin_edu_cloud_attachment' => 
              array (
                'name' => 'admin.cloud.attachment_setting.basic_tab',
                'disable' => true,
              ),
            ),
          ),
          'admin_app_center_show' => 
          array (
            'name' => 'admin.cloud.app_center_menu',
            'router_name' => 'admin_app_center',
            'router_params' => 
            array (
              'postStatus' => 'all',
            ),
            'children' => 
            array (
              'admin_app_center' => 
              array (
                'name' => 'admin.cloud.app_center.basic_tab',
                'router_name' => 'admin_app_center',
                'disable' => true,
                'router_params' => 
                array (
                  'postStatus' => 'all',
                ),
              ),
              'admin_app_installed' => 
              array (
                'name' => 'admin.cloud.app_center.installed_tab',
                'disable' => true,
                'router_params' => 
                array (
                  'postStatus' => 'all',
                ),
              ),
              'admin_app_upgrades' => 
              array (
                'name' => 'admin.cloud.app_center.upgrades_tab',
                'class' => 'app-upgrade',
                'disable' => true,
              ),
              'admin_app_logs' => 
              array (
                'name' => 'admin.cloud.app_center.logs_tab',
                'disable' => true,
              ),
            ),
          ),
          'admin_cloud_attachment_manage' => 
          array (
            'name' => 'admin.cloud.attachment_menu',
            'visible' => '(cloudStatus())',
            'children' => 
            array (
              'admin_cloud_attachment' => 
              array (
                'name' => 'admin.cloud.attachment.basic_tab',
                'disable' => true,
              ),
            ),
          ),
          'admin_cloud_consult' => 
          array (
            'name' => 'admin.cloud.consult_menu',
            'router_name' => 'admin_cloud_consult_setting',
            'visible' => '(cloudStatus())',
            'children' => 
            array (
              'admin_cloud_consult_setting' => 
              array (
                'name' => 'admin.tab.setting_tab',
                'disable' => true,
              ),
            ),
          ),
          'admin_cloud_data_lab_manage' => 
          array (
            'name' => 'admin.cloud.data_lab',
            'visible' => '(cloudStatus())',
            'children' => 
            array (
              'admin_cloud_data_lab' => 
              array (
                'name' => 'admin.cloud.data_lab',
                'router_name' => 'admin_cloud_data_lab',
              ),
              'admin_cloud_data_lab_setting' => 
              array (
                'name' => 'admin.cloud.data_lab_setting',
              ),
            ),
          ),
          'admin_cloud_face_identify_manage' => 
          array (
            'name' => 'admin.cloud.face_identify',
            'visible' => '(cloudStatus() and cloud_info()[\'ai.face\']|default(0) and setting(\'feature.face_enabled\'))',
            'children' => 
            array (
              'admin_cloud_face_identify' => 
              array (
                'name' => 'admin.cloud.face_identify',
              ),
            ),
          ),
          'admin_cloud_feature_lab_manage' => 
          array (
            'name' => 'admin.cloud.feature_lab',
            'visible' => '(cloudStatus())',
            'children' => 
            array (
              'admin_cloud_feature_lab' => 
              array (
                'name' => 'admin.cloud.feature_lab',
              ),
            ),
          ),
          'admin_setting_cloud' => 
          array (
            'name' => 'admin.cloud.cloud_setting_menu',
            'children' => 
            array (
              'admin_setting_my_cloud' => 
              array (
                'name' => 'admin.cloud.cloud_setting.basic_tab',
                'router_name' => 'admin_setting_cloud',
                'disable' => true,
              ),
            ),
          ),
        ),
      ),
      'admin_marketing_top' => 
      array (
        'name' => 'admin.marketing.menu',
        'blank' => true,
        'children' => 
        array (
          '_admin_marketing_marketing_menu' => 
          array (
            'name' => 'admin.marketing.menu',
            'disable' => true,
            'children' => 
            array (
              '_marketing_marketing_page' => 
              array (
                'name' => 'admin.marketing.menu',
                'router_name' => 'admin_login_marketing',
              ),
            ),
          ),
        ),
      ),
      'admin_distributor_top' => 
      array (
        'name' => 'admin.distributor.menu',
        'blank' => true,
        'children' => 
        array (
          '_admin_distributor_menu' => 
          array (
            'name' => 'admin.distributor.menu',
            'disable' => true,
            'children' => 
            array (
              '_distributor_page' => 
              array (
                'name' => 'admin.distributor.menu',
                'router_name' => 'admin_login_distributor',
              ),
            ),
          ),
        ),
      ),
      'admin_mobile' => 
      array (
        'name' => 'admin.nav.wechat_app',
        'router_name' => 'admin_wechat_app',
        'children' => 
        array (
          'admin_wechat_app_manage' => 
          array (
            'name' => 'admin.wechat_app.menu',
            'router_name' => 'admin_wechat_app',
            'children' => 
            array (
              'admin_wechat_app' => 
              array (
                'name' => 'admin.wechat_app.menu',
                'router_name' => 'admin_wechat_app',
                'disable' => true,
              ),
            ),
          ),
          'admin_setting_mobile' => 
          array (
            'name' => 'admin.system.mobile_menu',
            'children' => 
            array (
              'admin_setting_mobile_settings' => 
              array (
                'name' => 'admin.system.mobile.basic_tab',
                'disable' => true,
                'router_name' => 'admin_setting_mobile',
              ),
            ),
          ),
          'admin_h5_set' => 
          array (
            'name' => 'admin.system.mobile.h5',
            'children' => 
            array (
              'admin_wap_set' => 
              array (
                'name' => 'admin.system.operation.wap_tab',
                'disable' => true,
                'router_name' => 'admin_wap_set',
              ),
            ),
          ),
        ),
      ),
      'admin_system' => 
      array (
        'name' => 'admin.nav.system',
        'router_name' => 'admin_setting_site',
        'children' => 
        array (
          'admin_setting' => 
          array (
            'name' => 'admin.system.site_menu',
            'router_name' => 'admin_setting_site',
            'children' => 
            array (
              'admin_setting_message' => 
              array (
                'name' => 'admin.system.site.basic_tab',
                'router_name' => 'admin_setting_site',
                'disable' => true,
              ),
              'admin_setting_theme' => 
              array (
                'name' => 'admin.system.site.theme_tab',
                'disable' => true,
              ),
              'admin_setting_mailer' => 
              array (
                'name' => 'admin.system.site.mailer_setting_tab',
                'disable' => true,
              ),
              'admin_top_navigation' => 
              array (
                'name' => 'admin.system.site.top_navigation_tab',
                'router_name' => 'admin_navigation',
                'disable' => true,
                'router_params' => 
                array (
                  'type' => 'top',
                ),
              ),
              'admin_foot_navigation' => 
              array (
                'name' => 'admin.system.site.foot_navigation_tab',
                'router_name' => 'admin_navigation',
                'disable' => true,
                'router_params' => 
                array (
                  'type' => 'foot',
                ),
              ),
              'admin_friendlyLink_navigation' => 
              array (
                'name' => 'admin.system.site.friendlyLink_navigation_tab',
                'router_name' => 'admin_navigation',
                'disable' => true,
                'router_params' => 
                array (
                  'type' => 'friendlyLink',
                ),
              ),
              'admin_setting_consult_setting' => 
              array (
                'name' => 'admin.system.site.consult_setting_tab',
                'disable' => true,
              ),
              'admin_setting_es_bar' => 
              array (
                'name' => 'admin.system.site.es_bar_tab',
                'disable' => true,
              ),
              'admin_setting_share' => 
              array (
                'name' => 'admin.system.site.share_tab',
                'disable' => true,
              ),
              'admin_setting_security' => 
              array (
                'name' => 'admin.system.site.security_tab',
                'disable' => true,
              ),
            ),
          ),
          'admin_setting_user' => 
          array (
            'name' => 'admin.system.user_menu',
            'children' => 
            array (
              'admin_user_auth' => 
              array (
                'name' => 'admin.system.user.auth_tab',
                'disable' => true,
                'router_name' => 'admin_setting_auth',
              ),
              'admin_setting_login_bind' => 
              array (
                'name' => 'admin.system.user.login_bind_tab',
                'disable' => true,
              ),
              'admin_setting_user_center' => 
              array (
                'name' => 'admin.system.user.user_center_tab',
                'disable' => true,
              ),
              'admin_setting_user_fields' => 
              array (
                'name' => 'admin.system.user.user_fields_tab',
                'disable' => true,
              ),
              'admin_setting_avatar' => 
              array (
                'name' => 'admin.system.user.avatar_tab',
                'disable' => true,
              ),
              'admin_setting_user_message' => 
              array (
                'name' => 'admin.system.user.message',
                'disable' => true,
              ),
            ),
          ),
          'admin_roles' => 
          array (
            'name' => 'admin.system.roles_menu',
            'children' => 
            array (
              'admin_role_manage' => 
              array (
                'name' => 'admin.system.roles.basic_tab',
                'disable' => true,
                'router_name' => 'admin_roles',
                'children' => 
                array (
                  'admin_role_create' => 
                  array (
                    'name' => 'admin.system.roles.basic.create_btn',
                    'mode' => 'modal',
                    'group' => 'topBtn',
                  ),
                  'admin_role_edit' => 
                  array (
                    'name' => 'admin.system.roles.basic.edit_btn',
                    'mode' => 'modal',
                    'group' => 'groupBtn',
                    'router_params' => 
                    array (
                      'id' => '(role.id)',
                    ),
                  ),
                  'admin_role_delete' => 
                  array (
                    'name' => 'admin.system.roles.basic.delete_submit_btn',
                    'class' => 'role-delete js-delete-role',
                    'group' => 'groupBtn',
                    'mode' => 'none',
                    'router_params' => 
                    array (
                      'id' => '(role.id)',
                    ),
                  ),
                ),
              ),
            ),
          ),
          'admin_setting_course_setting' => 
          array (
            'name' => 'admin.system.course_menu',
            'children' => 
            array (
              'admin_setting_course' => 
              array (
                'name' => 'admin.system.course.basic_tab',
                'disable' => true,
                'router_name' => 'admin_setting_course_setting',
              ),
              'admin_setting_questions_setting' => 
              array (
                'name' => 'admin.system.course.questions_tab',
                'disable' => true,
              ),
              'admin_setting_course_avatar' => 
              array (
                'name' => 'admin.system.course.avatar_tab',
                'disable' => true,
              ),
              'admin_classroom_setting' => 
              array (
                'name' => 'admin.system.course.classroom_tab',
                'disable' => true,
                'parent' => 'admin_setting_course_setting',
                'after' => 'admin_setting_live_course',
              ),
            ),
          ),
          'admin_setting_operation' => 
          array (
            'name' => 'admin.system.operation_menu',
            'children' => 
            array (
              'admin_article_setting' => 
              array (
                'name' => 'admin.system.operation.article_tab',
                'disable' => true,
              ),
              'admin_group_set' => 
              array (
                'name' => 'admin.system.operation.group_tab',
                'disable' => true,
              ),
              'admin_invite_set' => 
              array (
                'name' => 'admin.system.operation.invite_tab',
                'disable' => true,
              ),
            ),
          ),
          'admin_setting_finance' => 
          array (
            'name' => 'admin.system.finance_menu',
            'children' => 
            array (
              'admin_payment' => 
              array (
                'name' => 'admin.system.finance.payment_tab',
                'disable' => true,
                'router_name' => 'admin_setting_payment',
              ),
              'admin_coin_settings' => 
              array (
                'name' => 'admin.system.finance.coin_tab',
                'disable' => true,
                'router_name' => 'admin_coin_settings',
              ),
              'admin_setting_refund' => 
              array (
                'name' => 'admin.system.finance.refund_tab',
                'disable' => true,
              ),
            ),
          ),
          'admin_setting_mobile_iap_product' => 
          array (
            'name' => 'admin.system.mobile_iap_product_menu',
            'disable' => true,
            'visible' => '(setting(\'magic.enable_mobile_iap\', \'0\'))',
            'children' => 
            array (
              'admin_setting_mobile_iap_product_list' => 
              array (
                'name' => 'admin.system.mobile_iap_product.basic_tab',
                'router_name' => 'admin_setting_mobile_iap_product',
              ),
            ),
          ),
          'admin_optimize' => 
          array (
            'name' => 'admin.system.optimize_menu',
            'group' => 2,
            'children' => 
            array (
              'admin_optimize_settings' => 
              array (
                'name' => 'admin.system.optimize.basic_tab',
                'disable' => true,
                'router_name' => 'admin_optimize',
              ),
            ),
          ),
          'admin_setting_ip_blacklist' => 
          array (
            'name' => 'admin.system.ip_blacklist_menu',
            'group' => 2,
            'children' => 
            array (
              'admin_setting_ip_blacklist_manage' => 
              array (
                'name' => 'admin.system.ip_blacklist.basic_tab',
                'disable' => true,
                'router_name' => 'admin_setting_ip_blacklist',
              ),
            ),
          ),
          'admin_setting_post_num_rules' => 
          array (
            'name' => 'admin.system.post_num_rules_menu',
            'group' => 2,
            'children' => 
            array (
              'admin_setting_post_num_rules_settings' => 
              array (
                'name' => 'admin.system.post_num_rules.basic_tab',
                'disable' => true,
                'router_name' => 'admin_setting_post_num_rules',
              ),
            ),
          ),
          'admin_report_status' => 
          array (
            'name' => 'admin.system.report_status_menu',
            'group' => 2,
            'children' => 
            array (
              'admin_report_status_list' => 
              array (
                'name' => 'admin.system.report_status.basic_tab',
                'disable' => true,
                'router_name' => 'admin_report_status',
              ),
            ),
          ),
          'admin_logs' => 
          array (
            'name' => 'admin.system.logs_menu',
            'group' => 2,
            'children' => 
            array (
              'admin_logs_query' => 
              array (
                'name' => 'admin.system.logs.logs_query_tab',
                'disable' => true,
                'router_name' => 'admin_logs',
              ),
              'admin_logs_prod' => 
              array (
                'name' => 'admin.system.logs.logs_prod_tab',
                'disable' => true,
              ),
            ),
          ),
          'admin_org_manage' => 
          array (
            'name' => 'admin.system.org_menu',
            'parent' => 'admin_system',
            'group' => 2,
            'disable' => true,
            'visible' => false,
            'children' => 
            array (
              'admin_org' => 
              array (
                'name' => 'admin.system.org.basic_tab',
                'disable' => true,
              ),
            ),
          ),
          'admin_jobs_manage' => 
          array (
            'name' => '任务调度',
            'group' => 2,
            'visible' => false,
            'disable' => true,
            'children' => 
            array (
              'admin_jobs' => 
              array (
                'name' => '任务调度',
              ),
              'admin_job_logs' => 
              array (
                'name' => '任务日志',
              ),
              'admin_crontab' => 
              array (
                'name' => 'crontab管理',
              ),
            ),
          ),
          'admin_xapi_manage' => 
          array (
            'name' => 'xAPI',
            'group' => 2,
            'visible' => false,
            'disable' => true,
            'children' => 
            array (
              'admin_xapi_setting' => 
              array (
                'name' => 'xAPI',
              ),
              'admin_xapi_statement_list' => 
              array (
                'name' => 'Statements',
              ),
            ),
          ),
          'admin_queue_menege' => 
          array (
            'name' => '队列',
            'group' => 2,
            'visible' => false,
            'disable' => true,
            'children' => 
            array (
              'admin_queue_failed_logs' => 
              array (
                'name' => '队列错误日志',
              ),
            ),
          ),
        ),
      ),
    ),
    'code' => 'admin',
  ),
  'admin_user' => 
  array (
    'name' => 'admin.nav.user',
    'children' => 
    array (
      'admin_user_show' => 
      array (
        'name' => 'admin.user.basic_menu',
        'children' => 
        array (
          'admin_user_manage' => 
          array (
            'name' => 'admin.user.basic.basic_tab',
            'router_name' => 'admin_user',
            'children' => 
            array (
              'admin_user_create' => 
              array (
                'name' => 'admin.user.basic.basic_tab.create_btn',
                'mode' => 'modal',
                'group' => 'topBtn',
                'visible' => '(user.type != \'system\')',
              ),
              'admin_user_edit' => 
              array (
                'name' => 'admin.user.basic.basic_tab.edit_btn',
                'mode' => 'modal',
                'group' => 'groupButton',
                'visible' => '(user.type != \'system\')',
                'router_params' => 
                array (
                  'id' => '(user.id)',
                ),
              ),
              'admin_user_roles' => 
              array (
                'name' => 'admin.user.basic.basic_tab.setting_roles_btn',
                'mode' => 'modal',
                'group' => 'groupButton',
                'visible' => '(user.type != \'system\')',
                'router_params' => 
                array (
                  'id' => '(user.id)',
                ),
              ),
              'admin_user_avatar' => 
              array (
                'name' => 'admin.user.basic.basic_tab.update_avatar_btn',
                'mode' => 'modal',
                'group' => 'groupButton',
                'visible' => '(user.type != \'system\')',
                'router_params' => 
                array (
                  'id' => '(user.id)',
                ),
              ),
              'admin_user_change_password' => 
              array (
                'name' => 'admin.user.basic.basic_tab.change_password_btn',
                'mode' => 'modal',
                'group' => 'groupButton',
                'visible' => '(user.type != \'system\')',
                'router_params' => 
                array (
                  'userId' => '(user.id)',
                ),
              ),
              'admin_user_send_passwordreset_email' => 
              array (
                'name' => 'admin.user.basic.basic_tab.send_passwordreset_email_btn',
                'group' => 'groupButton',
                'class' => 'send-passwordreset-email',
                'mode' => 'none',
                'visible' => '(user.type != \'system\')',
                'router_params' => 
                array (
                  'id' => '(user.id)',
                ),
              ),
              'admin_user_send_emailverify_email' => 
              array (
                'name' => 'admin.user.basic.basic_tab.send_emailverify_email_btn',
                'class' => 'send-emailverify-email',
                'group' => 'groupButton',
                'mode' => 'none',
                'visible' => '(user.type != \'system\')',
                'router_params' => 
                array (
                  'id' => '(user.id)',
                ),
              ),
              'admin_user_lock' => 
              array (
                'name' => 'admin.user.basic.basic_tab.lock_btn',
                'group' => 'groupButton',
                'class' => 'lock-user',
                'mode' => 'none',
                'visible' => '(user.type != \'system\' and user.locked == 0)',
                'router_params' => 
                array (
                  'id' => '(user.id)',
                ),
              ),
              'admin_user_unlock' => 
              array (
                'name' => 'admin.user.basic.basic_tab.unlock_btn',
                'class' => 'unlock-user',
                'group' => 'groupButton',
                'mode' => 'none',
                'visible' => '(user.type != \'system\' and user.locked == 1)',
                'router_params' => 
                array (
                  'id' => '(user.id)',
                ),
              ),
              'admin_user_org_update' => 
              array (
                'name' => 'admin.user.basic.basic_tab.org_update_btn',
                'parent' => 'admin_user_manage',
                'mode' => 'modal',
                'group' => 'groupButton',
                'visible' => '( app.user.id != user.id and setting(\'magic.enable_org\', 0) == 1 )',
                'router_params' => 
                array (
                  'id' => '(user.id)',
                ),
                'disable' => true,
              ),
            ),
          ),
          'admin_online' => 
          array (
            'name' => 'admin.user.basic.online',
          ),
          'admin_login_record' => 
          array (
            'name' => 'admin.user.basic.login_record_tab',
          ),
        ),
      ),
      'admin_user_learn_statistics_manage' => 
      array (
        'name' => 'admin.user.statistics_manage',
        'children' => 
        array (
          'admin_user_learn_statistics' => 
          array (
            'name' => 'admin.user.statistics_manage',
          ),
        ),
      ),
      'admin_teacher' => 
      array (
        'name' => 'admin.user.teacher_menu',
        'children' => 
        array (
          'admin_teacher_manage' => 
          array (
            'name' => 'admin.user.teacher.basic_tab',
            'router_name' => 'admin_teacher',
            'disable' => true,
            'children' => 
            array (
              'admin_teacher_promote' => 
              array (
                'name' => 'admin.user.teacher.basic_tab.promote_btn',
                'class' => 'promote-teacher',
                'mode' => 'modal',
                'icon' => 'glyphicon glyphicon-hand-up',
                'group' => 'groupButton',
                'visible' => '(user.promoted == 0)',
                'router_params' => 
                array (
                  'id' => '(user.id)',
                  'type' => 'teacherList',
                ),
              ),
              'admin_teacher_promote_cancel' => 
              array (
                'name' => 'admin.btn.recommend_cancel_btn',
                'class' => 'cancel-promote-teacher',
                'mode' => 'none',
                'group' => 'groupButton',
                'visible' => '(user.promoted == 1)',
                'router_params' => 
                array (
                  'id' => '(user.id)',
                ),
              ),
            ),
          ),
          'admin_teacher_promote_list' => 
          array (
            'name' => 'admin.user.teacher.promote_list_tab',
            'disable' => true,
          ),
        ),
      ),
      'admin_approval_manage' => 
      array (
        'name' => 'admin.user.approval_menu',
        'children' => 
        array (
          'admin_approval_approvals' => 
          array (
            'name' => 'admin.user.approval.basic_tab',
            'router_params' => 
            array (
              'approvalStatus' => 'approving',
            ),
            'disable' => true,
            'children' => 
            array (
              'admin_approval_cancel' => 
              array (
                'name' => 'admin.user.approval.basic_tab.cancel_btn',
                'router_params' => 
                array (
                  'id' => '(user.id)',
                ),
                'class' => 'btn cancel-approval',
                'mode' => 'none',
                'group' => 'groupButton',
              ),
            ),
          ),
        ),
      ),
      'admin_message_manage' => 
      array (
        'name' => 'admin.user.message_menu',
        'children' => 
        array (
          'admin_message' => 
          array (
            'name' => 'admin.user.message.basic_tab',
            'disable' => true,
          ),
        ),
      ),
    ),
    'parent' => 'admin',
    'code' => 'admin_user',
  ),
  'admin_user_show' => 
  array (
    'name' => 'admin.user.basic_menu',
    'children' => 
    array (
      'admin_user_manage' => 
      array (
        'name' => 'admin.user.basic.basic_tab',
        'router_name' => 'admin_user',
        'children' => 
        array (
          'admin_user_create' => 
          array (
            'name' => 'admin.user.basic.basic_tab.create_btn',
            'mode' => 'modal',
            'group' => 'topBtn',
            'visible' => '(user.type != \'system\')',
          ),
          'admin_user_edit' => 
          array (
            'name' => 'admin.user.basic.basic_tab.edit_btn',
            'mode' => 'modal',
            'group' => 'groupButton',
            'visible' => '(user.type != \'system\')',
            'router_params' => 
            array (
              'id' => '(user.id)',
            ),
          ),
          'admin_user_roles' => 
          array (
            'name' => 'admin.user.basic.basic_tab.setting_roles_btn',
            'mode' => 'modal',
            'group' => 'groupButton',
            'visible' => '(user.type != \'system\')',
            'router_params' => 
            array (
              'id' => '(user.id)',
            ),
          ),
          'admin_user_avatar' => 
          array (
            'name' => 'admin.user.basic.basic_tab.update_avatar_btn',
            'mode' => 'modal',
            'group' => 'groupButton',
            'visible' => '(user.type != \'system\')',
            'router_params' => 
            array (
              'id' => '(user.id)',
            ),
          ),
          'admin_user_change_password' => 
          array (
            'name' => 'admin.user.basic.basic_tab.change_password_btn',
            'mode' => 'modal',
            'group' => 'groupButton',
            'visible' => '(user.type != \'system\')',
            'router_params' => 
            array (
              'userId' => '(user.id)',
            ),
          ),
          'admin_user_send_passwordreset_email' => 
          array (
            'name' => 'admin.user.basic.basic_tab.send_passwordreset_email_btn',
            'group' => 'groupButton',
            'class' => 'send-passwordreset-email',
            'mode' => 'none',
            'visible' => '(user.type != \'system\')',
            'router_params' => 
            array (
              'id' => '(user.id)',
            ),
          ),
          'admin_user_send_emailverify_email' => 
          array (
            'name' => 'admin.user.basic.basic_tab.send_emailverify_email_btn',
            'class' => 'send-emailverify-email',
            'group' => 'groupButton',
            'mode' => 'none',
            'visible' => '(user.type != \'system\')',
            'router_params' => 
            array (
              'id' => '(user.id)',
            ),
          ),
          'admin_user_lock' => 
          array (
            'name' => 'admin.user.basic.basic_tab.lock_btn',
            'group' => 'groupButton',
            'class' => 'lock-user',
            'mode' => 'none',
            'visible' => '(user.type != \'system\' and user.locked == 0)',
            'router_params' => 
            array (
              'id' => '(user.id)',
            ),
          ),
          'admin_user_unlock' => 
          array (
            'name' => 'admin.user.basic.basic_tab.unlock_btn',
            'class' => 'unlock-user',
            'group' => 'groupButton',
            'mode' => 'none',
            'visible' => '(user.type != \'system\' and user.locked == 1)',
            'router_params' => 
            array (
              'id' => '(user.id)',
            ),
          ),
          'admin_user_org_update' => 
          array (
            'name' => 'admin.user.basic.basic_tab.org_update_btn',
            'parent' => 'admin_user_manage',
            'mode' => 'modal',
            'group' => 'groupButton',
            'visible' => '( app.user.id != user.id and setting(\'magic.enable_org\', 0) == 1 )',
            'router_params' => 
            array (
              'id' => '(user.id)',
            ),
            'disable' => true,
          ),
        ),
      ),
      'admin_online' => 
      array (
        'name' => 'admin.user.basic.online',
      ),
      'admin_login_record' => 
      array (
        'name' => 'admin.user.basic.login_record_tab',
      ),
    ),
    'parent' => 'admin_user',
    'code' => 'admin_user_show',
  ),
  'admin_user_manage' => 
  array (
    'name' => 'admin.user.basic.basic_tab',
    'router_name' => 'admin_user',
    'children' => 
    array (
      'admin_user_create' => 
      array (
        'name' => 'admin.user.basic.basic_tab.create_btn',
        'mode' => 'modal',
        'group' => 'topBtn',
        'visible' => '(user.type != \'system\')',
      ),
      'admin_user_edit' => 
      array (
        'name' => 'admin.user.basic.basic_tab.edit_btn',
        'mode' => 'modal',
        'group' => 'groupButton',
        'visible' => '(user.type != \'system\')',
        'router_params' => 
        array (
          'id' => '(user.id)',
        ),
      ),
      'admin_user_roles' => 
      array (
        'name' => 'admin.user.basic.basic_tab.setting_roles_btn',
        'mode' => 'modal',
        'group' => 'groupButton',
        'visible' => '(user.type != \'system\')',
        'router_params' => 
        array (
          'id' => '(user.id)',
        ),
      ),
      'admin_user_avatar' => 
      array (
        'name' => 'admin.user.basic.basic_tab.update_avatar_btn',
        'mode' => 'modal',
        'group' => 'groupButton',
        'visible' => '(user.type != \'system\')',
        'router_params' => 
        array (
          'id' => '(user.id)',
        ),
      ),
      'admin_user_change_password' => 
      array (
        'name' => 'admin.user.basic.basic_tab.change_password_btn',
        'mode' => 'modal',
        'group' => 'groupButton',
        'visible' => '(user.type != \'system\')',
        'router_params' => 
        array (
          'userId' => '(user.id)',
        ),
      ),
      'admin_user_send_passwordreset_email' => 
      array (
        'name' => 'admin.user.basic.basic_tab.send_passwordreset_email_btn',
        'group' => 'groupButton',
        'class' => 'send-passwordreset-email',
        'mode' => 'none',
        'visible' => '(user.type != \'system\')',
        'router_params' => 
        array (
          'id' => '(user.id)',
        ),
      ),
      'admin_user_send_emailverify_email' => 
      array (
        'name' => 'admin.user.basic.basic_tab.send_emailverify_email_btn',
        'class' => 'send-emailverify-email',
        'group' => 'groupButton',
        'mode' => 'none',
        'visible' => '(user.type != \'system\')',
        'router_params' => 
        array (
          'id' => '(user.id)',
        ),
      ),
      'admin_user_lock' => 
      array (
        'name' => 'admin.user.basic.basic_tab.lock_btn',
        'group' => 'groupButton',
        'class' => 'lock-user',
        'mode' => 'none',
        'visible' => '(user.type != \'system\' and user.locked == 0)',
        'router_params' => 
        array (
          'id' => '(user.id)',
        ),
      ),
      'admin_user_unlock' => 
      array (
        'name' => 'admin.user.basic.basic_tab.unlock_btn',
        'class' => 'unlock-user',
        'group' => 'groupButton',
        'mode' => 'none',
        'visible' => '(user.type != \'system\' and user.locked == 1)',
        'router_params' => 
        array (
          'id' => '(user.id)',
        ),
      ),
      'admin_user_org_update' => 
      array (
        'name' => 'admin.user.basic.basic_tab.org_update_btn',
        'parent' => 'admin_user_manage',
        'mode' => 'modal',
        'group' => 'groupButton',
        'visible' => '( app.user.id != user.id and setting(\'magic.enable_org\', 0) == 1 )',
        'router_params' => 
        array (
          'id' => '(user.id)',
        ),
        'disable' => true,
      ),
    ),
    'parent' => 'admin_user_show',
    'code' => 'admin_user_manage',
  ),
  'admin_user_create' => 
  array (
    'name' => 'admin.user.basic.basic_tab.create_btn',
    'mode' => 'modal',
    'group' => 'topBtn',
    'visible' => '(user.type != \'system\')',
    'parent' => 'admin_user_manage',
    'code' => 'admin_user_create',
  ),
  'admin_user_edit' => 
  array (
    'name' => 'admin.user.basic.basic_tab.edit_btn',
    'mode' => 'modal',
    'group' => 'groupButton',
    'visible' => '(user.type != \'system\')',
    'router_params' => 
    array (
      'id' => '(user.id)',
    ),
    'parent' => 'admin_user_manage',
    'code' => 'admin_user_edit',
  ),
  'admin_user_roles' => 
  array (
    'name' => 'admin.user.basic.basic_tab.setting_roles_btn',
    'mode' => 'modal',
    'group' => 'groupButton',
    'visible' => '(user.type != \'system\')',
    'router_params' => 
    array (
      'id' => '(user.id)',
    ),
    'parent' => 'admin_user_manage',
    'code' => 'admin_user_roles',
  ),
  'admin_user_avatar' => 
  array (
    'name' => 'admin.user.basic.basic_tab.update_avatar_btn',
    'mode' => 'modal',
    'group' => 'groupButton',
    'visible' => '(user.type != \'system\')',
    'router_params' => 
    array (
      'id' => '(user.id)',
    ),
    'parent' => 'admin_user_manage',
    'code' => 'admin_user_avatar',
  ),
  'admin_user_change_password' => 
  array (
    'name' => 'admin.user.basic.basic_tab.change_password_btn',
    'mode' => 'modal',
    'group' => 'groupButton',
    'visible' => '(user.type != \'system\')',
    'router_params' => 
    array (
      'userId' => '(user.id)',
    ),
    'parent' => 'admin_user_manage',
    'code' => 'admin_user_change_password',
  ),
  'admin_user_send_passwordreset_email' => 
  array (
    'name' => 'admin.user.basic.basic_tab.send_passwordreset_email_btn',
    'group' => 'groupButton',
    'class' => 'send-passwordreset-email',
    'mode' => 'none',
    'visible' => '(user.type != \'system\')',
    'router_params' => 
    array (
      'id' => '(user.id)',
    ),
    'parent' => 'admin_user_manage',
    'code' => 'admin_user_send_passwordreset_email',
  ),
  'admin_user_send_emailverify_email' => 
  array (
    'name' => 'admin.user.basic.basic_tab.send_emailverify_email_btn',
    'class' => 'send-emailverify-email',
    'group' => 'groupButton',
    'mode' => 'none',
    'visible' => '(user.type != \'system\')',
    'router_params' => 
    array (
      'id' => '(user.id)',
    ),
    'parent' => 'admin_user_manage',
    'code' => 'admin_user_send_emailverify_email',
  ),
  'admin_user_lock' => 
  array (
    'name' => 'admin.user.basic.basic_tab.lock_btn',
    'group' => 'groupButton',
    'class' => 'lock-user',
    'mode' => 'none',
    'visible' => '(user.type != \'system\' and user.locked == 0)',
    'router_params' => 
    array (
      'id' => '(user.id)',
    ),
    'parent' => 'admin_user_manage',
    'code' => 'admin_user_lock',
  ),
  'admin_user_unlock' => 
  array (
    'name' => 'admin.user.basic.basic_tab.unlock_btn',
    'class' => 'unlock-user',
    'group' => 'groupButton',
    'mode' => 'none',
    'visible' => '(user.type != \'system\' and user.locked == 1)',
    'router_params' => 
    array (
      'id' => '(user.id)',
    ),
    'parent' => 'admin_user_manage',
    'code' => 'admin_user_unlock',
  ),
  'admin_user_org_update' => 
  array (
    'name' => 'admin.user.basic.basic_tab.org_update_btn',
    'parent' => 'admin_user_manage',
    'mode' => 'modal',
    'group' => 'groupButton',
    'visible' => '( app.user.id != user.id and setting(\'magic.enable_org\', 0) == 1 )',
    'router_params' => 
    array (
      'id' => '(user.id)',
    ),
    'disable' => true,
    'code' => 'admin_user_org_update',
  ),
  'admin_online' => 
  array (
    'name' => 'admin.user.basic.online',
    'parent' => 'admin_user_show',
    'code' => 'admin_online',
  ),
  'admin_login_record' => 
  array (
    'name' => 'admin.user.basic.login_record_tab',
    'parent' => 'admin_user_show',
    'code' => 'admin_login_record',
  ),
  'admin_user_learn_statistics_manage' => 
  array (
    'name' => 'admin.user.statistics_manage',
    'children' => 
    array (
      'admin_user_learn_statistics' => 
      array (
        'name' => 'admin.user.statistics_manage',
      ),
    ),
    'parent' => 'admin_user',
    'code' => 'admin_user_learn_statistics_manage',
  ),
  'admin_user_learn_statistics' => 
  array (
    'name' => 'admin.user.statistics_manage',
    'parent' => 'admin_user_learn_statistics_manage',
    'code' => 'admin_user_learn_statistics',
  ),
  'admin_teacher' => 
  array (
    'name' => 'admin.user.teacher_menu',
    'children' => 
    array (
      'admin_teacher_manage' => 
      array (
        'name' => 'admin.user.teacher.basic_tab',
        'router_name' => 'admin_teacher',
        'disable' => true,
        'children' => 
        array (
          'admin_teacher_promote' => 
          array (
            'name' => 'admin.user.teacher.basic_tab.promote_btn',
            'class' => 'promote-teacher',
            'mode' => 'modal',
            'icon' => 'glyphicon glyphicon-hand-up',
            'group' => 'groupButton',
            'visible' => '(user.promoted == 0)',
            'router_params' => 
            array (
              'id' => '(user.id)',
              'type' => 'teacherList',
            ),
          ),
          'admin_teacher_promote_cancel' => 
          array (
            'name' => 'admin.btn.recommend_cancel_btn',
            'class' => 'cancel-promote-teacher',
            'mode' => 'none',
            'group' => 'groupButton',
            'visible' => '(user.promoted == 1)',
            'router_params' => 
            array (
              'id' => '(user.id)',
            ),
          ),
        ),
      ),
      'admin_teacher_promote_list' => 
      array (
        'name' => 'admin.user.teacher.promote_list_tab',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_user',
    'code' => 'admin_teacher',
  ),
  'admin_teacher_manage' => 
  array (
    'name' => 'admin.user.teacher.basic_tab',
    'router_name' => 'admin_teacher',
    'disable' => true,
    'children' => 
    array (
      'admin_teacher_promote' => 
      array (
        'name' => 'admin.user.teacher.basic_tab.promote_btn',
        'class' => 'promote-teacher',
        'mode' => 'modal',
        'icon' => 'glyphicon glyphicon-hand-up',
        'group' => 'groupButton',
        'visible' => '(user.promoted == 0)',
        'router_params' => 
        array (
          'id' => '(user.id)',
          'type' => 'teacherList',
        ),
      ),
      'admin_teacher_promote_cancel' => 
      array (
        'name' => 'admin.btn.recommend_cancel_btn',
        'class' => 'cancel-promote-teacher',
        'mode' => 'none',
        'group' => 'groupButton',
        'visible' => '(user.promoted == 1)',
        'router_params' => 
        array (
          'id' => '(user.id)',
        ),
      ),
    ),
    'parent' => 'admin_teacher',
    'code' => 'admin_teacher_manage',
  ),
  'admin_teacher_promote' => 
  array (
    'name' => 'admin.user.teacher.basic_tab.promote_btn',
    'class' => 'promote-teacher',
    'mode' => 'modal',
    'icon' => 'glyphicon glyphicon-hand-up',
    'group' => 'groupButton',
    'visible' => '(user.promoted == 0)',
    'router_params' => 
    array (
      'id' => '(user.id)',
      'type' => 'teacherList',
    ),
    'parent' => 'admin_teacher_manage',
    'code' => 'admin_teacher_promote',
  ),
  'admin_teacher_promote_cancel' => 
  array (
    'name' => 'admin.btn.recommend_cancel_btn',
    'class' => 'cancel-promote-teacher',
    'mode' => 'none',
    'group' => 'groupButton',
    'visible' => '(user.promoted == 1)',
    'router_params' => 
    array (
      'id' => '(user.id)',
    ),
    'parent' => 'admin_teacher_manage',
    'code' => 'admin_teacher_promote_cancel',
  ),
  'admin_teacher_promote_list' => 
  array (
    'name' => 'admin.user.teacher.promote_list_tab',
    'disable' => true,
    'parent' => 'admin_teacher',
    'code' => 'admin_teacher_promote_list',
  ),
  'admin_approval_manage' => 
  array (
    'name' => 'admin.user.approval_menu',
    'children' => 
    array (
      'admin_approval_approvals' => 
      array (
        'name' => 'admin.user.approval.basic_tab',
        'router_params' => 
        array (
          'approvalStatus' => 'approving',
        ),
        'disable' => true,
        'children' => 
        array (
          'admin_approval_cancel' => 
          array (
            'name' => 'admin.user.approval.basic_tab.cancel_btn',
            'router_params' => 
            array (
              'id' => '(user.id)',
            ),
            'class' => 'btn cancel-approval',
            'mode' => 'none',
            'group' => 'groupButton',
          ),
        ),
      ),
    ),
    'parent' => 'admin_user',
    'code' => 'admin_approval_manage',
  ),
  'admin_approval_approvals' => 
  array (
    'name' => 'admin.user.approval.basic_tab',
    'router_params' => 
    array (
      'approvalStatus' => 'approving',
    ),
    'disable' => true,
    'children' => 
    array (
      'admin_approval_cancel' => 
      array (
        'name' => 'admin.user.approval.basic_tab.cancel_btn',
        'router_params' => 
        array (
          'id' => '(user.id)',
        ),
        'class' => 'btn cancel-approval',
        'mode' => 'none',
        'group' => 'groupButton',
      ),
    ),
    'parent' => 'admin_approval_manage',
    'code' => 'admin_approval_approvals',
  ),
  'admin_approval_cancel' => 
  array (
    'name' => 'admin.user.approval.basic_tab.cancel_btn',
    'router_params' => 
    array (
      'id' => '(user.id)',
    ),
    'class' => 'btn cancel-approval',
    'mode' => 'none',
    'group' => 'groupButton',
    'parent' => 'admin_approval_approvals',
    'code' => 'admin_approval_cancel',
  ),
  'admin_message_manage' => 
  array (
    'name' => 'admin.user.message_menu',
    'children' => 
    array (
      'admin_message' => 
      array (
        'name' => 'admin.user.message.basic_tab',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_user',
    'code' => 'admin_message_manage',
  ),
  'admin_message' => 
  array (
    'name' => 'admin.user.message.basic_tab',
    'disable' => true,
    'parent' => 'admin_message_manage',
    'code' => 'admin_message',
  ),
  'admin_course' => 
  array (
    'name' => 'admin.nav.course',
    'children' => 
    array (
      'admin_course_show' => 
      array (
        'name' => 'admin.course.basic_menu',
        'children' => 
        array (
          'admin_course_manage' => 
          array (
            'name' => 'admin.course.basic.basic_tab',
            'router_name' => 'admin_course_set',
            'children' => 
            array (
              'admin_course_content_manage' => 
              array (
                'name' => 'admin.course.basic.basic_tab.manage_btn',
              ),
              'admin_course_add' => 
              array (
                'name' => 'admin.course.basic.basic_tab.create_btn',
                'router_name' => 'course_set_manage_create',
                'group' => 'topBtn',
                'blank' => 1,
              ),
              'admin_course_set_recommend' => 
              array (
                'name' => 'admin.course.basic.basic_tab.recommend_btn',
                'router_params' => 
                array (
                  'id' => '(courseSet.id)',
                  'filter' => '(filter)',
                  'ref' => 'courseList',
                ),
                'group' => 'groupButton',
                'visible' => '( filter == \'normal\' and not courseSet.recommended )',
                'icon' => 'glyphicon glyphicon-hand-up',
                'mode' => 'modal',
              ),
              'admin_course_set_cancel_recommend' => 
              array (
                'name' => 'admin.btn.recommend_cancel_btn',
                'router_params' => 
                array (
                  'id' => '(courseSet.id)',
                  'filter' => '(filter)',
                  'target' => '(target)',
                ),
                'group' => 'groupButton',
                'class' => 'cancel-recommend-course',
                'visible' => '( filter == \'normal\' and courseSet.recommended )',
                'icon' => 'glyphicon glyphicon-hand-right',
                'mode' => 'none',
              ),
              'admin_course_guest_member_preview' => 
              array (
                'name' => 'admin.course.basic.basic_tab.preview_btn',
                'router_name' => 'course_set_show',
                'router_params' => 
                array (
                  'id' => '(courseSet.id)',
                  'previewAs' => 'guest',
                ),
                'group' => 'groupButton',
                'icon' => 'glyphicon glyphicon-eye-open',
                'blank' => 1,
              ),
              'admin_course_set_close' => 
              array (
                'name' => 'admin.course.basic.basic_tab.close_btn',
                'router_params' => 
                array (
                  'id' => '(courseSet.id)',
                  'filter' => '(filter)',
                ),
                'group' => 'groupButton',
                'icon' => 'glyphicon glyphicon-ban-circle',
                'mode' => 'none',
                'class' => 'close-course',
                'visible' => '(courseSet.status == \'published\')',
              ),
              'admin_course_sms_prepare' => 
              array (
                'name' => 'admin.btn.sms_send_btn',
                'router_name' => 'sms_prepare',
                'router_params' => 
                array (
                  'id' => '(courseSet.id)',
                  'targetType' => 'course',
                ),
                'group' => 'groupButton',
                'icon' => 'glyphicon glyphicon-envelope',
                'mode' => 'modal',
                'visible' => '(courseSet.status == \'published\')',
              ),
              'admin_course_set_clone' => 
              array (
                'name' => 'admin.course.basic.basic_tab.clone_btn',
                'router_params' => 
                array (
                  'courseSetId' => '(courseSet.id)',
                ),
                'group' => 'groupButton',
                'class' => 'js-course-set-clone',
                'icon' => 'glyphicon glyphicon-repeat',
                'mode' => 'none',
                'visible' => '(courseSet.parentId == 0 and courseSet.type != \'live\')',
              ),
              'admin_course_set_publish' => 
              array (
                'name' => 'admin.course.basic.basic_tab.publish_submit_btn',
                'router_params' => 
                array (
                  'id' => '(courseSet.id)',
                  'filter' => '(filter)',
                ),
                'group' => 'groupButton',
                'class' => 'publish-course',
                'icon' => 'glyphicon glyphicon-ok-circle',
                'mode' => 'none',
                'visible' => '(courseSet.status != \'published\')',
              ),
              'admin_course_set_delete' => 
              array (
                'name' => 'admin.course.basic.basic_tab.delete_submit_btn',
                'class' => 'delete-course',
                'router_params' => 
                array (
                  'id' => '(courseSet.id)',
                  'filter' => '(filter)',
                  'type' => '',
                ),
                'group' => 'groupButton',
                'icon' => 'glyphicon glyphicon-trash',
                'mode' => 'none',
                'visible' => '( courseSet.status in [\'closed\', \'draft\', \'published\'])',
              ),
            ),
          ),
          'admin_course_set_recommend_list' => 
          array (
            'name' => 'admin.course.basic.recommend_list_tab',
          ),
          'admin_course_set_data' => 
          array (
            'name' => 'admin.course.basic.analysis_tab',
          ),
        ),
      ),
      'admin_classroom' => 
      array (
        'name' => 'admin.course.classroom_menu',
        'parent' => 'admin_course',
        'before' => 'admin_course_thread',
        'children' => 
        array (
          'admin_classroom_manage' => 
          array (
            'name' => 'admin.course.classroom.basic_tab',
            'router_name' => 'admin_classroom',
            'children' => 
            array (
              'admin_classroom_content_manage' => 
              array (
                'name' => 'admin.course.classroom.basic_tab.manage_btn',
                'router_name' => 'classroom_manage',
                'group' => 'btn',
                'router_params' => 
                array (
                  'id' => '(classroom.id)',
                ),
                'blank' => true,
              ),
              'admin_classroom_create' => 
              array (
                'name' => 'admin.course.classroom.basic_tab.create_btn',
                'group' => 'topBtn',
                'blank' => true,
              ),
              'admin_classroom_cancel_recommend' => 
              array (
                'name' => 'admin.btn.recommend_cancel_btn',
                'mode' => 'none',
                'class' => 'cancel-recommend-classroom',
                'icon' => 'glyphicon glyphicon-hand-right',
                'group' => 'groupButton',
                'router_params' => 
                array (
                  'id' => '(classroom.id)',
                  'ref' => 'classroomList',
                ),
                'visible' => '( classroom.recommended )',
              ),
              'admin_classroom_set_recommend' => 
              array (
                'name' => 'admin.course.classroom.basic_tab.recommend_btn',
                'mode' => 'modal',
                'icon' => 'glyphicon glyphicon-hand-up',
                'group' => 'groupButton',
                'router_params' => 
                array (
                  'id' => '(classroom.id)',
                  'ref' => 'classroomList',
                ),
                'visible' => '( not classroom.recommended )',
              ),
              'admin_classroom_close' => 
              array (
                'name' => 'admin.course.classroom.basic_tab.close_btn',
                'mode' => 'none',
                'class' => 'close-classroom',
                'icon' => 'glyphicon glyphicon-off',
                'group' => 'groupButton',
                'router_params' => 
                array (
                  'id' => '(classroom.id)',
                ),
                'visible' => '( classroom.status == \'published\' )',
              ),
              'admin_sms_prepare' => 
              array (
                'name' => 'admin.btn.sms_send_btn',
                'router_name' => 'sms_prepare',
                'mode' => 'modal',
                'icon' => 'glyphicon glyphicon-envelope',
                'group' => 'groupButton',
                'router_params' => 
                array (
                  'id' => '(classroom.id)',
                  'targetType' => 'classroom',
                ),
                'visible' => '( classroom.status == \'published\' )',
              ),
              'admin_classroom_open' => 
              array (
                'name' => 'admin.course.classroom.basic_tab.publish_submit_btn',
                'mode' => 'none',
                'icon' => 'glyphicon glyphicon-ok',
                'group' => 'groupButton',
                'class' => 'open-classroom',
                'router_params' => 
                array (
                  'id' => '(classroom.id)',
                ),
                'visible' => '( classroom.status != \'published\' )',
              ),
              'admin_classroom_delete' => 
              array (
                'name' => 'admin.course.classroom.basic_tab.delete_submit_btn',
                'mode' => 'none',
                'icon' => 'glyphicon glyphicon-remove',
                'class' => 'delete-classroom',
                'group' => 'groupButton',
                'router_params' => 
                array (
                  'id' => '(classroom.id)',
                ),
                'visible' => '( classroom.status==\'draft\' )',
              ),
            ),
          ),
          'admin_classroom_recommend' => 
          array (
            'name' => 'admin.course.classroom.recommend_tab',
            'router_name' => 'admin_classroom_recommend_list',
          ),
        ),
      ),
      'admin_open_course_manage' => 
      array (
        'name' => 'admin.course.open_course_menu',
        'router_name' => 'admin_open_course',
        'children' => 
        array (
          'admin_open_course' => 
          array (
            'name' => 'admin.course.open_course.basic_tab',
            'disable' => true,
            'router_name' => 'admin_open_course',
          ),
          'admin_open_course_recommend_list' => 
          array (
            'name' => 'admin.course.open_course.recommend_list_tab',
            'disable' => true,
          ),
          'admin_opencourse_analysis' => 
          array (
            'name' => 'admin.course.open_course.analysis_tab',
            'disable' => true,
          ),
        ),
      ),
      'admin_live_course' => 
      array (
        'name' => 'admin.course.live_menu',
        'children' => 
        array (
          'admin_live_course_manage' => 
          array (
            'name' => 'admin.course.live.basic_tab',
            'router_params' => 
            array (
              'status' => 'coming',
            ),
            'router_name' => 'admin_live_course',
            'disable' => true,
          ),
        ),
      ),
      'admin_course_thread' => 
      array (
        'name' => 'admin.course.thread_menu',
        'children' => 
        array (
          'admin_course_thread_manage' => 
          array (
            'name' => 'admin.course.thread.course_thread_tab',
            'router_name' => 'admin_thread',
            'disable' => true,
          ),
          'admin_classroom_thread_manage' => 
          array (
            'name' => 'admin.course.thread.classroom_thread_tab',
            'parent' => 'admin_course_thread',
            'router_name' => 'admin_classroom_thread',
            'disable' => true,
          ),
        ),
      ),
      'admin_course_question' => 
      array (
        'name' => 'admin.course.question_menu',
        'children' => 
        array (
          'admin_course_question_manage' => 
          array (
            'name' => 'admin.course.question.basic_tab',
            'router_name' => 'admin_question',
            'router_params' => 
            array (
              'postStatus' => 'unPosted',
            ),
            'disable' => true,
          ),
        ),
      ),
      'admin_course_note' => 
      array (
        'name' => 'admin.course.note_menu',
        'children' => 
        array (
          'admin_course_note_manage' => 
          array (
            'name' => 'admin.course.note.basic_tab',
            'router_name' => 'admin_course_note',
            'disable' => true,
          ),
        ),
      ),
      'admin_course_review' => 
      array (
        'name' => 'admin.course.review_menu',
        'children' => 
        array (
          'admin_course_review_tab' => 
          array (
            'name' => 'admin.course.review.course_review_tab',
            'router_name' => 'admin_review',
            'group' => 1,
            'disable' => true,
          ),
          'admin_classroom_review_tab' => 
          array (
            'name' => 'admin.course.review.classroom_review_tab',
            'router_name' => 'admin_classroom_review',
            'parent' => 'admin_course_review',
            'disable' => true,
          ),
        ),
      ),
      'admin_course_category' => 
      array (
        'name' => 'admin.course.category_menu',
        'children' => 
        array (
          'admin_course_category_manage' => 
          array (
            'name' => 'admin.course.category.course_category_tab',
            'router_name' => 'admin_course_category',
            'disable' => true,
            'children' => 
            array (
              'admin_category_create' => 
              array (
                'name' => 'admin.btn.create_category_btn',
                'router_params' => 
                array (
                  'groupId' => '(group.id)',
                ),
                'router_params_context' => 1,
                'group' => 'topBtn',
                'mode' => 'modal',
              ),
            ),
          ),
          'admin_classroom_category_manage' => 
          array (
            'name' => 'admin.course.category.classroom_category_tab',
            'parent' => 'admin_course_category',
            'router_name' => 'admin_classroom_category',
            'disable' => true,
            'children' => 
            array (
              'admin_classroom_category_create' => 
              array (
                'name' => 'admin.btn.create_category_btn',
                'parent' => 'admin_classroom_category_manage',
                'router_name' => 'admin_category_create',
                'router_params' => 
                array (
                  'groupId' => '(group.id)',
                ),
                'router_params_context' => 1,
                'group' => 'topBtn',
                'mode' => 'modal',
              ),
            ),
          ),
        ),
      ),
      'admin_course_tag' => 
      array (
        'name' => 'admin.course.tag_menu',
        'children' => 
        array (
          'admin_course_tag_manage' => 
          array (
            'name' => 'admin.course.tag.basic_tab',
            'router_name' => 'admin_tag',
            'disable' => true,
            'children' => 
            array (
              'admin_course_tag_add' => 
              array (
                'name' => 'admin.course.tag.basic_tab.create_btn',
                'router_name' => 'admin_tag_create',
                'mode' => 'modal',
                'group' => 'topBtn',
              ),
            ),
          ),
          'admin_course_tag_group_manage' => 
          array (
            'name' => 'admin.course.tag.tag_group_tab',
            'router_name' => 'admin_tag_group',
            'disable' => true,
            'children' => 
            array (
              'admin_course_tag_group_add' => 
              array (
                'name' => 'admin.course.tag.tag_group_tab.create_tag_group_btn',
                'router_name' => 'admin_tag_group_create',
                'mode' => 'modal',
                'group' => 'topBtn',
              ),
            ),
          ),
        ),
      ),
    ),
    'parent' => 'admin',
    'code' => 'admin_course',
  ),
  'admin_course_show' => 
  array (
    'name' => 'admin.course.basic_menu',
    'children' => 
    array (
      'admin_course_manage' => 
      array (
        'name' => 'admin.course.basic.basic_tab',
        'router_name' => 'admin_course_set',
        'children' => 
        array (
          'admin_course_content_manage' => 
          array (
            'name' => 'admin.course.basic.basic_tab.manage_btn',
          ),
          'admin_course_add' => 
          array (
            'name' => 'admin.course.basic.basic_tab.create_btn',
            'router_name' => 'course_set_manage_create',
            'group' => 'topBtn',
            'blank' => 1,
          ),
          'admin_course_set_recommend' => 
          array (
            'name' => 'admin.course.basic.basic_tab.recommend_btn',
            'router_params' => 
            array (
              'id' => '(courseSet.id)',
              'filter' => '(filter)',
              'ref' => 'courseList',
            ),
            'group' => 'groupButton',
            'visible' => '( filter == \'normal\' and not courseSet.recommended )',
            'icon' => 'glyphicon glyphicon-hand-up',
            'mode' => 'modal',
          ),
          'admin_course_set_cancel_recommend' => 
          array (
            'name' => 'admin.btn.recommend_cancel_btn',
            'router_params' => 
            array (
              'id' => '(courseSet.id)',
              'filter' => '(filter)',
              'target' => '(target)',
            ),
            'group' => 'groupButton',
            'class' => 'cancel-recommend-course',
            'visible' => '( filter == \'normal\' and courseSet.recommended )',
            'icon' => 'glyphicon glyphicon-hand-right',
            'mode' => 'none',
          ),
          'admin_course_guest_member_preview' => 
          array (
            'name' => 'admin.course.basic.basic_tab.preview_btn',
            'router_name' => 'course_set_show',
            'router_params' => 
            array (
              'id' => '(courseSet.id)',
              'previewAs' => 'guest',
            ),
            'group' => 'groupButton',
            'icon' => 'glyphicon glyphicon-eye-open',
            'blank' => 1,
          ),
          'admin_course_set_close' => 
          array (
            'name' => 'admin.course.basic.basic_tab.close_btn',
            'router_params' => 
            array (
              'id' => '(courseSet.id)',
              'filter' => '(filter)',
            ),
            'group' => 'groupButton',
            'icon' => 'glyphicon glyphicon-ban-circle',
            'mode' => 'none',
            'class' => 'close-course',
            'visible' => '(courseSet.status == \'published\')',
          ),
          'admin_course_sms_prepare' => 
          array (
            'name' => 'admin.btn.sms_send_btn',
            'router_name' => 'sms_prepare',
            'router_params' => 
            array (
              'id' => '(courseSet.id)',
              'targetType' => 'course',
            ),
            'group' => 'groupButton',
            'icon' => 'glyphicon glyphicon-envelope',
            'mode' => 'modal',
            'visible' => '(courseSet.status == \'published\')',
          ),
          'admin_course_set_clone' => 
          array (
            'name' => 'admin.course.basic.basic_tab.clone_btn',
            'router_params' => 
            array (
              'courseSetId' => '(courseSet.id)',
            ),
            'group' => 'groupButton',
            'class' => 'js-course-set-clone',
            'icon' => 'glyphicon glyphicon-repeat',
            'mode' => 'none',
            'visible' => '(courseSet.parentId == 0 and courseSet.type != \'live\')',
          ),
          'admin_course_set_publish' => 
          array (
            'name' => 'admin.course.basic.basic_tab.publish_submit_btn',
            'router_params' => 
            array (
              'id' => '(courseSet.id)',
              'filter' => '(filter)',
            ),
            'group' => 'groupButton',
            'class' => 'publish-course',
            'icon' => 'glyphicon glyphicon-ok-circle',
            'mode' => 'none',
            'visible' => '(courseSet.status != \'published\')',
          ),
          'admin_course_set_delete' => 
          array (
            'name' => 'admin.course.basic.basic_tab.delete_submit_btn',
            'class' => 'delete-course',
            'router_params' => 
            array (
              'id' => '(courseSet.id)',
              'filter' => '(filter)',
              'type' => '',
            ),
            'group' => 'groupButton',
            'icon' => 'glyphicon glyphicon-trash',
            'mode' => 'none',
            'visible' => '( courseSet.status in [\'closed\', \'draft\', \'published\'])',
          ),
        ),
      ),
      'admin_course_set_recommend_list' => 
      array (
        'name' => 'admin.course.basic.recommend_list_tab',
      ),
      'admin_course_set_data' => 
      array (
        'name' => 'admin.course.basic.analysis_tab',
      ),
    ),
    'parent' => 'admin_course',
    'code' => 'admin_course_show',
  ),
  'admin_course_manage' => 
  array (
    'name' => 'admin.course.basic.basic_tab',
    'router_name' => 'admin_course_set',
    'children' => 
    array (
      'admin_course_content_manage' => 
      array (
        'name' => 'admin.course.basic.basic_tab.manage_btn',
      ),
      'admin_course_add' => 
      array (
        'name' => 'admin.course.basic.basic_tab.create_btn',
        'router_name' => 'course_set_manage_create',
        'group' => 'topBtn',
        'blank' => 1,
      ),
      'admin_course_set_recommend' => 
      array (
        'name' => 'admin.course.basic.basic_tab.recommend_btn',
        'router_params' => 
        array (
          'id' => '(courseSet.id)',
          'filter' => '(filter)',
          'ref' => 'courseList',
        ),
        'group' => 'groupButton',
        'visible' => '( filter == \'normal\' and not courseSet.recommended )',
        'icon' => 'glyphicon glyphicon-hand-up',
        'mode' => 'modal',
      ),
      'admin_course_set_cancel_recommend' => 
      array (
        'name' => 'admin.btn.recommend_cancel_btn',
        'router_params' => 
        array (
          'id' => '(courseSet.id)',
          'filter' => '(filter)',
          'target' => '(target)',
        ),
        'group' => 'groupButton',
        'class' => 'cancel-recommend-course',
        'visible' => '( filter == \'normal\' and courseSet.recommended )',
        'icon' => 'glyphicon glyphicon-hand-right',
        'mode' => 'none',
      ),
      'admin_course_guest_member_preview' => 
      array (
        'name' => 'admin.course.basic.basic_tab.preview_btn',
        'router_name' => 'course_set_show',
        'router_params' => 
        array (
          'id' => '(courseSet.id)',
          'previewAs' => 'guest',
        ),
        'group' => 'groupButton',
        'icon' => 'glyphicon glyphicon-eye-open',
        'blank' => 1,
      ),
      'admin_course_set_close' => 
      array (
        'name' => 'admin.course.basic.basic_tab.close_btn',
        'router_params' => 
        array (
          'id' => '(courseSet.id)',
          'filter' => '(filter)',
        ),
        'group' => 'groupButton',
        'icon' => 'glyphicon glyphicon-ban-circle',
        'mode' => 'none',
        'class' => 'close-course',
        'visible' => '(courseSet.status == \'published\')',
      ),
      'admin_course_sms_prepare' => 
      array (
        'name' => 'admin.btn.sms_send_btn',
        'router_name' => 'sms_prepare',
        'router_params' => 
        array (
          'id' => '(courseSet.id)',
          'targetType' => 'course',
        ),
        'group' => 'groupButton',
        'icon' => 'glyphicon glyphicon-envelope',
        'mode' => 'modal',
        'visible' => '(courseSet.status == \'published\')',
      ),
      'admin_course_set_clone' => 
      array (
        'name' => 'admin.course.basic.basic_tab.clone_btn',
        'router_params' => 
        array (
          'courseSetId' => '(courseSet.id)',
        ),
        'group' => 'groupButton',
        'class' => 'js-course-set-clone',
        'icon' => 'glyphicon glyphicon-repeat',
        'mode' => 'none',
        'visible' => '(courseSet.parentId == 0 and courseSet.type != \'live\')',
      ),
      'admin_course_set_publish' => 
      array (
        'name' => 'admin.course.basic.basic_tab.publish_submit_btn',
        'router_params' => 
        array (
          'id' => '(courseSet.id)',
          'filter' => '(filter)',
        ),
        'group' => 'groupButton',
        'class' => 'publish-course',
        'icon' => 'glyphicon glyphicon-ok-circle',
        'mode' => 'none',
        'visible' => '(courseSet.status != \'published\')',
      ),
      'admin_course_set_delete' => 
      array (
        'name' => 'admin.course.basic.basic_tab.delete_submit_btn',
        'class' => 'delete-course',
        'router_params' => 
        array (
          'id' => '(courseSet.id)',
          'filter' => '(filter)',
          'type' => '',
        ),
        'group' => 'groupButton',
        'icon' => 'glyphicon glyphicon-trash',
        'mode' => 'none',
        'visible' => '( courseSet.status in [\'closed\', \'draft\', \'published\'])',
      ),
    ),
    'parent' => 'admin_course_show',
    'code' => 'admin_course_manage',
  ),
  'admin_course_content_manage' => 
  array (
    'name' => 'admin.course.basic.basic_tab.manage_btn',
    'parent' => 'admin_course_manage',
    'code' => 'admin_course_content_manage',
  ),
  'admin_course_add' => 
  array (
    'name' => 'admin.course.basic.basic_tab.create_btn',
    'router_name' => 'course_set_manage_create',
    'group' => 'topBtn',
    'blank' => 1,
    'parent' => 'admin_course_manage',
    'code' => 'admin_course_add',
  ),
  'admin_course_set_recommend' => 
  array (
    'name' => 'admin.course.basic.basic_tab.recommend_btn',
    'router_params' => 
    array (
      'id' => '(courseSet.id)',
      'filter' => '(filter)',
      'ref' => 'courseList',
    ),
    'group' => 'groupButton',
    'visible' => '( filter == \'normal\' and not courseSet.recommended )',
    'icon' => 'glyphicon glyphicon-hand-up',
    'mode' => 'modal',
    'parent' => 'admin_course_manage',
    'code' => 'admin_course_set_recommend',
  ),
  'admin_course_set_cancel_recommend' => 
  array (
    'name' => 'admin.btn.recommend_cancel_btn',
    'router_params' => 
    array (
      'id' => '(courseSet.id)',
      'filter' => '(filter)',
      'target' => '(target)',
    ),
    'group' => 'groupButton',
    'class' => 'cancel-recommend-course',
    'visible' => '( filter == \'normal\' and courseSet.recommended )',
    'icon' => 'glyphicon glyphicon-hand-right',
    'mode' => 'none',
    'parent' => 'admin_course_manage',
    'code' => 'admin_course_set_cancel_recommend',
  ),
  'admin_course_guest_member_preview' => 
  array (
    'name' => 'admin.course.basic.basic_tab.preview_btn',
    'router_name' => 'course_set_show',
    'router_params' => 
    array (
      'id' => '(courseSet.id)',
      'previewAs' => 'guest',
    ),
    'group' => 'groupButton',
    'icon' => 'glyphicon glyphicon-eye-open',
    'blank' => 1,
    'parent' => 'admin_course_manage',
    'code' => 'admin_course_guest_member_preview',
  ),
  'admin_course_set_close' => 
  array (
    'name' => 'admin.course.basic.basic_tab.close_btn',
    'router_params' => 
    array (
      'id' => '(courseSet.id)',
      'filter' => '(filter)',
    ),
    'group' => 'groupButton',
    'icon' => 'glyphicon glyphicon-ban-circle',
    'mode' => 'none',
    'class' => 'close-course',
    'visible' => '(courseSet.status == \'published\')',
    'parent' => 'admin_course_manage',
    'code' => 'admin_course_set_close',
  ),
  'admin_course_sms_prepare' => 
  array (
    'name' => 'admin.btn.sms_send_btn',
    'router_name' => 'sms_prepare',
    'router_params' => 
    array (
      'id' => '(courseSet.id)',
      'targetType' => 'course',
    ),
    'group' => 'groupButton',
    'icon' => 'glyphicon glyphicon-envelope',
    'mode' => 'modal',
    'visible' => '(courseSet.status == \'published\')',
    'parent' => 'admin_course_manage',
    'code' => 'admin_course_sms_prepare',
  ),
  'admin_course_set_clone' => 
  array (
    'name' => 'admin.course.basic.basic_tab.clone_btn',
    'router_params' => 
    array (
      'courseSetId' => '(courseSet.id)',
    ),
    'group' => 'groupButton',
    'class' => 'js-course-set-clone',
    'icon' => 'glyphicon glyphicon-repeat',
    'mode' => 'none',
    'visible' => '(courseSet.parentId == 0 and courseSet.type != \'live\')',
    'parent' => 'admin_course_manage',
    'code' => 'admin_course_set_clone',
  ),
  'admin_course_set_publish' => 
  array (
    'name' => 'admin.course.basic.basic_tab.publish_submit_btn',
    'router_params' => 
    array (
      'id' => '(courseSet.id)',
      'filter' => '(filter)',
    ),
    'group' => 'groupButton',
    'class' => 'publish-course',
    'icon' => 'glyphicon glyphicon-ok-circle',
    'mode' => 'none',
    'visible' => '(courseSet.status != \'published\')',
    'parent' => 'admin_course_manage',
    'code' => 'admin_course_set_publish',
  ),
  'admin_course_set_delete' => 
  array (
    'name' => 'admin.course.basic.basic_tab.delete_submit_btn',
    'class' => 'delete-course',
    'router_params' => 
    array (
      'id' => '(courseSet.id)',
      'filter' => '(filter)',
      'type' => '',
    ),
    'group' => 'groupButton',
    'icon' => 'glyphicon glyphicon-trash',
    'mode' => 'none',
    'visible' => '( courseSet.status in [\'closed\', \'draft\', \'published\'])',
    'parent' => 'admin_course_manage',
    'code' => 'admin_course_set_delete',
  ),
  'admin_course_set_recommend_list' => 
  array (
    'name' => 'admin.course.basic.recommend_list_tab',
    'parent' => 'admin_course_show',
    'code' => 'admin_course_set_recommend_list',
  ),
  'admin_course_set_data' => 
  array (
    'name' => 'admin.course.basic.analysis_tab',
    'parent' => 'admin_course_show',
    'code' => 'admin_course_set_data',
  ),
  'admin_classroom' => 
  array (
    'name' => 'admin.course.classroom_menu',
    'parent' => 'admin_course',
    'before' => 'admin_course_thread',
    'children' => 
    array (
      'admin_classroom_manage' => 
      array (
        'name' => 'admin.course.classroom.basic_tab',
        'router_name' => 'admin_classroom',
        'children' => 
        array (
          'admin_classroom_content_manage' => 
          array (
            'name' => 'admin.course.classroom.basic_tab.manage_btn',
            'router_name' => 'classroom_manage',
            'group' => 'btn',
            'router_params' => 
            array (
              'id' => '(classroom.id)',
            ),
            'blank' => true,
          ),
          'admin_classroom_create' => 
          array (
            'name' => 'admin.course.classroom.basic_tab.create_btn',
            'group' => 'topBtn',
            'blank' => true,
          ),
          'admin_classroom_cancel_recommend' => 
          array (
            'name' => 'admin.btn.recommend_cancel_btn',
            'mode' => 'none',
            'class' => 'cancel-recommend-classroom',
            'icon' => 'glyphicon glyphicon-hand-right',
            'group' => 'groupButton',
            'router_params' => 
            array (
              'id' => '(classroom.id)',
              'ref' => 'classroomList',
            ),
            'visible' => '( classroom.recommended )',
          ),
          'admin_classroom_set_recommend' => 
          array (
            'name' => 'admin.course.classroom.basic_tab.recommend_btn',
            'mode' => 'modal',
            'icon' => 'glyphicon glyphicon-hand-up',
            'group' => 'groupButton',
            'router_params' => 
            array (
              'id' => '(classroom.id)',
              'ref' => 'classroomList',
            ),
            'visible' => '( not classroom.recommended )',
          ),
          'admin_classroom_close' => 
          array (
            'name' => 'admin.course.classroom.basic_tab.close_btn',
            'mode' => 'none',
            'class' => 'close-classroom',
            'icon' => 'glyphicon glyphicon-off',
            'group' => 'groupButton',
            'router_params' => 
            array (
              'id' => '(classroom.id)',
            ),
            'visible' => '( classroom.status == \'published\' )',
          ),
          'admin_sms_prepare' => 
          array (
            'name' => 'admin.btn.sms_send_btn',
            'router_name' => 'sms_prepare',
            'mode' => 'modal',
            'icon' => 'glyphicon glyphicon-envelope',
            'group' => 'groupButton',
            'router_params' => 
            array (
              'id' => '(classroom.id)',
              'targetType' => 'classroom',
            ),
            'visible' => '( classroom.status == \'published\' )',
          ),
          'admin_classroom_open' => 
          array (
            'name' => 'admin.course.classroom.basic_tab.publish_submit_btn',
            'mode' => 'none',
            'icon' => 'glyphicon glyphicon-ok',
            'group' => 'groupButton',
            'class' => 'open-classroom',
            'router_params' => 
            array (
              'id' => '(classroom.id)',
            ),
            'visible' => '( classroom.status != \'published\' )',
          ),
          'admin_classroom_delete' => 
          array (
            'name' => 'admin.course.classroom.basic_tab.delete_submit_btn',
            'mode' => 'none',
            'icon' => 'glyphicon glyphicon-remove',
            'class' => 'delete-classroom',
            'group' => 'groupButton',
            'router_params' => 
            array (
              'id' => '(classroom.id)',
            ),
            'visible' => '( classroom.status==\'draft\' )',
          ),
        ),
      ),
      'admin_classroom_recommend' => 
      array (
        'name' => 'admin.course.classroom.recommend_tab',
        'router_name' => 'admin_classroom_recommend_list',
      ),
    ),
    'code' => 'admin_classroom',
  ),
  'admin_classroom_manage' => 
  array (
    'name' => 'admin.course.classroom.basic_tab',
    'router_name' => 'admin_classroom',
    'children' => 
    array (
      'admin_classroom_content_manage' => 
      array (
        'name' => 'admin.course.classroom.basic_tab.manage_btn',
        'router_name' => 'classroom_manage',
        'group' => 'btn',
        'router_params' => 
        array (
          'id' => '(classroom.id)',
        ),
        'blank' => true,
      ),
      'admin_classroom_create' => 
      array (
        'name' => 'admin.course.classroom.basic_tab.create_btn',
        'group' => 'topBtn',
        'blank' => true,
      ),
      'admin_classroom_cancel_recommend' => 
      array (
        'name' => 'admin.btn.recommend_cancel_btn',
        'mode' => 'none',
        'class' => 'cancel-recommend-classroom',
        'icon' => 'glyphicon glyphicon-hand-right',
        'group' => 'groupButton',
        'router_params' => 
        array (
          'id' => '(classroom.id)',
          'ref' => 'classroomList',
        ),
        'visible' => '( classroom.recommended )',
      ),
      'admin_classroom_set_recommend' => 
      array (
        'name' => 'admin.course.classroom.basic_tab.recommend_btn',
        'mode' => 'modal',
        'icon' => 'glyphicon glyphicon-hand-up',
        'group' => 'groupButton',
        'router_params' => 
        array (
          'id' => '(classroom.id)',
          'ref' => 'classroomList',
        ),
        'visible' => '( not classroom.recommended )',
      ),
      'admin_classroom_close' => 
      array (
        'name' => 'admin.course.classroom.basic_tab.close_btn',
        'mode' => 'none',
        'class' => 'close-classroom',
        'icon' => 'glyphicon glyphicon-off',
        'group' => 'groupButton',
        'router_params' => 
        array (
          'id' => '(classroom.id)',
        ),
        'visible' => '( classroom.status == \'published\' )',
      ),
      'admin_sms_prepare' => 
      array (
        'name' => 'admin.btn.sms_send_btn',
        'router_name' => 'sms_prepare',
        'mode' => 'modal',
        'icon' => 'glyphicon glyphicon-envelope',
        'group' => 'groupButton',
        'router_params' => 
        array (
          'id' => '(classroom.id)',
          'targetType' => 'classroom',
        ),
        'visible' => '( classroom.status == \'published\' )',
      ),
      'admin_classroom_open' => 
      array (
        'name' => 'admin.course.classroom.basic_tab.publish_submit_btn',
        'mode' => 'none',
        'icon' => 'glyphicon glyphicon-ok',
        'group' => 'groupButton',
        'class' => 'open-classroom',
        'router_params' => 
        array (
          'id' => '(classroom.id)',
        ),
        'visible' => '( classroom.status != \'published\' )',
      ),
      'admin_classroom_delete' => 
      array (
        'name' => 'admin.course.classroom.basic_tab.delete_submit_btn',
        'mode' => 'none',
        'icon' => 'glyphicon glyphicon-remove',
        'class' => 'delete-classroom',
        'group' => 'groupButton',
        'router_params' => 
        array (
          'id' => '(classroom.id)',
        ),
        'visible' => '( classroom.status==\'draft\' )',
      ),
    ),
    'parent' => 'admin_classroom',
    'code' => 'admin_classroom_manage',
  ),
  'admin_classroom_content_manage' => 
  array (
    'name' => 'admin.course.classroom.basic_tab.manage_btn',
    'router_name' => 'classroom_manage',
    'group' => 'btn',
    'router_params' => 
    array (
      'id' => '(classroom.id)',
    ),
    'blank' => true,
    'parent' => 'admin_classroom_manage',
    'code' => 'admin_classroom_content_manage',
  ),
  'admin_classroom_create' => 
  array (
    'name' => 'admin.course.classroom.basic_tab.create_btn',
    'group' => 'topBtn',
    'blank' => true,
    'parent' => 'admin_classroom_manage',
    'code' => 'admin_classroom_create',
  ),
  'admin_classroom_cancel_recommend' => 
  array (
    'name' => 'admin.btn.recommend_cancel_btn',
    'mode' => 'none',
    'class' => 'cancel-recommend-classroom',
    'icon' => 'glyphicon glyphicon-hand-right',
    'group' => 'groupButton',
    'router_params' => 
    array (
      'id' => '(classroom.id)',
      'ref' => 'classroomList',
    ),
    'visible' => '( classroom.recommended )',
    'parent' => 'admin_classroom_manage',
    'code' => 'admin_classroom_cancel_recommend',
  ),
  'admin_classroom_set_recommend' => 
  array (
    'name' => 'admin.course.classroom.basic_tab.recommend_btn',
    'mode' => 'modal',
    'icon' => 'glyphicon glyphicon-hand-up',
    'group' => 'groupButton',
    'router_params' => 
    array (
      'id' => '(classroom.id)',
      'ref' => 'classroomList',
    ),
    'visible' => '( not classroom.recommended )',
    'parent' => 'admin_classroom_manage',
    'code' => 'admin_classroom_set_recommend',
  ),
  'admin_classroom_close' => 
  array (
    'name' => 'admin.course.classroom.basic_tab.close_btn',
    'mode' => 'none',
    'class' => 'close-classroom',
    'icon' => 'glyphicon glyphicon-off',
    'group' => 'groupButton',
    'router_params' => 
    array (
      'id' => '(classroom.id)',
    ),
    'visible' => '( classroom.status == \'published\' )',
    'parent' => 'admin_classroom_manage',
    'code' => 'admin_classroom_close',
  ),
  'admin_sms_prepare' => 
  array (
    'name' => 'admin.btn.sms_send_btn',
    'router_name' => 'sms_prepare',
    'mode' => 'modal',
    'icon' => 'glyphicon glyphicon-envelope',
    'group' => 'groupButton',
    'router_params' => 
    array (
      'id' => '(classroom.id)',
      'targetType' => 'classroom',
    ),
    'visible' => '( classroom.status == \'published\' )',
    'parent' => 'admin_classroom_manage',
    'code' => 'admin_sms_prepare',
  ),
  'admin_classroom_open' => 
  array (
    'name' => 'admin.course.classroom.basic_tab.publish_submit_btn',
    'mode' => 'none',
    'icon' => 'glyphicon glyphicon-ok',
    'group' => 'groupButton',
    'class' => 'open-classroom',
    'router_params' => 
    array (
      'id' => '(classroom.id)',
    ),
    'visible' => '( classroom.status != \'published\' )',
    'parent' => 'admin_classroom_manage',
    'code' => 'admin_classroom_open',
  ),
  'admin_classroom_delete' => 
  array (
    'name' => 'admin.course.classroom.basic_tab.delete_submit_btn',
    'mode' => 'none',
    'icon' => 'glyphicon glyphicon-remove',
    'class' => 'delete-classroom',
    'group' => 'groupButton',
    'router_params' => 
    array (
      'id' => '(classroom.id)',
    ),
    'visible' => '( classroom.status==\'draft\' )',
    'parent' => 'admin_classroom_manage',
    'code' => 'admin_classroom_delete',
  ),
  'admin_classroom_recommend' => 
  array (
    'name' => 'admin.course.classroom.recommend_tab',
    'router_name' => 'admin_classroom_recommend_list',
    'parent' => 'admin_classroom',
    'code' => 'admin_classroom_recommend',
  ),
  'admin_open_course_manage' => 
  array (
    'name' => 'admin.course.open_course_menu',
    'router_name' => 'admin_open_course',
    'children' => 
    array (
      'admin_open_course' => 
      array (
        'name' => 'admin.course.open_course.basic_tab',
        'disable' => true,
        'router_name' => 'admin_open_course',
      ),
      'admin_open_course_recommend_list' => 
      array (
        'name' => 'admin.course.open_course.recommend_list_tab',
        'disable' => true,
      ),
      'admin_opencourse_analysis' => 
      array (
        'name' => 'admin.course.open_course.analysis_tab',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_course',
    'code' => 'admin_open_course_manage',
  ),
  'admin_open_course' => 
  array (
    'name' => 'admin.course.open_course.basic_tab',
    'disable' => true,
    'router_name' => 'admin_open_course',
    'parent' => 'admin_open_course_manage',
    'code' => 'admin_open_course',
  ),
  'admin_open_course_recommend_list' => 
  array (
    'name' => 'admin.course.open_course.recommend_list_tab',
    'disable' => true,
    'parent' => 'admin_open_course_manage',
    'code' => 'admin_open_course_recommend_list',
  ),
  'admin_opencourse_analysis' => 
  array (
    'name' => 'admin.course.open_course.analysis_tab',
    'disable' => true,
    'parent' => 'admin_open_course_manage',
    'code' => 'admin_opencourse_analysis',
  ),
  'admin_live_course' => 
  array (
    'name' => 'admin.course.live_menu',
    'children' => 
    array (
      'admin_live_course_manage' => 
      array (
        'name' => 'admin.course.live.basic_tab',
        'router_params' => 
        array (
          'status' => 'coming',
        ),
        'router_name' => 'admin_live_course',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_course',
    'code' => 'admin_live_course',
  ),
  'admin_live_course_manage' => 
  array (
    'name' => 'admin.course.live.basic_tab',
    'router_params' => 
    array (
      'status' => 'coming',
    ),
    'router_name' => 'admin_live_course',
    'disable' => true,
    'parent' => 'admin_live_course',
    'code' => 'admin_live_course_manage',
  ),
  'admin_course_thread' => 
  array (
    'name' => 'admin.course.thread_menu',
    'children' => 
    array (
      'admin_course_thread_manage' => 
      array (
        'name' => 'admin.course.thread.course_thread_tab',
        'router_name' => 'admin_thread',
        'disable' => true,
      ),
      'admin_classroom_thread_manage' => 
      array (
        'name' => 'admin.course.thread.classroom_thread_tab',
        'parent' => 'admin_course_thread',
        'router_name' => 'admin_classroom_thread',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_course',
    'code' => 'admin_course_thread',
  ),
  'admin_course_thread_manage' => 
  array (
    'name' => 'admin.course.thread.course_thread_tab',
    'router_name' => 'admin_thread',
    'disable' => true,
    'parent' => 'admin_course_thread',
    'code' => 'admin_course_thread_manage',
  ),
  'admin_classroom_thread_manage' => 
  array (
    'name' => 'admin.course.thread.classroom_thread_tab',
    'parent' => 'admin_course_thread',
    'router_name' => 'admin_classroom_thread',
    'disable' => true,
    'code' => 'admin_classroom_thread_manage',
  ),
  'admin_course_question' => 
  array (
    'name' => 'admin.course.question_menu',
    'children' => 
    array (
      'admin_course_question_manage' => 
      array (
        'name' => 'admin.course.question.basic_tab',
        'router_name' => 'admin_question',
        'router_params' => 
        array (
          'postStatus' => 'unPosted',
        ),
        'disable' => true,
      ),
    ),
    'parent' => 'admin_course',
    'code' => 'admin_course_question',
  ),
  'admin_course_question_manage' => 
  array (
    'name' => 'admin.course.question.basic_tab',
    'router_name' => 'admin_question',
    'router_params' => 
    array (
      'postStatus' => 'unPosted',
    ),
    'disable' => true,
    'parent' => 'admin_course_question',
    'code' => 'admin_course_question_manage',
  ),
  'admin_course_note' => 
  array (
    'name' => 'admin.course.note_menu',
    'children' => 
    array (
      'admin_course_note_manage' => 
      array (
        'name' => 'admin.course.note.basic_tab',
        'router_name' => 'admin_course_note',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_course',
    'code' => 'admin_course_note',
  ),
  'admin_course_note_manage' => 
  array (
    'name' => 'admin.course.note.basic_tab',
    'router_name' => 'admin_course_note',
    'disable' => true,
    'parent' => 'admin_course_note',
    'code' => 'admin_course_note_manage',
  ),
  'admin_course_review' => 
  array (
    'name' => 'admin.course.review_menu',
    'children' => 
    array (
      'admin_course_review_tab' => 
      array (
        'name' => 'admin.course.review.course_review_tab',
        'router_name' => 'admin_review',
        'group' => 1,
        'disable' => true,
      ),
      'admin_classroom_review_tab' => 
      array (
        'name' => 'admin.course.review.classroom_review_tab',
        'router_name' => 'admin_classroom_review',
        'parent' => 'admin_course_review',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_course',
    'code' => 'admin_course_review',
  ),
  'admin_course_review_tab' => 
  array (
    'name' => 'admin.course.review.course_review_tab',
    'router_name' => 'admin_review',
    'group' => 1,
    'disable' => true,
    'parent' => 'admin_course_review',
    'code' => 'admin_course_review_tab',
  ),
  'admin_classroom_review_tab' => 
  array (
    'name' => 'admin.course.review.classroom_review_tab',
    'router_name' => 'admin_classroom_review',
    'parent' => 'admin_course_review',
    'disable' => true,
    'code' => 'admin_classroom_review_tab',
  ),
  'admin_course_category' => 
  array (
    'name' => 'admin.course.category_menu',
    'children' => 
    array (
      'admin_course_category_manage' => 
      array (
        'name' => 'admin.course.category.course_category_tab',
        'router_name' => 'admin_course_category',
        'disable' => true,
        'children' => 
        array (
          'admin_category_create' => 
          array (
            'name' => 'admin.btn.create_category_btn',
            'router_params' => 
            array (
              'groupId' => '(group.id)',
            ),
            'router_params_context' => 1,
            'group' => 'topBtn',
            'mode' => 'modal',
          ),
        ),
      ),
      'admin_classroom_category_manage' => 
      array (
        'name' => 'admin.course.category.classroom_category_tab',
        'parent' => 'admin_course_category',
        'router_name' => 'admin_classroom_category',
        'disable' => true,
        'children' => 
        array (
          'admin_classroom_category_create' => 
          array (
            'name' => 'admin.btn.create_category_btn',
            'parent' => 'admin_classroom_category_manage',
            'router_name' => 'admin_category_create',
            'router_params' => 
            array (
              'groupId' => '(group.id)',
            ),
            'router_params_context' => 1,
            'group' => 'topBtn',
            'mode' => 'modal',
          ),
        ),
      ),
    ),
    'parent' => 'admin_course',
    'code' => 'admin_course_category',
  ),
  'admin_course_category_manage' => 
  array (
    'name' => 'admin.course.category.course_category_tab',
    'router_name' => 'admin_course_category',
    'disable' => true,
    'children' => 
    array (
      'admin_category_create' => 
      array (
        'name' => 'admin.btn.create_category_btn',
        'router_params' => 
        array (
          'groupId' => '(group.id)',
        ),
        'router_params_context' => 1,
        'group' => 'topBtn',
        'mode' => 'modal',
      ),
    ),
    'parent' => 'admin_course_category',
    'code' => 'admin_course_category_manage',
  ),
  'admin_category_create' => 
  array (
    'name' => 'admin.btn.create_category_btn',
    'router_params' => 
    array (
      'groupId' => '(group.id)',
    ),
    'router_params_context' => 1,
    'group' => 'topBtn',
    'mode' => 'modal',
    'parent' => 'admin_course_category_manage',
    'code' => 'admin_category_create',
  ),
  'admin_classroom_category_manage' => 
  array (
    'name' => 'admin.course.category.classroom_category_tab',
    'parent' => 'admin_course_category',
    'router_name' => 'admin_classroom_category',
    'disable' => true,
    'children' => 
    array (
      'admin_classroom_category_create' => 
      array (
        'name' => 'admin.btn.create_category_btn',
        'parent' => 'admin_classroom_category_manage',
        'router_name' => 'admin_category_create',
        'router_params' => 
        array (
          'groupId' => '(group.id)',
        ),
        'router_params_context' => 1,
        'group' => 'topBtn',
        'mode' => 'modal',
      ),
    ),
    'code' => 'admin_classroom_category_manage',
  ),
  'admin_classroom_category_create' => 
  array (
    'name' => 'admin.btn.create_category_btn',
    'parent' => 'admin_classroom_category_manage',
    'router_name' => 'admin_category_create',
    'router_params' => 
    array (
      'groupId' => '(group.id)',
    ),
    'router_params_context' => 1,
    'group' => 'topBtn',
    'mode' => 'modal',
    'code' => 'admin_classroom_category_create',
  ),
  'admin_course_tag' => 
  array (
    'name' => 'admin.course.tag_menu',
    'children' => 
    array (
      'admin_course_tag_manage' => 
      array (
        'name' => 'admin.course.tag.basic_tab',
        'router_name' => 'admin_tag',
        'disable' => true,
        'children' => 
        array (
          'admin_course_tag_add' => 
          array (
            'name' => 'admin.course.tag.basic_tab.create_btn',
            'router_name' => 'admin_tag_create',
            'mode' => 'modal',
            'group' => 'topBtn',
          ),
        ),
      ),
      'admin_course_tag_group_manage' => 
      array (
        'name' => 'admin.course.tag.tag_group_tab',
        'router_name' => 'admin_tag_group',
        'disable' => true,
        'children' => 
        array (
          'admin_course_tag_group_add' => 
          array (
            'name' => 'admin.course.tag.tag_group_tab.create_tag_group_btn',
            'router_name' => 'admin_tag_group_create',
            'mode' => 'modal',
            'group' => 'topBtn',
          ),
        ),
      ),
    ),
    'parent' => 'admin_course',
    'code' => 'admin_course_tag',
  ),
  'admin_course_tag_manage' => 
  array (
    'name' => 'admin.course.tag.basic_tab',
    'router_name' => 'admin_tag',
    'disable' => true,
    'children' => 
    array (
      'admin_course_tag_add' => 
      array (
        'name' => 'admin.course.tag.basic_tab.create_btn',
        'router_name' => 'admin_tag_create',
        'mode' => 'modal',
        'group' => 'topBtn',
      ),
    ),
    'parent' => 'admin_course_tag',
    'code' => 'admin_course_tag_manage',
  ),
  'admin_course_tag_add' => 
  array (
    'name' => 'admin.course.tag.basic_tab.create_btn',
    'router_name' => 'admin_tag_create',
    'mode' => 'modal',
    'group' => 'topBtn',
    'parent' => 'admin_course_tag_manage',
    'code' => 'admin_course_tag_add',
  ),
  'admin_course_tag_group_manage' => 
  array (
    'name' => 'admin.course.tag.tag_group_tab',
    'router_name' => 'admin_tag_group',
    'disable' => true,
    'children' => 
    array (
      'admin_course_tag_group_add' => 
      array (
        'name' => 'admin.course.tag.tag_group_tab.create_tag_group_btn',
        'router_name' => 'admin_tag_group_create',
        'mode' => 'modal',
        'group' => 'topBtn',
      ),
    ),
    'parent' => 'admin_course_tag',
    'code' => 'admin_course_tag_group_manage',
  ),
  'admin_course_tag_group_add' => 
  array (
    'name' => 'admin.course.tag.tag_group_tab.create_tag_group_btn',
    'router_name' => 'admin_tag_group_create',
    'mode' => 'modal',
    'group' => 'topBtn',
    'parent' => 'admin_course_tag_group_manage',
    'code' => 'admin_course_tag_group_add',
  ),
  'admin_operation' => 
  array (
    'name' => 'admin.nav.operation',
    'children' => 
    array (
      'admin_operation_article' => 
      array (
        'name' => 'admin.operation.article_menu',
        'children' => 
        array (
          'admin_operation_article_manage' => 
          array (
            'name' => 'admin.operation.article.basic_tab',
            'disable' => true,
            'router_name' => 'admin_article',
            'children' => 
            array (
              'admin_operation_article_create' => 
              array (
                'name' => 'admin.operation.article.basic_tab.create_btn',
                'router_name' => 'admin_article_create',
                'group' => 'topBtn',
              ),
            ),
          ),
          'admin_operation_article_category' => 
          array (
            'name' => 'admin.operation.article.category_tab',
            'disable' => true,
            'router_name' => 'admin_article_category',
            'children' => 
            array (
              'admin_operation_category_create' => 
              array (
                'name' => 'admin.operation.article.category_tab.category_create_btn',
                'router_name' => 'admin_article_category_create',
                'mode' => 'modal',
                'group' => 'topBtn',
              ),
            ),
          ),
        ),
      ),
      'admin_operation_group' => 
      array (
        'name' => 'admin.operation.group_menu',
        'children' => 
        array (
          'admin_operation_group_manage' => 
          array (
            'name' => 'admin.operation.group.group_tab',
            'disable' => true,
            'router_name' => 'admin_group',
            'children' => 
            array (
              'admin_operation_group_create' => 
              array (
                'name' => 'admin.operation.group.group_tab.create_group_btn',
                'router_name' => 'group_add',
                'group' => 'topBtn',
                'blank' => 1,
              ),
            ),
          ),
          'admin_operation_group_thread' => 
          array (
            'name' => 'admin.operation.group.group_thread_tab',
            'disable' => true,
            'router_name' => 'admin_groupThread',
          ),
        ),
      ),
      'admin_operation_invite' => 
      array (
        'name' => 'admin.operation.invite_menu',
        'children' => 
        array (
          'admin_operation_invite_record' => 
          array (
            'name' => 'admin.operation.invite.record_tab',
            'disable' => true,
            'router_name' => 'admin_invite_record',
          ),
          'admin_operation_invite_user' => 
          array (
            'name' => 'admin.operation.invite.user_tab',
            'disable' => true,
            'router_name' => 'admin_invite',
          ),
          'admin_operation_invite_coupon' => 
          array (
            'name' => 'admin.operation.invite.coupon_tab',
            'disable' => true,
            'router_name' => 'admin_invite_coupon',
          ),
        ),
      ),
      'admin_announcement' => 
      array (
        'name' => 'admin.operation.announcement_menu',
        'group' => 2,
        'children' => 
        array (
          'admin_announcement_manage' => 
          array (
            'name' => 'admin.operation.announcement.basic_tab',
            'disable' => true,
            'router_name' => 'admin_announcement',
            'children' => 
            array (
              'admin_announcement_create' => 
              array (
                'name' => 'admin.operation.announcement.basic_tab.create_btn',
                'mode' => 'modal',
                'group' => 'topBtn',
              ),
            ),
          ),
        ),
      ),
      'admin_operation_notification' => 
      array (
        'name' => 'admin.operation.notification_menu',
        'group' => 2,
        'children' => 
        array (
          'admin_batch_notification' => 
          array (
            'name' => 'admin.operation.notification.basic_tab',
            'disable' => true,
            'children' => 
            array (
              'admin_batch_notification_create' => 
              array (
                'name' => 'admin.operation.notification.basic_tab.create_btn',
                'group' => 'topBtn',
              ),
            ),
          ),
        ),
      ),
      'admin_block_manage' => 
      array (
        'name' => 'admin.operation.block_menu',
        'group' => 2,
        'children' => 
        array (
          'admin_block' => 
          array (
            'name' => 'admin.operation.block.basic_tab',
            'disable' => true,
            'router_params' => 
            array (
              'category' => 'all',
            ),
            'children' => 
            array (
              'admin_block_visual_edit' => 
              array (
                'name' => 'admin.operation.block.basic_tab.edit_btn',
                'router_params' => 
                array (
                  'blockId' => '(blockTemplateId:block.blockTemplateId)',
                ),
              ),
            ),
          ),
        ),
      ),
      'admin_operation_content' => 
      array (
        'name' => 'admin.operation.content_menu',
        'group' => 2,
        'children' => 
        array (
          'admin_content' => 
          array (
            'name' => 'admin.operation.content.basic_tab',
            'disable' => true,
            'router_params' => 
            array (
              'type' => 'page',
            ),
          ),
        ),
      ),
      'admin_operation_mobile' => 
      array (
        'name' => 'admin.operation.mobile_menu',
        'group' => 2,
        'children' => 
        array (
          'admin_operation_mobile_banner_manage' => 
          array (
            'name' => 'admin.operation.mobile.banner_setting_tab',
            'disable' => true,
            'router_name' => 'admin_operation_mobile',
          ),
          'admin_operation_mobile_select_manage' => 
          array (
            'name' => 'admin.operation.mobile.selection_setting_tab',
            'disable' => true,
            'router_name' => 'admin_operation_mobile_select',
          ),
          'admin_discovery_column_index' => 
          array (
            'name' => 'admin.operation.mobile.discovery_column_tab',
            'disable' => true,
            'children' => 
            array (
              'admin_discovery_column_create' => 
              array (
                'name' => 'admin.operation.mobile.discovery_column_tab.create_btn',
                'group' => 'topBtn',
                'mode' => 'modal',
              ),
            ),
          ),
        ),
      ),
      'admin_operation_analysis_register' => 
      array (
        'name' => 'admin.operation.analysis_menu',
        'group' => 3,
        'children' => 
        array (
          'admin_operation_analysis' => 
          array (
            'disable' => true,
            'name' => 'admin.operation.analysis.basic_tab',
            'router_params' => 
            array (
              'tab' => 'trend',
              'analysisDateType' => 'register',
            ),
            'router_name' => 'admin_operation_analysis_register',
          ),
        ),
      ),
      'admin_operation_keyword' => 
      array (
        'name' => 'admin.operation.sensitive_words_menu',
        'parent' => 'admin_operation',
        'group' => 4,
        'children' => 
        array (
          'admin_keyword' => 
          array (
            'name' => 'admin.operation.sensitive_words.sensitive_words_list_tab',
            'disable' => true,
            'children' => 
            array (
              'admin_keyword_create' => 
              array (
                'name' => 'admin.operation.sensitive_words.sensitive_words_list_tab.create_btn',
                'mode' => 'modal',
                'group' => 'topBtn',
              ),
            ),
          ),
          'admin_keyword_banlogs' => 
          array (
            'name' => 'admin.operation.sensitive_words.banlogs_tab',
            'disable' => true,
          ),
        ),
      ),
    ),
    'parent' => 'admin',
    'code' => 'admin_operation',
  ),
  'admin_operation_article' => 
  array (
    'name' => 'admin.operation.article_menu',
    'children' => 
    array (
      'admin_operation_article_manage' => 
      array (
        'name' => 'admin.operation.article.basic_tab',
        'disable' => true,
        'router_name' => 'admin_article',
        'children' => 
        array (
          'admin_operation_article_create' => 
          array (
            'name' => 'admin.operation.article.basic_tab.create_btn',
            'router_name' => 'admin_article_create',
            'group' => 'topBtn',
          ),
        ),
      ),
      'admin_operation_article_category' => 
      array (
        'name' => 'admin.operation.article.category_tab',
        'disable' => true,
        'router_name' => 'admin_article_category',
        'children' => 
        array (
          'admin_operation_category_create' => 
          array (
            'name' => 'admin.operation.article.category_tab.category_create_btn',
            'router_name' => 'admin_article_category_create',
            'mode' => 'modal',
            'group' => 'topBtn',
          ),
        ),
      ),
    ),
    'parent' => 'admin_operation',
    'code' => 'admin_operation_article',
  ),
  'admin_operation_article_manage' => 
  array (
    'name' => 'admin.operation.article.basic_tab',
    'disable' => true,
    'router_name' => 'admin_article',
    'children' => 
    array (
      'admin_operation_article_create' => 
      array (
        'name' => 'admin.operation.article.basic_tab.create_btn',
        'router_name' => 'admin_article_create',
        'group' => 'topBtn',
      ),
    ),
    'parent' => 'admin_operation_article',
    'code' => 'admin_operation_article_manage',
  ),
  'admin_operation_article_create' => 
  array (
    'name' => 'admin.operation.article.basic_tab.create_btn',
    'router_name' => 'admin_article_create',
    'group' => 'topBtn',
    'parent' => 'admin_operation_article_manage',
    'code' => 'admin_operation_article_create',
  ),
  'admin_operation_article_category' => 
  array (
    'name' => 'admin.operation.article.category_tab',
    'disable' => true,
    'router_name' => 'admin_article_category',
    'children' => 
    array (
      'admin_operation_category_create' => 
      array (
        'name' => 'admin.operation.article.category_tab.category_create_btn',
        'router_name' => 'admin_article_category_create',
        'mode' => 'modal',
        'group' => 'topBtn',
      ),
    ),
    'parent' => 'admin_operation_article',
    'code' => 'admin_operation_article_category',
  ),
  'admin_operation_category_create' => 
  array (
    'name' => 'admin.operation.article.category_tab.category_create_btn',
    'router_name' => 'admin_article_category_create',
    'mode' => 'modal',
    'group' => 'topBtn',
    'parent' => 'admin_operation_article_category',
    'code' => 'admin_operation_category_create',
  ),
  'admin_operation_group' => 
  array (
    'name' => 'admin.operation.group_menu',
    'children' => 
    array (
      'admin_operation_group_manage' => 
      array (
        'name' => 'admin.operation.group.group_tab',
        'disable' => true,
        'router_name' => 'admin_group',
        'children' => 
        array (
          'admin_operation_group_create' => 
          array (
            'name' => 'admin.operation.group.group_tab.create_group_btn',
            'router_name' => 'group_add',
            'group' => 'topBtn',
            'blank' => 1,
          ),
        ),
      ),
      'admin_operation_group_thread' => 
      array (
        'name' => 'admin.operation.group.group_thread_tab',
        'disable' => true,
        'router_name' => 'admin_groupThread',
      ),
    ),
    'parent' => 'admin_operation',
    'code' => 'admin_operation_group',
  ),
  'admin_operation_group_manage' => 
  array (
    'name' => 'admin.operation.group.group_tab',
    'disable' => true,
    'router_name' => 'admin_group',
    'children' => 
    array (
      'admin_operation_group_create' => 
      array (
        'name' => 'admin.operation.group.group_tab.create_group_btn',
        'router_name' => 'group_add',
        'group' => 'topBtn',
        'blank' => 1,
      ),
    ),
    'parent' => 'admin_operation_group',
    'code' => 'admin_operation_group_manage',
  ),
  'admin_operation_group_create' => 
  array (
    'name' => 'admin.operation.group.group_tab.create_group_btn',
    'router_name' => 'group_add',
    'group' => 'topBtn',
    'blank' => 1,
    'parent' => 'admin_operation_group_manage',
    'code' => 'admin_operation_group_create',
  ),
  'admin_operation_group_thread' => 
  array (
    'name' => 'admin.operation.group.group_thread_tab',
    'disable' => true,
    'router_name' => 'admin_groupThread',
    'parent' => 'admin_operation_group',
    'code' => 'admin_operation_group_thread',
  ),
  'admin_operation_invite' => 
  array (
    'name' => 'admin.operation.invite_menu',
    'children' => 
    array (
      'admin_operation_invite_record' => 
      array (
        'name' => 'admin.operation.invite.record_tab',
        'disable' => true,
        'router_name' => 'admin_invite_record',
      ),
      'admin_operation_invite_user' => 
      array (
        'name' => 'admin.operation.invite.user_tab',
        'disable' => true,
        'router_name' => 'admin_invite',
      ),
      'admin_operation_invite_coupon' => 
      array (
        'name' => 'admin.operation.invite.coupon_tab',
        'disable' => true,
        'router_name' => 'admin_invite_coupon',
      ),
    ),
    'parent' => 'admin_operation',
    'code' => 'admin_operation_invite',
  ),
  'admin_operation_invite_record' => 
  array (
    'name' => 'admin.operation.invite.record_tab',
    'disable' => true,
    'router_name' => 'admin_invite_record',
    'parent' => 'admin_operation_invite',
    'code' => 'admin_operation_invite_record',
  ),
  'admin_operation_invite_user' => 
  array (
    'name' => 'admin.operation.invite.user_tab',
    'disable' => true,
    'router_name' => 'admin_invite',
    'parent' => 'admin_operation_invite',
    'code' => 'admin_operation_invite_user',
  ),
  'admin_operation_invite_coupon' => 
  array (
    'name' => 'admin.operation.invite.coupon_tab',
    'disable' => true,
    'router_name' => 'admin_invite_coupon',
    'parent' => 'admin_operation_invite',
    'code' => 'admin_operation_invite_coupon',
  ),
  'admin_announcement' => 
  array (
    'name' => 'admin.operation.announcement_menu',
    'group' => 2,
    'children' => 
    array (
      'admin_announcement_manage' => 
      array (
        'name' => 'admin.operation.announcement.basic_tab',
        'disable' => true,
        'router_name' => 'admin_announcement',
        'children' => 
        array (
          'admin_announcement_create' => 
          array (
            'name' => 'admin.operation.announcement.basic_tab.create_btn',
            'mode' => 'modal',
            'group' => 'topBtn',
          ),
        ),
      ),
    ),
    'parent' => 'admin_operation',
    'code' => 'admin_announcement',
  ),
  'admin_announcement_manage' => 
  array (
    'name' => 'admin.operation.announcement.basic_tab',
    'disable' => true,
    'router_name' => 'admin_announcement',
    'children' => 
    array (
      'admin_announcement_create' => 
      array (
        'name' => 'admin.operation.announcement.basic_tab.create_btn',
        'mode' => 'modal',
        'group' => 'topBtn',
      ),
    ),
    'parent' => 'admin_announcement',
    'code' => 'admin_announcement_manage',
  ),
  'admin_announcement_create' => 
  array (
    'name' => 'admin.operation.announcement.basic_tab.create_btn',
    'mode' => 'modal',
    'group' => 'topBtn',
    'parent' => 'admin_announcement_manage',
    'code' => 'admin_announcement_create',
  ),
  'admin_operation_notification' => 
  array (
    'name' => 'admin.operation.notification_menu',
    'group' => 2,
    'children' => 
    array (
      'admin_batch_notification' => 
      array (
        'name' => 'admin.operation.notification.basic_tab',
        'disable' => true,
        'children' => 
        array (
          'admin_batch_notification_create' => 
          array (
            'name' => 'admin.operation.notification.basic_tab.create_btn',
            'group' => 'topBtn',
          ),
        ),
      ),
    ),
    'parent' => 'admin_operation',
    'code' => 'admin_operation_notification',
  ),
  'admin_batch_notification' => 
  array (
    'name' => 'admin.operation.notification.basic_tab',
    'disable' => true,
    'children' => 
    array (
      'admin_batch_notification_create' => 
      array (
        'name' => 'admin.operation.notification.basic_tab.create_btn',
        'group' => 'topBtn',
      ),
    ),
    'parent' => 'admin_operation_notification',
    'code' => 'admin_batch_notification',
  ),
  'admin_batch_notification_create' => 
  array (
    'name' => 'admin.operation.notification.basic_tab.create_btn',
    'group' => 'topBtn',
    'parent' => 'admin_batch_notification',
    'code' => 'admin_batch_notification_create',
  ),
  'admin_block_manage' => 
  array (
    'name' => 'admin.operation.block_menu',
    'group' => 2,
    'children' => 
    array (
      'admin_block' => 
      array (
        'name' => 'admin.operation.block.basic_tab',
        'disable' => true,
        'router_params' => 
        array (
          'category' => 'all',
        ),
        'children' => 
        array (
          'admin_block_visual_edit' => 
          array (
            'name' => 'admin.operation.block.basic_tab.edit_btn',
            'router_params' => 
            array (
              'blockId' => '(blockTemplateId:block.blockTemplateId)',
            ),
          ),
        ),
      ),
    ),
    'parent' => 'admin_operation',
    'code' => 'admin_block_manage',
  ),
  'admin_block' => 
  array (
    'name' => 'admin.operation.block.basic_tab',
    'disable' => true,
    'router_params' => 
    array (
      'category' => 'all',
    ),
    'children' => 
    array (
      'admin_block_visual_edit' => 
      array (
        'name' => 'admin.operation.block.basic_tab.edit_btn',
        'router_params' => 
        array (
          'blockId' => '(blockTemplateId:block.blockTemplateId)',
        ),
      ),
    ),
    'parent' => 'admin_block_manage',
    'code' => 'admin_block',
  ),
  'admin_block_visual_edit' => 
  array (
    'name' => 'admin.operation.block.basic_tab.edit_btn',
    'router_params' => 
    array (
      'blockId' => '(blockTemplateId:block.blockTemplateId)',
    ),
    'parent' => 'admin_block',
    'code' => 'admin_block_visual_edit',
  ),
  'admin_operation_content' => 
  array (
    'name' => 'admin.operation.content_menu',
    'group' => 2,
    'children' => 
    array (
      'admin_content' => 
      array (
        'name' => 'admin.operation.content.basic_tab',
        'disable' => true,
        'router_params' => 
        array (
          'type' => 'page',
        ),
      ),
    ),
    'parent' => 'admin_operation',
    'code' => 'admin_operation_content',
  ),
  'admin_content' => 
  array (
    'name' => 'admin.operation.content.basic_tab',
    'disable' => true,
    'router_params' => 
    array (
      'type' => 'page',
    ),
    'parent' => 'admin_operation_content',
    'code' => 'admin_content',
  ),
  'admin_operation_mobile' => 
  array (
    'name' => 'admin.operation.mobile_menu',
    'group' => 2,
    'children' => 
    array (
      'admin_operation_mobile_banner_manage' => 
      array (
        'name' => 'admin.operation.mobile.banner_setting_tab',
        'disable' => true,
        'router_name' => 'admin_operation_mobile',
      ),
      'admin_operation_mobile_select_manage' => 
      array (
        'name' => 'admin.operation.mobile.selection_setting_tab',
        'disable' => true,
        'router_name' => 'admin_operation_mobile_select',
      ),
      'admin_discovery_column_index' => 
      array (
        'name' => 'admin.operation.mobile.discovery_column_tab',
        'disable' => true,
        'children' => 
        array (
          'admin_discovery_column_create' => 
          array (
            'name' => 'admin.operation.mobile.discovery_column_tab.create_btn',
            'group' => 'topBtn',
            'mode' => 'modal',
          ),
        ),
      ),
    ),
    'parent' => 'admin_operation',
    'code' => 'admin_operation_mobile',
  ),
  'admin_operation_mobile_banner_manage' => 
  array (
    'name' => 'admin.operation.mobile.banner_setting_tab',
    'disable' => true,
    'router_name' => 'admin_operation_mobile',
    'parent' => 'admin_operation_mobile',
    'code' => 'admin_operation_mobile_banner_manage',
  ),
  'admin_operation_mobile_select_manage' => 
  array (
    'name' => 'admin.operation.mobile.selection_setting_tab',
    'disable' => true,
    'router_name' => 'admin_operation_mobile_select',
    'parent' => 'admin_operation_mobile',
    'code' => 'admin_operation_mobile_select_manage',
  ),
  'admin_discovery_column_index' => 
  array (
    'name' => 'admin.operation.mobile.discovery_column_tab',
    'disable' => true,
    'children' => 
    array (
      'admin_discovery_column_create' => 
      array (
        'name' => 'admin.operation.mobile.discovery_column_tab.create_btn',
        'group' => 'topBtn',
        'mode' => 'modal',
      ),
    ),
    'parent' => 'admin_operation_mobile',
    'code' => 'admin_discovery_column_index',
  ),
  'admin_discovery_column_create' => 
  array (
    'name' => 'admin.operation.mobile.discovery_column_tab.create_btn',
    'group' => 'topBtn',
    'mode' => 'modal',
    'parent' => 'admin_discovery_column_index',
    'code' => 'admin_discovery_column_create',
  ),
  'admin_operation_analysis_register' => 
  array (
    'name' => 'admin.operation.analysis_menu',
    'group' => 3,
    'children' => 
    array (
      'admin_operation_analysis' => 
      array (
        'disable' => true,
        'name' => 'admin.operation.analysis.basic_tab',
        'router_params' => 
        array (
          'tab' => 'trend',
          'analysisDateType' => 'register',
        ),
        'router_name' => 'admin_operation_analysis_register',
      ),
    ),
    'parent' => 'admin_operation',
    'code' => 'admin_operation_analysis_register',
  ),
  'admin_operation_analysis' => 
  array (
    'disable' => true,
    'name' => 'admin.operation.analysis.basic_tab',
    'router_params' => 
    array (
      'tab' => 'trend',
      'analysisDateType' => 'register',
    ),
    'router_name' => 'admin_operation_analysis_register',
    'parent' => 'admin_operation_analysis_register',
    'code' => 'admin_operation_analysis',
  ),
  'admin_operation_keyword' => 
  array (
    'name' => 'admin.operation.sensitive_words_menu',
    'parent' => 'admin_operation',
    'group' => 4,
    'children' => 
    array (
      'admin_keyword' => 
      array (
        'name' => 'admin.operation.sensitive_words.sensitive_words_list_tab',
        'disable' => true,
        'children' => 
        array (
          'admin_keyword_create' => 
          array (
            'name' => 'admin.operation.sensitive_words.sensitive_words_list_tab.create_btn',
            'mode' => 'modal',
            'group' => 'topBtn',
          ),
        ),
      ),
      'admin_keyword_banlogs' => 
      array (
        'name' => 'admin.operation.sensitive_words.banlogs_tab',
        'disable' => true,
      ),
    ),
    'code' => 'admin_operation_keyword',
  ),
  'admin_keyword' => 
  array (
    'name' => 'admin.operation.sensitive_words.sensitive_words_list_tab',
    'disable' => true,
    'children' => 
    array (
      'admin_keyword_create' => 
      array (
        'name' => 'admin.operation.sensitive_words.sensitive_words_list_tab.create_btn',
        'mode' => 'modal',
        'group' => 'topBtn',
      ),
    ),
    'parent' => 'admin_operation_keyword',
    'code' => 'admin_keyword',
  ),
  'admin_keyword_create' => 
  array (
    'name' => 'admin.operation.sensitive_words.sensitive_words_list_tab.create_btn',
    'mode' => 'modal',
    'group' => 'topBtn',
    'parent' => 'admin_keyword',
    'code' => 'admin_keyword_create',
  ),
  'admin_keyword_banlogs' => 
  array (
    'name' => 'admin.operation.sensitive_words.banlogs_tab',
    'disable' => true,
    'parent' => 'admin_operation_keyword',
    'code' => 'admin_keyword_banlogs',
  ),
  'admin_finance' => 
  array (
    'name' => 'admin.nav.finance',
    'children' => 
    array (
      'admin_orders' => 
      array (
        'name' => 'admin.finance.order_menu',
        'children' => 
        array (
          'admin_order_manage' => 
          array (
            'name' => 'admin.finance.order_menu',
          ),
        ),
      ),
      'admin_order_refunds' => 
      array (
        'name' => 'admin.finance.refunds_menu',
        'children' => 
        array (
          'admin_order_refunds_manage' => 
          array (
            'name' => 'admin.finance.refunds.basic_tab',
            'router_name' => 'admin_order_refunds',
          ),
        ),
      ),
      'admin_bills' => 
      array (
        'name' => 'admin.finance.bills_menu',
        'children' => 
        array (
          'admin_bill_cash' => 
          array (
            'name' => 'admin.finance.bills.cash_records_tab',
            'router_name' => 'admin_bill',
            'router_params' => 
            array (
              'type' => 'money',
            ),
            'disable' => true,
          ),
          'admin_bill_coin' => 
          array (
            'name' => 'admin.finance.bills.coin_records_tab',
            'router_name' => 'admin_bill',
            'router_params' => 
            array (
              'type' => 'coin',
            ),
            'disable' => true,
          ),
        ),
      ),
      'admin_coin_user' => 
      array (
        'name' => 'admin.finance.coin_menu',
        'children' => 
        array (
          'admin_coin_user_records' => 
          array (
            'name' => 'admin.finance.coin.basic_tab',
            'disable' => true,
            'router_name' => 'admin_coin_user_records',
          ),
        ),
      ),
    ),
    'parent' => 'admin',
    'code' => 'admin_finance',
  ),
  'admin_orders' => 
  array (
    'name' => 'admin.finance.order_menu',
    'children' => 
    array (
      'admin_order_manage' => 
      array (
        'name' => 'admin.finance.order_menu',
      ),
    ),
    'parent' => 'admin_finance',
    'code' => 'admin_orders',
  ),
  'admin_order_manage' => 
  array (
    'name' => 'admin.finance.order_menu',
    'parent' => 'admin_orders',
    'code' => 'admin_order_manage',
  ),
  'admin_order_refunds' => 
  array (
    'name' => 'admin.finance.refunds_menu',
    'children' => 
    array (
      'admin_order_refunds_manage' => 
      array (
        'name' => 'admin.finance.refunds.basic_tab',
        'router_name' => 'admin_order_refunds',
      ),
    ),
    'parent' => 'admin_finance',
    'code' => 'admin_order_refunds',
  ),
  'admin_order_refunds_manage' => 
  array (
    'name' => 'admin.finance.refunds.basic_tab',
    'router_name' => 'admin_order_refunds',
    'parent' => 'admin_order_refunds',
    'code' => 'admin_order_refunds_manage',
  ),
  'admin_bills' => 
  array (
    'name' => 'admin.finance.bills_menu',
    'children' => 
    array (
      'admin_bill_cash' => 
      array (
        'name' => 'admin.finance.bills.cash_records_tab',
        'router_name' => 'admin_bill',
        'router_params' => 
        array (
          'type' => 'money',
        ),
        'disable' => true,
      ),
      'admin_bill_coin' => 
      array (
        'name' => 'admin.finance.bills.coin_records_tab',
        'router_name' => 'admin_bill',
        'router_params' => 
        array (
          'type' => 'coin',
        ),
        'disable' => true,
      ),
    ),
    'parent' => 'admin_finance',
    'code' => 'admin_bills',
  ),
  'admin_bill_cash' => 
  array (
    'name' => 'admin.finance.bills.cash_records_tab',
    'router_name' => 'admin_bill',
    'router_params' => 
    array (
      'type' => 'money',
    ),
    'disable' => true,
    'parent' => 'admin_bills',
    'code' => 'admin_bill_cash',
  ),
  'admin_bill_coin' => 
  array (
    'name' => 'admin.finance.bills.coin_records_tab',
    'router_name' => 'admin_bill',
    'router_params' => 
    array (
      'type' => 'coin',
    ),
    'disable' => true,
    'parent' => 'admin_bills',
    'code' => 'admin_bill_coin',
  ),
  'admin_coin_user' => 
  array (
    'name' => 'admin.finance.coin_menu',
    'children' => 
    array (
      'admin_coin_user_records' => 
      array (
        'name' => 'admin.finance.coin.basic_tab',
        'disable' => true,
        'router_name' => 'admin_coin_user_records',
      ),
    ),
    'parent' => 'admin_finance',
    'code' => 'admin_coin_user',
  ),
  'admin_coin_user_records' => 
  array (
    'name' => 'admin.finance.coin.basic_tab',
    'disable' => true,
    'router_name' => 'admin_coin_user_records',
    'parent' => 'admin_coin_user',
    'code' => 'admin_coin_user_records',
  ),
  'admin_app' => 
  array (
    'name' => 'admin.nav.cloud',
    'visible' => '(not (setting(\'copyright.thirdCopyright\', false) == 1) and not is_without_network())',
    'children' => 
    array (
      'admin_my_cloud' => 
      array (
        'name' => 'admin.cloud.overview_menu',
        'children' => 
        array (
          'admin_my_cloud_overview' => 
          array (
            'name' => 'admin.cloud.overview.basic_tab',
            'disable' => true,
          ),
        ),
      ),
      'admin_cloud_video_setting' => 
      array (
        'name' => 'admin.cloud.video_menu',
        'router_name' => 'admin_cloud_video_overview',
        'visible' => '(cloudStatus())',
        'children' => 
        array (
          'admin_cloud_video_overview' => 
          array (
            'name' => 'admin.tab.overview_tab',
            'disable' => true,
          ),
          'admin_cloud_setting_video' => 
          array (
            'name' => 'admin.tab.setting_tab',
            'disable' => true,
          ),
        ),
      ),
      'admin_cloud_edulive_setting' => 
      array (
        'name' => 'admin.cloud.edulive_menu',
        'visible' => '(cloudStatus())',
        'router_name' => 'admin_cloud_edulive_overview',
        'children' => 
        array (
          'admin_cloud_edulive_overview' => 
          array (
            'name' => 'admin.tab.overview_tab',
            'disable' => true,
          ),
          'admin_setting_cloud_edulive' => 
          array (
            'name' => 'admin.tab.setting_tab',
            'disable' => true,
          ),
        ),
      ),
      'admin_edu_cloud_sms' => 
      array (
        'name' => 'admin.cloud.sms_menu',
        'visible' => '(cloudStatus())',
        'children' => 
        array (
          'admin_edu_cloud_sms_overview' => 
          array (
            'name' => 'admin.tab.overview_tab',
            'router_name' => 'admin_edu_cloud_sms',
            'disable' => true,
          ),
          'admin_edu_cloud_setting_sms' => 
          array (
            'name' => 'admin.tab.setting_tab',
            'disable' => true,
          ),
        ),
      ),
      'admin_edu_cloud_email' => 
      array (
        'name' => 'admin.cloud.email_menu',
        'visible' => '(cloudStatus())',
        'children' => 
        array (
          'admin_edu_cloud_email_overview' => 
          array (
            'name' => 'admin.tab.overview_tab',
            'router_name' => 'admin_edu_cloud_email',
            'disable' => true,
          ),
          'admin_edu_cloud_email_setting' => 
          array (
            'name' => 'admin.tab.setting_tab',
            'disable' => true,
          ),
        ),
      ),
      'admin_edu_cloud_search_setting' => 
      array (
        'name' => 'admin.cloud.search_menu',
        'visible' => '(cloudStatus())',
        'router_name' => 'admin_edu_cloud_search',
        'children' => 
        array (
          'admin_edu_cloud_search_overview' => 
          array (
            'name' => 'admin.tab.overview_tab',
            'router_name' => 'admin_edu_cloud_search',
            'disable' => true,
          ),
          'admin_edu_cloud_setting_search' => 
          array (
            'name' => 'admin.tab.setting_tab',
            'disable' => true,
          ),
        ),
      ),
      'admin_app_im' => 
      array (
        'name' => 'admin.cloud.im_setting_menu',
        'visible' => '(cloudStatus())',
        'children' => 
        array (
          'admin_app_im_setting' => 
          array (
            'name' => 'admin.cloud.im_setting.basic_tab',
            'router_name' => 'admin_app_im',
            'disable' => true,
          ),
        ),
      ),
      'admin_cloud_file_manage' => 
      array (
        'name' => 'admin.cloud.file_menu',
        'visible' => '(cloudStatus())',
        'parent' => 'admin_app',
        'after' => 'admin_app_center_show',
        'children' => 
        array (
          'admin_cloud_file' => 
          array (
            'name' => 'admin.cloud.file.basic_tab',
            'disable' => true,
          ),
        ),
      ),
      'admin_setting_cloud_attachment' => 
      array (
        'name' => 'admin.cloud.attachment_setting_menu',
        'visible' => '(cloudStatus())',
        'children' => 
        array (
          'admin_edu_cloud_attachment' => 
          array (
            'name' => 'admin.cloud.attachment_setting.basic_tab',
            'disable' => true,
          ),
        ),
      ),
      'admin_app_center_show' => 
      array (
        'name' => 'admin.cloud.app_center_menu',
        'router_name' => 'admin_app_center',
        'router_params' => 
        array (
          'postStatus' => 'all',
        ),
        'children' => 
        array (
          'admin_app_center' => 
          array (
            'name' => 'admin.cloud.app_center.basic_tab',
            'router_name' => 'admin_app_center',
            'disable' => true,
            'router_params' => 
            array (
              'postStatus' => 'all',
            ),
          ),
          'admin_app_installed' => 
          array (
            'name' => 'admin.cloud.app_center.installed_tab',
            'disable' => true,
            'router_params' => 
            array (
              'postStatus' => 'all',
            ),
          ),
          'admin_app_upgrades' => 
          array (
            'name' => 'admin.cloud.app_center.upgrades_tab',
            'class' => 'app-upgrade',
            'disable' => true,
          ),
          'admin_app_logs' => 
          array (
            'name' => 'admin.cloud.app_center.logs_tab',
            'disable' => true,
          ),
        ),
      ),
      'admin_cloud_attachment_manage' => 
      array (
        'name' => 'admin.cloud.attachment_menu',
        'visible' => '(cloudStatus())',
        'children' => 
        array (
          'admin_cloud_attachment' => 
          array (
            'name' => 'admin.cloud.attachment.basic_tab',
            'disable' => true,
          ),
        ),
      ),
      'admin_cloud_consult' => 
      array (
        'name' => 'admin.cloud.consult_menu',
        'router_name' => 'admin_cloud_consult_setting',
        'visible' => '(cloudStatus())',
        'children' => 
        array (
          'admin_cloud_consult_setting' => 
          array (
            'name' => 'admin.tab.setting_tab',
            'disable' => true,
          ),
        ),
      ),
      'admin_cloud_data_lab_manage' => 
      array (
        'name' => 'admin.cloud.data_lab',
        'visible' => '(cloudStatus())',
        'children' => 
        array (
          'admin_cloud_data_lab' => 
          array (
            'name' => 'admin.cloud.data_lab',
            'router_name' => 'admin_cloud_data_lab',
          ),
          'admin_cloud_data_lab_setting' => 
          array (
            'name' => 'admin.cloud.data_lab_setting',
          ),
        ),
      ),
      'admin_cloud_face_identify_manage' => 
      array (
        'name' => 'admin.cloud.face_identify',
        'visible' => '(cloudStatus() and cloud_info()[\'ai.face\']|default(0) and setting(\'feature.face_enabled\'))',
        'children' => 
        array (
          'admin_cloud_face_identify' => 
          array (
            'name' => 'admin.cloud.face_identify',
          ),
        ),
      ),
      'admin_cloud_feature_lab_manage' => 
      array (
        'name' => 'admin.cloud.feature_lab',
        'visible' => '(cloudStatus())',
        'children' => 
        array (
          'admin_cloud_feature_lab' => 
          array (
            'name' => 'admin.cloud.feature_lab',
          ),
        ),
      ),
      'admin_setting_cloud' => 
      array (
        'name' => 'admin.cloud.cloud_setting_menu',
        'children' => 
        array (
          'admin_setting_my_cloud' => 
          array (
            'name' => 'admin.cloud.cloud_setting.basic_tab',
            'router_name' => 'admin_setting_cloud',
            'disable' => true,
          ),
        ),
      ),
    ),
    'parent' => 'admin',
    'code' => 'admin_app',
  ),
  'admin_my_cloud' => 
  array (
    'name' => 'admin.cloud.overview_menu',
    'children' => 
    array (
      'admin_my_cloud_overview' => 
      array (
        'name' => 'admin.cloud.overview.basic_tab',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_app',
    'code' => 'admin_my_cloud',
  ),
  'admin_my_cloud_overview' => 
  array (
    'name' => 'admin.cloud.overview.basic_tab',
    'disable' => true,
    'parent' => 'admin_my_cloud',
    'code' => 'admin_my_cloud_overview',
  ),
  'admin_cloud_video_setting' => 
  array (
    'name' => 'admin.cloud.video_menu',
    'router_name' => 'admin_cloud_video_overview',
    'visible' => '(cloudStatus())',
    'children' => 
    array (
      'admin_cloud_video_overview' => 
      array (
        'name' => 'admin.tab.overview_tab',
        'disable' => true,
      ),
      'admin_cloud_setting_video' => 
      array (
        'name' => 'admin.tab.setting_tab',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_app',
    'code' => 'admin_cloud_video_setting',
  ),
  'admin_cloud_video_overview' => 
  array (
    'name' => 'admin.tab.overview_tab',
    'disable' => true,
    'parent' => 'admin_cloud_video_setting',
    'code' => 'admin_cloud_video_overview',
  ),
  'admin_cloud_setting_video' => 
  array (
    'name' => 'admin.tab.setting_tab',
    'disable' => true,
    'parent' => 'admin_cloud_video_setting',
    'code' => 'admin_cloud_setting_video',
  ),
  'admin_cloud_edulive_setting' => 
  array (
    'name' => 'admin.cloud.edulive_menu',
    'visible' => '(cloudStatus())',
    'router_name' => 'admin_cloud_edulive_overview',
    'children' => 
    array (
      'admin_cloud_edulive_overview' => 
      array (
        'name' => 'admin.tab.overview_tab',
        'disable' => true,
      ),
      'admin_setting_cloud_edulive' => 
      array (
        'name' => 'admin.tab.setting_tab',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_app',
    'code' => 'admin_cloud_edulive_setting',
  ),
  'admin_cloud_edulive_overview' => 
  array (
    'name' => 'admin.tab.overview_tab',
    'disable' => true,
    'parent' => 'admin_cloud_edulive_setting',
    'code' => 'admin_cloud_edulive_overview',
  ),
  'admin_setting_cloud_edulive' => 
  array (
    'name' => 'admin.tab.setting_tab',
    'disable' => true,
    'parent' => 'admin_cloud_edulive_setting',
    'code' => 'admin_setting_cloud_edulive',
  ),
  'admin_edu_cloud_sms' => 
  array (
    'name' => 'admin.cloud.sms_menu',
    'visible' => '(cloudStatus())',
    'children' => 
    array (
      'admin_edu_cloud_sms_overview' => 
      array (
        'name' => 'admin.tab.overview_tab',
        'router_name' => 'admin_edu_cloud_sms',
        'disable' => true,
      ),
      'admin_edu_cloud_setting_sms' => 
      array (
        'name' => 'admin.tab.setting_tab',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_app',
    'code' => 'admin_edu_cloud_sms',
  ),
  'admin_edu_cloud_sms_overview' => 
  array (
    'name' => 'admin.tab.overview_tab',
    'router_name' => 'admin_edu_cloud_sms',
    'disable' => true,
    'parent' => 'admin_edu_cloud_sms',
    'code' => 'admin_edu_cloud_sms_overview',
  ),
  'admin_edu_cloud_setting_sms' => 
  array (
    'name' => 'admin.tab.setting_tab',
    'disable' => true,
    'parent' => 'admin_edu_cloud_sms',
    'code' => 'admin_edu_cloud_setting_sms',
  ),
  'admin_edu_cloud_email' => 
  array (
    'name' => 'admin.cloud.email_menu',
    'visible' => '(cloudStatus())',
    'children' => 
    array (
      'admin_edu_cloud_email_overview' => 
      array (
        'name' => 'admin.tab.overview_tab',
        'router_name' => 'admin_edu_cloud_email',
        'disable' => true,
      ),
      'admin_edu_cloud_email_setting' => 
      array (
        'name' => 'admin.tab.setting_tab',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_app',
    'code' => 'admin_edu_cloud_email',
  ),
  'admin_edu_cloud_email_overview' => 
  array (
    'name' => 'admin.tab.overview_tab',
    'router_name' => 'admin_edu_cloud_email',
    'disable' => true,
    'parent' => 'admin_edu_cloud_email',
    'code' => 'admin_edu_cloud_email_overview',
  ),
  'admin_edu_cloud_email_setting' => 
  array (
    'name' => 'admin.tab.setting_tab',
    'disable' => true,
    'parent' => 'admin_edu_cloud_email',
    'code' => 'admin_edu_cloud_email_setting',
  ),
  'admin_edu_cloud_search_setting' => 
  array (
    'name' => 'admin.cloud.search_menu',
    'visible' => '(cloudStatus())',
    'router_name' => 'admin_edu_cloud_search',
    'children' => 
    array (
      'admin_edu_cloud_search_overview' => 
      array (
        'name' => 'admin.tab.overview_tab',
        'router_name' => 'admin_edu_cloud_search',
        'disable' => true,
      ),
      'admin_edu_cloud_setting_search' => 
      array (
        'name' => 'admin.tab.setting_tab',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_app',
    'code' => 'admin_edu_cloud_search_setting',
  ),
  'admin_edu_cloud_search_overview' => 
  array (
    'name' => 'admin.tab.overview_tab',
    'router_name' => 'admin_edu_cloud_search',
    'disable' => true,
    'parent' => 'admin_edu_cloud_search_setting',
    'code' => 'admin_edu_cloud_search_overview',
  ),
  'admin_edu_cloud_setting_search' => 
  array (
    'name' => 'admin.tab.setting_tab',
    'disable' => true,
    'parent' => 'admin_edu_cloud_search_setting',
    'code' => 'admin_edu_cloud_setting_search',
  ),
  'admin_app_im' => 
  array (
    'name' => 'admin.cloud.im_setting_menu',
    'visible' => '(cloudStatus())',
    'children' => 
    array (
      'admin_app_im_setting' => 
      array (
        'name' => 'admin.cloud.im_setting.basic_tab',
        'router_name' => 'admin_app_im',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_app',
    'code' => 'admin_app_im',
  ),
  'admin_app_im_setting' => 
  array (
    'name' => 'admin.cloud.im_setting.basic_tab',
    'router_name' => 'admin_app_im',
    'disable' => true,
    'parent' => 'admin_app_im',
    'code' => 'admin_app_im_setting',
  ),
  'admin_cloud_file_manage' => 
  array (
    'name' => 'admin.cloud.file_menu',
    'visible' => '(cloudStatus())',
    'parent' => 'admin_app',
    'after' => 'admin_app_center_show',
    'children' => 
    array (
      'admin_cloud_file' => 
      array (
        'name' => 'admin.cloud.file.basic_tab',
        'disable' => true,
      ),
    ),
    'code' => 'admin_cloud_file_manage',
  ),
  'admin_cloud_file' => 
  array (
    'name' => 'admin.cloud.file.basic_tab',
    'disable' => true,
    'parent' => 'admin_cloud_file_manage',
    'code' => 'admin_cloud_file',
  ),
  'admin_setting_cloud_attachment' => 
  array (
    'name' => 'admin.cloud.attachment_setting_menu',
    'visible' => '(cloudStatus())',
    'children' => 
    array (
      'admin_edu_cloud_attachment' => 
      array (
        'name' => 'admin.cloud.attachment_setting.basic_tab',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_app',
    'code' => 'admin_setting_cloud_attachment',
  ),
  'admin_edu_cloud_attachment' => 
  array (
    'name' => 'admin.cloud.attachment_setting.basic_tab',
    'disable' => true,
    'parent' => 'admin_setting_cloud_attachment',
    'code' => 'admin_edu_cloud_attachment',
  ),
  'admin_app_center_show' => 
  array (
    'name' => 'admin.cloud.app_center_menu',
    'router_name' => 'admin_app_center',
    'router_params' => 
    array (
      'postStatus' => 'all',
    ),
    'children' => 
    array (
      'admin_app_center' => 
      array (
        'name' => 'admin.cloud.app_center.basic_tab',
        'router_name' => 'admin_app_center',
        'disable' => true,
        'router_params' => 
        array (
          'postStatus' => 'all',
        ),
      ),
      'admin_app_installed' => 
      array (
        'name' => 'admin.cloud.app_center.installed_tab',
        'disable' => true,
        'router_params' => 
        array (
          'postStatus' => 'all',
        ),
      ),
      'admin_app_upgrades' => 
      array (
        'name' => 'admin.cloud.app_center.upgrades_tab',
        'class' => 'app-upgrade',
        'disable' => true,
      ),
      'admin_app_logs' => 
      array (
        'name' => 'admin.cloud.app_center.logs_tab',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_app',
    'code' => 'admin_app_center_show',
  ),
  'admin_app_center' => 
  array (
    'name' => 'admin.cloud.app_center.basic_tab',
    'router_name' => 'admin_app_center',
    'disable' => true,
    'router_params' => 
    array (
      'postStatus' => 'all',
    ),
    'parent' => 'admin_app_center_show',
    'code' => 'admin_app_center',
  ),
  'admin_app_installed' => 
  array (
    'name' => 'admin.cloud.app_center.installed_tab',
    'disable' => true,
    'router_params' => 
    array (
      'postStatus' => 'all',
    ),
    'parent' => 'admin_app_center_show',
    'code' => 'admin_app_installed',
  ),
  'admin_app_upgrades' => 
  array (
    'name' => 'admin.cloud.app_center.upgrades_tab',
    'class' => 'app-upgrade',
    'disable' => true,
    'parent' => 'admin_app_center_show',
    'code' => 'admin_app_upgrades',
  ),
  'admin_app_logs' => 
  array (
    'name' => 'admin.cloud.app_center.logs_tab',
    'disable' => true,
    'parent' => 'admin_app_center_show',
    'code' => 'admin_app_logs',
  ),
  'admin_cloud_attachment_manage' => 
  array (
    'name' => 'admin.cloud.attachment_menu',
    'visible' => '(cloudStatus())',
    'children' => 
    array (
      'admin_cloud_attachment' => 
      array (
        'name' => 'admin.cloud.attachment.basic_tab',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_app',
    'code' => 'admin_cloud_attachment_manage',
  ),
  'admin_cloud_attachment' => 
  array (
    'name' => 'admin.cloud.attachment.basic_tab',
    'disable' => true,
    'parent' => 'admin_cloud_attachment_manage',
    'code' => 'admin_cloud_attachment',
  ),
  'admin_cloud_consult' => 
  array (
    'name' => 'admin.cloud.consult_menu',
    'router_name' => 'admin_cloud_consult_setting',
    'visible' => '(cloudStatus())',
    'children' => 
    array (
      'admin_cloud_consult_setting' => 
      array (
        'name' => 'admin.tab.setting_tab',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_app',
    'code' => 'admin_cloud_consult',
  ),
  'admin_cloud_consult_setting' => 
  array (
    'name' => 'admin.tab.setting_tab',
    'disable' => true,
    'parent' => 'admin_cloud_consult',
    'code' => 'admin_cloud_consult_setting',
  ),
  'admin_cloud_data_lab_manage' => 
  array (
    'name' => 'admin.cloud.data_lab',
    'visible' => '(cloudStatus())',
    'children' => 
    array (
      'admin_cloud_data_lab' => 
      array (
        'name' => 'admin.cloud.data_lab',
        'router_name' => 'admin_cloud_data_lab',
      ),
      'admin_cloud_data_lab_setting' => 
      array (
        'name' => 'admin.cloud.data_lab_setting',
      ),
    ),
    'parent' => 'admin_app',
    'code' => 'admin_cloud_data_lab_manage',
  ),
  'admin_cloud_data_lab' => 
  array (
    'name' => 'admin.cloud.data_lab',
    'router_name' => 'admin_cloud_data_lab',
    'parent' => 'admin_cloud_data_lab_manage',
    'code' => 'admin_cloud_data_lab',
  ),
  'admin_cloud_data_lab_setting' => 
  array (
    'name' => 'admin.cloud.data_lab_setting',
    'parent' => 'admin_cloud_data_lab_manage',
    'code' => 'admin_cloud_data_lab_setting',
  ),
  'admin_cloud_face_identify_manage' => 
  array (
    'name' => 'admin.cloud.face_identify',
    'visible' => '(cloudStatus() and cloud_info()[\'ai.face\']|default(0) and setting(\'feature.face_enabled\'))',
    'children' => 
    array (
      'admin_cloud_face_identify' => 
      array (
        'name' => 'admin.cloud.face_identify',
      ),
    ),
    'parent' => 'admin_app',
    'code' => 'admin_cloud_face_identify_manage',
  ),
  'admin_cloud_face_identify' => 
  array (
    'name' => 'admin.cloud.face_identify',
    'parent' => 'admin_cloud_face_identify_manage',
    'code' => 'admin_cloud_face_identify',
  ),
  'admin_cloud_feature_lab_manage' => 
  array (
    'name' => 'admin.cloud.feature_lab',
    'visible' => '(cloudStatus())',
    'children' => 
    array (
      'admin_cloud_feature_lab' => 
      array (
        'name' => 'admin.cloud.feature_lab',
      ),
    ),
    'parent' => 'admin_app',
    'code' => 'admin_cloud_feature_lab_manage',
  ),
  'admin_cloud_feature_lab' => 
  array (
    'name' => 'admin.cloud.feature_lab',
    'parent' => 'admin_cloud_feature_lab_manage',
    'code' => 'admin_cloud_feature_lab',
  ),
  'admin_setting_cloud' => 
  array (
    'name' => 'admin.cloud.cloud_setting_menu',
    'children' => 
    array (
      'admin_setting_my_cloud' => 
      array (
        'name' => 'admin.cloud.cloud_setting.basic_tab',
        'router_name' => 'admin_setting_cloud',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_app',
    'code' => 'admin_setting_cloud',
  ),
  'admin_setting_my_cloud' => 
  array (
    'name' => 'admin.cloud.cloud_setting.basic_tab',
    'router_name' => 'admin_setting_cloud',
    'disable' => true,
    'parent' => 'admin_setting_cloud',
    'code' => 'admin_setting_my_cloud',
  ),
  'admin_marketing_top' => 
  array (
    'name' => 'admin.marketing.menu',
    'blank' => true,
    'children' => 
    array (
      '_admin_marketing_marketing_menu' => 
      array (
        'name' => 'admin.marketing.menu',
        'disable' => true,
        'children' => 
        array (
          '_marketing_marketing_page' => 
          array (
            'name' => 'admin.marketing.menu',
            'router_name' => 'admin_login_marketing',
          ),
        ),
      ),
    ),
    'parent' => 'admin',
    'code' => 'admin_marketing_top',
  ),
  '_admin_marketing_marketing_menu' => 
  array (
    'name' => 'admin.marketing.menu',
    'disable' => true,
    'children' => 
    array (
      '_marketing_marketing_page' => 
      array (
        'name' => 'admin.marketing.menu',
        'router_name' => 'admin_login_marketing',
      ),
    ),
    'parent' => 'admin_marketing_top',
    'code' => '_admin_marketing_marketing_menu',
  ),
  '_marketing_marketing_page' => 
  array (
    'name' => 'admin.marketing.menu',
    'router_name' => 'admin_login_marketing',
    'parent' => '_admin_marketing_marketing_menu',
    'code' => '_marketing_marketing_page',
  ),
  'admin_distributor_top' => 
  array (
    'name' => 'admin.distributor.menu',
    'blank' => true,
    'children' => 
    array (
      '_admin_distributor_menu' => 
      array (
        'name' => 'admin.distributor.menu',
        'disable' => true,
        'children' => 
        array (
          '_distributor_page' => 
          array (
            'name' => 'admin.distributor.menu',
            'router_name' => 'admin_login_distributor',
          ),
        ),
      ),
    ),
    'parent' => 'admin',
    'code' => 'admin_distributor_top',
  ),
  '_admin_distributor_menu' => 
  array (
    'name' => 'admin.distributor.menu',
    'disable' => true,
    'children' => 
    array (
      '_distributor_page' => 
      array (
        'name' => 'admin.distributor.menu',
        'router_name' => 'admin_login_distributor',
      ),
    ),
    'parent' => 'admin_distributor_top',
    'code' => '_admin_distributor_menu',
  ),
  '_distributor_page' => 
  array (
    'name' => 'admin.distributor.menu',
    'router_name' => 'admin_login_distributor',
    'parent' => '_admin_distributor_menu',
    'code' => '_distributor_page',
  ),
  'admin_mobile' => 
  array (
    'name' => 'admin.nav.wechat_app',
    'router_name' => 'admin_wechat_app',
    'children' => 
    array (
      'admin_wechat_app_manage' => 
      array (
        'name' => 'admin.wechat_app.menu',
        'router_name' => 'admin_wechat_app',
        'children' => 
        array (
          'admin_wechat_app' => 
          array (
            'name' => 'admin.wechat_app.menu',
            'router_name' => 'admin_wechat_app',
            'disable' => true,
          ),
        ),
      ),
      'admin_setting_mobile' => 
      array (
        'name' => 'admin.system.mobile_menu',
        'children' => 
        array (
          'admin_setting_mobile_settings' => 
          array (
            'name' => 'admin.system.mobile.basic_tab',
            'disable' => true,
            'router_name' => 'admin_setting_mobile',
          ),
        ),
      ),
      'admin_h5_set' => 
      array (
        'name' => 'admin.system.mobile.h5',
        'children' => 
        array (
          'admin_wap_set' => 
          array (
            'name' => 'admin.system.operation.wap_tab',
            'disable' => true,
            'router_name' => 'admin_wap_set',
          ),
        ),
      ),
    ),
    'parent' => 'admin',
    'code' => 'admin_mobile',
  ),
  'admin_wechat_app_manage' => 
  array (
    'name' => 'admin.wechat_app.menu',
    'router_name' => 'admin_wechat_app',
    'children' => 
    array (
      'admin_wechat_app' => 
      array (
        'name' => 'admin.wechat_app.menu',
        'router_name' => 'admin_wechat_app',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_mobile',
    'code' => 'admin_wechat_app_manage',
  ),
  'admin_wechat_app' => 
  array (
    'name' => 'admin.wechat_app.menu',
    'router_name' => 'admin_wechat_app',
    'disable' => true,
    'parent' => 'admin_wechat_app_manage',
    'code' => 'admin_wechat_app',
  ),
  'admin_setting_mobile' => 
  array (
    'name' => 'admin.system.mobile_menu',
    'children' => 
    array (
      'admin_setting_mobile_settings' => 
      array (
        'name' => 'admin.system.mobile.basic_tab',
        'disable' => true,
        'router_name' => 'admin_setting_mobile',
      ),
    ),
    'parent' => 'admin_mobile',
    'code' => 'admin_setting_mobile',
  ),
  'admin_setting_mobile_settings' => 
  array (
    'name' => 'admin.system.mobile.basic_tab',
    'disable' => true,
    'router_name' => 'admin_setting_mobile',
    'parent' => 'admin_setting_mobile',
    'code' => 'admin_setting_mobile_settings',
  ),
  'admin_h5_set' => 
  array (
    'name' => 'admin.system.mobile.h5',
    'children' => 
    array (
      'admin_wap_set' => 
      array (
        'name' => 'admin.system.operation.wap_tab',
        'disable' => true,
        'router_name' => 'admin_wap_set',
      ),
    ),
    'parent' => 'admin_mobile',
    'code' => 'admin_h5_set',
  ),
  'admin_wap_set' => 
  array (
    'name' => 'admin.system.operation.wap_tab',
    'disable' => true,
    'router_name' => 'admin_wap_set',
    'parent' => 'admin_h5_set',
    'code' => 'admin_wap_set',
  ),
  'admin_system' => 
  array (
    'name' => 'admin.nav.system',
    'router_name' => 'admin_setting_site',
    'children' => 
    array (
      'admin_setting' => 
      array (
        'name' => 'admin.system.site_menu',
        'router_name' => 'admin_setting_site',
        'children' => 
        array (
          'admin_setting_message' => 
          array (
            'name' => 'admin.system.site.basic_tab',
            'router_name' => 'admin_setting_site',
            'disable' => true,
          ),
          'admin_setting_theme' => 
          array (
            'name' => 'admin.system.site.theme_tab',
            'disable' => true,
          ),
          'admin_setting_mailer' => 
          array (
            'name' => 'admin.system.site.mailer_setting_tab',
            'disable' => true,
          ),
          'admin_top_navigation' => 
          array (
            'name' => 'admin.system.site.top_navigation_tab',
            'router_name' => 'admin_navigation',
            'disable' => true,
            'router_params' => 
            array (
              'type' => 'top',
            ),
          ),
          'admin_foot_navigation' => 
          array (
            'name' => 'admin.system.site.foot_navigation_tab',
            'router_name' => 'admin_navigation',
            'disable' => true,
            'router_params' => 
            array (
              'type' => 'foot',
            ),
          ),
          'admin_friendlyLink_navigation' => 
          array (
            'name' => 'admin.system.site.friendlyLink_navigation_tab',
            'router_name' => 'admin_navigation',
            'disable' => true,
            'router_params' => 
            array (
              'type' => 'friendlyLink',
            ),
          ),
          'admin_setting_consult_setting' => 
          array (
            'name' => 'admin.system.site.consult_setting_tab',
            'disable' => true,
          ),
          'admin_setting_es_bar' => 
          array (
            'name' => 'admin.system.site.es_bar_tab',
            'disable' => true,
          ),
          'admin_setting_share' => 
          array (
            'name' => 'admin.system.site.share_tab',
            'disable' => true,
          ),
          'admin_setting_security' => 
          array (
            'name' => 'admin.system.site.security_tab',
            'disable' => true,
          ),
        ),
      ),
      'admin_setting_user' => 
      array (
        'name' => 'admin.system.user_menu',
        'children' => 
        array (
          'admin_user_auth' => 
          array (
            'name' => 'admin.system.user.auth_tab',
            'disable' => true,
            'router_name' => 'admin_setting_auth',
          ),
          'admin_setting_login_bind' => 
          array (
            'name' => 'admin.system.user.login_bind_tab',
            'disable' => true,
          ),
          'admin_setting_user_center' => 
          array (
            'name' => 'admin.system.user.user_center_tab',
            'disable' => true,
          ),
          'admin_setting_user_fields' => 
          array (
            'name' => 'admin.system.user.user_fields_tab',
            'disable' => true,
          ),
          'admin_setting_avatar' => 
          array (
            'name' => 'admin.system.user.avatar_tab',
            'disable' => true,
          ),
          'admin_setting_user_message' => 
          array (
            'name' => 'admin.system.user.message',
            'disable' => true,
          ),
        ),
      ),
      'admin_roles' => 
      array (
        'name' => 'admin.system.roles_menu',
        'children' => 
        array (
          'admin_role_manage' => 
          array (
            'name' => 'admin.system.roles.basic_tab',
            'disable' => true,
            'router_name' => 'admin_roles',
            'children' => 
            array (
              'admin_role_create' => 
              array (
                'name' => 'admin.system.roles.basic.create_btn',
                'mode' => 'modal',
                'group' => 'topBtn',
              ),
              'admin_role_edit' => 
              array (
                'name' => 'admin.system.roles.basic.edit_btn',
                'mode' => 'modal',
                'group' => 'groupBtn',
                'router_params' => 
                array (
                  'id' => '(role.id)',
                ),
              ),
              'admin_role_delete' => 
              array (
                'name' => 'admin.system.roles.basic.delete_submit_btn',
                'class' => 'role-delete js-delete-role',
                'group' => 'groupBtn',
                'mode' => 'none',
                'router_params' => 
                array (
                  'id' => '(role.id)',
                ),
              ),
            ),
          ),
        ),
      ),
      'admin_setting_course_setting' => 
      array (
        'name' => 'admin.system.course_menu',
        'children' => 
        array (
          'admin_setting_course' => 
          array (
            'name' => 'admin.system.course.basic_tab',
            'disable' => true,
            'router_name' => 'admin_setting_course_setting',
          ),
          'admin_setting_questions_setting' => 
          array (
            'name' => 'admin.system.course.questions_tab',
            'disable' => true,
          ),
          'admin_setting_course_avatar' => 
          array (
            'name' => 'admin.system.course.avatar_tab',
            'disable' => true,
          ),
          'admin_classroom_setting' => 
          array (
            'name' => 'admin.system.course.classroom_tab',
            'disable' => true,
            'parent' => 'admin_setting_course_setting',
            'after' => 'admin_setting_live_course',
          ),
        ),
      ),
      'admin_setting_operation' => 
      array (
        'name' => 'admin.system.operation_menu',
        'children' => 
        array (
          'admin_article_setting' => 
          array (
            'name' => 'admin.system.operation.article_tab',
            'disable' => true,
          ),
          'admin_group_set' => 
          array (
            'name' => 'admin.system.operation.group_tab',
            'disable' => true,
          ),
          'admin_invite_set' => 
          array (
            'name' => 'admin.system.operation.invite_tab',
            'disable' => true,
          ),
        ),
      ),
      'admin_setting_finance' => 
      array (
        'name' => 'admin.system.finance_menu',
        'children' => 
        array (
          'admin_payment' => 
          array (
            'name' => 'admin.system.finance.payment_tab',
            'disable' => true,
            'router_name' => 'admin_setting_payment',
          ),
          'admin_coin_settings' => 
          array (
            'name' => 'admin.system.finance.coin_tab',
            'disable' => true,
            'router_name' => 'admin_coin_settings',
          ),
          'admin_setting_refund' => 
          array (
            'name' => 'admin.system.finance.refund_tab',
            'disable' => true,
          ),
        ),
      ),
      'admin_setting_mobile_iap_product' => 
      array (
        'name' => 'admin.system.mobile_iap_product_menu',
        'disable' => true,
        'visible' => '(setting(\'magic.enable_mobile_iap\', \'0\'))',
        'children' => 
        array (
          'admin_setting_mobile_iap_product_list' => 
          array (
            'name' => 'admin.system.mobile_iap_product.basic_tab',
            'router_name' => 'admin_setting_mobile_iap_product',
          ),
        ),
      ),
      'admin_optimize' => 
      array (
        'name' => 'admin.system.optimize_menu',
        'group' => 2,
        'children' => 
        array (
          'admin_optimize_settings' => 
          array (
            'name' => 'admin.system.optimize.basic_tab',
            'disable' => true,
            'router_name' => 'admin_optimize',
          ),
        ),
      ),
      'admin_setting_ip_blacklist' => 
      array (
        'name' => 'admin.system.ip_blacklist_menu',
        'group' => 2,
        'children' => 
        array (
          'admin_setting_ip_blacklist_manage' => 
          array (
            'name' => 'admin.system.ip_blacklist.basic_tab',
            'disable' => true,
            'router_name' => 'admin_setting_ip_blacklist',
          ),
        ),
      ),
      'admin_setting_post_num_rules' => 
      array (
        'name' => 'admin.system.post_num_rules_menu',
        'group' => 2,
        'children' => 
        array (
          'admin_setting_post_num_rules_settings' => 
          array (
            'name' => 'admin.system.post_num_rules.basic_tab',
            'disable' => true,
            'router_name' => 'admin_setting_post_num_rules',
          ),
        ),
      ),
      'admin_report_status' => 
      array (
        'name' => 'admin.system.report_status_menu',
        'group' => 2,
        'children' => 
        array (
          'admin_report_status_list' => 
          array (
            'name' => 'admin.system.report_status.basic_tab',
            'disable' => true,
            'router_name' => 'admin_report_status',
          ),
        ),
      ),
      'admin_logs' => 
      array (
        'name' => 'admin.system.logs_menu',
        'group' => 2,
        'children' => 
        array (
          'admin_logs_query' => 
          array (
            'name' => 'admin.system.logs.logs_query_tab',
            'disable' => true,
            'router_name' => 'admin_logs',
          ),
          'admin_logs_prod' => 
          array (
            'name' => 'admin.system.logs.logs_prod_tab',
            'disable' => true,
          ),
        ),
      ),
      'admin_org_manage' => 
      array (
        'name' => 'admin.system.org_menu',
        'parent' => 'admin_system',
        'group' => 2,
        'disable' => true,
        'visible' => false,
        'children' => 
        array (
          'admin_org' => 
          array (
            'name' => 'admin.system.org.basic_tab',
            'disable' => true,
          ),
        ),
      ),
      'admin_jobs_manage' => 
      array (
        'name' => '任务调度',
        'group' => 2,
        'visible' => false,
        'disable' => true,
        'children' => 
        array (
          'admin_jobs' => 
          array (
            'name' => '任务调度',
          ),
          'admin_job_logs' => 
          array (
            'name' => '任务日志',
          ),
          'admin_crontab' => 
          array (
            'name' => 'crontab管理',
          ),
        ),
      ),
      'admin_xapi_manage' => 
      array (
        'name' => 'xAPI',
        'group' => 2,
        'visible' => false,
        'disable' => true,
        'children' => 
        array (
          'admin_xapi_setting' => 
          array (
            'name' => 'xAPI',
          ),
          'admin_xapi_statement_list' => 
          array (
            'name' => 'Statements',
          ),
        ),
      ),
      'admin_queue_menege' => 
      array (
        'name' => '队列',
        'group' => 2,
        'visible' => false,
        'disable' => true,
        'children' => 
        array (
          'admin_queue_failed_logs' => 
          array (
            'name' => '队列错误日志',
          ),
        ),
      ),
    ),
    'parent' => 'admin',
    'code' => 'admin_system',
  ),
  'admin_setting' => 
  array (
    'name' => 'admin.system.site_menu',
    'router_name' => 'admin_setting_site',
    'children' => 
    array (
      'admin_setting_message' => 
      array (
        'name' => 'admin.system.site.basic_tab',
        'router_name' => 'admin_setting_site',
        'disable' => true,
      ),
      'admin_setting_theme' => 
      array (
        'name' => 'admin.system.site.theme_tab',
        'disable' => true,
      ),
      'admin_setting_mailer' => 
      array (
        'name' => 'admin.system.site.mailer_setting_tab',
        'disable' => true,
      ),
      'admin_top_navigation' => 
      array (
        'name' => 'admin.system.site.top_navigation_tab',
        'router_name' => 'admin_navigation',
        'disable' => true,
        'router_params' => 
        array (
          'type' => 'top',
        ),
      ),
      'admin_foot_navigation' => 
      array (
        'name' => 'admin.system.site.foot_navigation_tab',
        'router_name' => 'admin_navigation',
        'disable' => true,
        'router_params' => 
        array (
          'type' => 'foot',
        ),
      ),
      'admin_friendlyLink_navigation' => 
      array (
        'name' => 'admin.system.site.friendlyLink_navigation_tab',
        'router_name' => 'admin_navigation',
        'disable' => true,
        'router_params' => 
        array (
          'type' => 'friendlyLink',
        ),
      ),
      'admin_setting_consult_setting' => 
      array (
        'name' => 'admin.system.site.consult_setting_tab',
        'disable' => true,
      ),
      'admin_setting_es_bar' => 
      array (
        'name' => 'admin.system.site.es_bar_tab',
        'disable' => true,
      ),
      'admin_setting_share' => 
      array (
        'name' => 'admin.system.site.share_tab',
        'disable' => true,
      ),
      'admin_setting_security' => 
      array (
        'name' => 'admin.system.site.security_tab',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_system',
    'code' => 'admin_setting',
  ),
  'admin_setting_message' => 
  array (
    'name' => 'admin.system.site.basic_tab',
    'router_name' => 'admin_setting_site',
    'disable' => true,
    'parent' => 'admin_setting',
    'code' => 'admin_setting_message',
  ),
  'admin_setting_theme' => 
  array (
    'name' => 'admin.system.site.theme_tab',
    'disable' => true,
    'parent' => 'admin_setting',
    'code' => 'admin_setting_theme',
  ),
  'admin_setting_mailer' => 
  array (
    'name' => 'admin.system.site.mailer_setting_tab',
    'disable' => true,
    'parent' => 'admin_setting',
    'code' => 'admin_setting_mailer',
  ),
  'admin_top_navigation' => 
  array (
    'name' => 'admin.system.site.top_navigation_tab',
    'router_name' => 'admin_navigation',
    'disable' => true,
    'router_params' => 
    array (
      'type' => 'top',
    ),
    'parent' => 'admin_setting',
    'code' => 'admin_top_navigation',
  ),
  'admin_foot_navigation' => 
  array (
    'name' => 'admin.system.site.foot_navigation_tab',
    'router_name' => 'admin_navigation',
    'disable' => true,
    'router_params' => 
    array (
      'type' => 'foot',
    ),
    'parent' => 'admin_setting',
    'code' => 'admin_foot_navigation',
  ),
  'admin_friendlyLink_navigation' => 
  array (
    'name' => 'admin.system.site.friendlyLink_navigation_tab',
    'router_name' => 'admin_navigation',
    'disable' => true,
    'router_params' => 
    array (
      'type' => 'friendlyLink',
    ),
    'parent' => 'admin_setting',
    'code' => 'admin_friendlyLink_navigation',
  ),
  'admin_setting_consult_setting' => 
  array (
    'name' => 'admin.system.site.consult_setting_tab',
    'disable' => true,
    'parent' => 'admin_setting',
    'code' => 'admin_setting_consult_setting',
  ),
  'admin_setting_es_bar' => 
  array (
    'name' => 'admin.system.site.es_bar_tab',
    'disable' => true,
    'parent' => 'admin_setting',
    'code' => 'admin_setting_es_bar',
  ),
  'admin_setting_share' => 
  array (
    'name' => 'admin.system.site.share_tab',
    'disable' => true,
    'parent' => 'admin_setting',
    'code' => 'admin_setting_share',
  ),
  'admin_setting_security' => 
  array (
    'name' => 'admin.system.site.security_tab',
    'disable' => true,
    'parent' => 'admin_setting',
    'code' => 'admin_setting_security',
  ),
  'admin_setting_user' => 
  array (
    'name' => 'admin.system.user_menu',
    'children' => 
    array (
      'admin_user_auth' => 
      array (
        'name' => 'admin.system.user.auth_tab',
        'disable' => true,
        'router_name' => 'admin_setting_auth',
      ),
      'admin_setting_login_bind' => 
      array (
        'name' => 'admin.system.user.login_bind_tab',
        'disable' => true,
      ),
      'admin_setting_user_center' => 
      array (
        'name' => 'admin.system.user.user_center_tab',
        'disable' => true,
      ),
      'admin_setting_user_fields' => 
      array (
        'name' => 'admin.system.user.user_fields_tab',
        'disable' => true,
      ),
      'admin_setting_avatar' => 
      array (
        'name' => 'admin.system.user.avatar_tab',
        'disable' => true,
      ),
      'admin_setting_user_message' => 
      array (
        'name' => 'admin.system.user.message',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_system',
    'code' => 'admin_setting_user',
  ),
  'admin_user_auth' => 
  array (
    'name' => 'admin.system.user.auth_tab',
    'disable' => true,
    'router_name' => 'admin_setting_auth',
    'parent' => 'admin_setting_user',
    'code' => 'admin_user_auth',
  ),
  'admin_setting_login_bind' => 
  array (
    'name' => 'admin.system.user.login_bind_tab',
    'disable' => true,
    'parent' => 'admin_setting_user',
    'code' => 'admin_setting_login_bind',
  ),
  'admin_setting_user_center' => 
  array (
    'name' => 'admin.system.user.user_center_tab',
    'disable' => true,
    'parent' => 'admin_setting_user',
    'code' => 'admin_setting_user_center',
  ),
  'admin_setting_user_fields' => 
  array (
    'name' => 'admin.system.user.user_fields_tab',
    'disable' => true,
    'parent' => 'admin_setting_user',
    'code' => 'admin_setting_user_fields',
  ),
  'admin_setting_avatar' => 
  array (
    'name' => 'admin.system.user.avatar_tab',
    'disable' => true,
    'parent' => 'admin_setting_user',
    'code' => 'admin_setting_avatar',
  ),
  'admin_setting_user_message' => 
  array (
    'name' => 'admin.system.user.message',
    'disable' => true,
    'parent' => 'admin_setting_user',
    'code' => 'admin_setting_user_message',
  ),
  'admin_roles' => 
  array (
    'name' => 'admin.system.roles_menu',
    'children' => 
    array (
      'admin_role_manage' => 
      array (
        'name' => 'admin.system.roles.basic_tab',
        'disable' => true,
        'router_name' => 'admin_roles',
        'children' => 
        array (
          'admin_role_create' => 
          array (
            'name' => 'admin.system.roles.basic.create_btn',
            'mode' => 'modal',
            'group' => 'topBtn',
          ),
          'admin_role_edit' => 
          array (
            'name' => 'admin.system.roles.basic.edit_btn',
            'mode' => 'modal',
            'group' => 'groupBtn',
            'router_params' => 
            array (
              'id' => '(role.id)',
            ),
          ),
          'admin_role_delete' => 
          array (
            'name' => 'admin.system.roles.basic.delete_submit_btn',
            'class' => 'role-delete js-delete-role',
            'group' => 'groupBtn',
            'mode' => 'none',
            'router_params' => 
            array (
              'id' => '(role.id)',
            ),
          ),
        ),
      ),
    ),
    'parent' => 'admin_system',
    'code' => 'admin_roles',
  ),
  'admin_role_manage' => 
  array (
    'name' => 'admin.system.roles.basic_tab',
    'disable' => true,
    'router_name' => 'admin_roles',
    'children' => 
    array (
      'admin_role_create' => 
      array (
        'name' => 'admin.system.roles.basic.create_btn',
        'mode' => 'modal',
        'group' => 'topBtn',
      ),
      'admin_role_edit' => 
      array (
        'name' => 'admin.system.roles.basic.edit_btn',
        'mode' => 'modal',
        'group' => 'groupBtn',
        'router_params' => 
        array (
          'id' => '(role.id)',
        ),
      ),
      'admin_role_delete' => 
      array (
        'name' => 'admin.system.roles.basic.delete_submit_btn',
        'class' => 'role-delete js-delete-role',
        'group' => 'groupBtn',
        'mode' => 'none',
        'router_params' => 
        array (
          'id' => '(role.id)',
        ),
      ),
    ),
    'parent' => 'admin_roles',
    'code' => 'admin_role_manage',
  ),
  'admin_role_create' => 
  array (
    'name' => 'admin.system.roles.basic.create_btn',
    'mode' => 'modal',
    'group' => 'topBtn',
    'parent' => 'admin_role_manage',
    'code' => 'admin_role_create',
  ),
  'admin_role_edit' => 
  array (
    'name' => 'admin.system.roles.basic.edit_btn',
    'mode' => 'modal',
    'group' => 'groupBtn',
    'router_params' => 
    array (
      'id' => '(role.id)',
    ),
    'parent' => 'admin_role_manage',
    'code' => 'admin_role_edit',
  ),
  'admin_role_delete' => 
  array (
    'name' => 'admin.system.roles.basic.delete_submit_btn',
    'class' => 'role-delete js-delete-role',
    'group' => 'groupBtn',
    'mode' => 'none',
    'router_params' => 
    array (
      'id' => '(role.id)',
    ),
    'parent' => 'admin_role_manage',
    'code' => 'admin_role_delete',
  ),
  'admin_setting_course_setting' => 
  array (
    'name' => 'admin.system.course_menu',
    'children' => 
    array (
      'admin_setting_course' => 
      array (
        'name' => 'admin.system.course.basic_tab',
        'disable' => true,
        'router_name' => 'admin_setting_course_setting',
      ),
      'admin_setting_questions_setting' => 
      array (
        'name' => 'admin.system.course.questions_tab',
        'disable' => true,
      ),
      'admin_setting_course_avatar' => 
      array (
        'name' => 'admin.system.course.avatar_tab',
        'disable' => true,
      ),
      'admin_classroom_setting' => 
      array (
        'name' => 'admin.system.course.classroom_tab',
        'disable' => true,
        'parent' => 'admin_setting_course_setting',
        'after' => 'admin_setting_live_course',
      ),
    ),
    'parent' => 'admin_system',
    'code' => 'admin_setting_course_setting',
  ),
  'admin_setting_course' => 
  array (
    'name' => 'admin.system.course.basic_tab',
    'disable' => true,
    'router_name' => 'admin_setting_course_setting',
    'parent' => 'admin_setting_course_setting',
    'code' => 'admin_setting_course',
  ),
  'admin_setting_questions_setting' => 
  array (
    'name' => 'admin.system.course.questions_tab',
    'disable' => true,
    'parent' => 'admin_setting_course_setting',
    'code' => 'admin_setting_questions_setting',
  ),
  'admin_setting_course_avatar' => 
  array (
    'name' => 'admin.system.course.avatar_tab',
    'disable' => true,
    'parent' => 'admin_setting_course_setting',
    'code' => 'admin_setting_course_avatar',
  ),
  'admin_classroom_setting' => 
  array (
    'name' => 'admin.system.course.classroom_tab',
    'disable' => true,
    'parent' => 'admin_setting_course_setting',
    'after' => 'admin_setting_live_course',
    'code' => 'admin_classroom_setting',
  ),
  'admin_setting_operation' => 
  array (
    'name' => 'admin.system.operation_menu',
    'children' => 
    array (
      'admin_article_setting' => 
      array (
        'name' => 'admin.system.operation.article_tab',
        'disable' => true,
      ),
      'admin_group_set' => 
      array (
        'name' => 'admin.system.operation.group_tab',
        'disable' => true,
      ),
      'admin_invite_set' => 
      array (
        'name' => 'admin.system.operation.invite_tab',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_system',
    'code' => 'admin_setting_operation',
  ),
  'admin_article_setting' => 
  array (
    'name' => 'admin.system.operation.article_tab',
    'disable' => true,
    'parent' => 'admin_setting_operation',
    'code' => 'admin_article_setting',
  ),
  'admin_group_set' => 
  array (
    'name' => 'admin.system.operation.group_tab',
    'disable' => true,
    'parent' => 'admin_setting_operation',
    'code' => 'admin_group_set',
  ),
  'admin_invite_set' => 
  array (
    'name' => 'admin.system.operation.invite_tab',
    'disable' => true,
    'parent' => 'admin_setting_operation',
    'code' => 'admin_invite_set',
  ),
  'admin_setting_finance' => 
  array (
    'name' => 'admin.system.finance_menu',
    'children' => 
    array (
      'admin_payment' => 
      array (
        'name' => 'admin.system.finance.payment_tab',
        'disable' => true,
        'router_name' => 'admin_setting_payment',
      ),
      'admin_coin_settings' => 
      array (
        'name' => 'admin.system.finance.coin_tab',
        'disable' => true,
        'router_name' => 'admin_coin_settings',
      ),
      'admin_setting_refund' => 
      array (
        'name' => 'admin.system.finance.refund_tab',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_system',
    'code' => 'admin_setting_finance',
  ),
  'admin_payment' => 
  array (
    'name' => 'admin.system.finance.payment_tab',
    'disable' => true,
    'router_name' => 'admin_setting_payment',
    'parent' => 'admin_setting_finance',
    'code' => 'admin_payment',
  ),
  'admin_coin_settings' => 
  array (
    'name' => 'admin.system.finance.coin_tab',
    'disable' => true,
    'router_name' => 'admin_coin_settings',
    'parent' => 'admin_setting_finance',
    'code' => 'admin_coin_settings',
  ),
  'admin_setting_refund' => 
  array (
    'name' => 'admin.system.finance.refund_tab',
    'disable' => true,
    'parent' => 'admin_setting_finance',
    'code' => 'admin_setting_refund',
  ),
  'admin_setting_mobile_iap_product' => 
  array (
    'name' => 'admin.system.mobile_iap_product_menu',
    'disable' => true,
    'visible' => '(setting(\'magic.enable_mobile_iap\', \'0\'))',
    'children' => 
    array (
      'admin_setting_mobile_iap_product_list' => 
      array (
        'name' => 'admin.system.mobile_iap_product.basic_tab',
        'router_name' => 'admin_setting_mobile_iap_product',
      ),
    ),
    'parent' => 'admin_system',
    'code' => 'admin_setting_mobile_iap_product',
  ),
  'admin_setting_mobile_iap_product_list' => 
  array (
    'name' => 'admin.system.mobile_iap_product.basic_tab',
    'router_name' => 'admin_setting_mobile_iap_product',
    'parent' => 'admin_setting_mobile_iap_product',
    'code' => 'admin_setting_mobile_iap_product_list',
  ),
  'admin_optimize' => 
  array (
    'name' => 'admin.system.optimize_menu',
    'group' => 2,
    'children' => 
    array (
      'admin_optimize_settings' => 
      array (
        'name' => 'admin.system.optimize.basic_tab',
        'disable' => true,
        'router_name' => 'admin_optimize',
      ),
    ),
    'parent' => 'admin_system',
    'code' => 'admin_optimize',
  ),
  'admin_optimize_settings' => 
  array (
    'name' => 'admin.system.optimize.basic_tab',
    'disable' => true,
    'router_name' => 'admin_optimize',
    'parent' => 'admin_optimize',
    'code' => 'admin_optimize_settings',
  ),
  'admin_setting_ip_blacklist' => 
  array (
    'name' => 'admin.system.ip_blacklist_menu',
    'group' => 2,
    'children' => 
    array (
      'admin_setting_ip_blacklist_manage' => 
      array (
        'name' => 'admin.system.ip_blacklist.basic_tab',
        'disable' => true,
        'router_name' => 'admin_setting_ip_blacklist',
      ),
    ),
    'parent' => 'admin_system',
    'code' => 'admin_setting_ip_blacklist',
  ),
  'admin_setting_ip_blacklist_manage' => 
  array (
    'name' => 'admin.system.ip_blacklist.basic_tab',
    'disable' => true,
    'router_name' => 'admin_setting_ip_blacklist',
    'parent' => 'admin_setting_ip_blacklist',
    'code' => 'admin_setting_ip_blacklist_manage',
  ),
  'admin_setting_post_num_rules' => 
  array (
    'name' => 'admin.system.post_num_rules_menu',
    'group' => 2,
    'children' => 
    array (
      'admin_setting_post_num_rules_settings' => 
      array (
        'name' => 'admin.system.post_num_rules.basic_tab',
        'disable' => true,
        'router_name' => 'admin_setting_post_num_rules',
      ),
    ),
    'parent' => 'admin_system',
    'code' => 'admin_setting_post_num_rules',
  ),
  'admin_setting_post_num_rules_settings' => 
  array (
    'name' => 'admin.system.post_num_rules.basic_tab',
    'disable' => true,
    'router_name' => 'admin_setting_post_num_rules',
    'parent' => 'admin_setting_post_num_rules',
    'code' => 'admin_setting_post_num_rules_settings',
  ),
  'admin_report_status' => 
  array (
    'name' => 'admin.system.report_status_menu',
    'group' => 2,
    'children' => 
    array (
      'admin_report_status_list' => 
      array (
        'name' => 'admin.system.report_status.basic_tab',
        'disable' => true,
        'router_name' => 'admin_report_status',
      ),
    ),
    'parent' => 'admin_system',
    'code' => 'admin_report_status',
  ),
  'admin_report_status_list' => 
  array (
    'name' => 'admin.system.report_status.basic_tab',
    'disable' => true,
    'router_name' => 'admin_report_status',
    'parent' => 'admin_report_status',
    'code' => 'admin_report_status_list',
  ),
  'admin_logs' => 
  array (
    'name' => 'admin.system.logs_menu',
    'group' => 2,
    'children' => 
    array (
      'admin_logs_query' => 
      array (
        'name' => 'admin.system.logs.logs_query_tab',
        'disable' => true,
        'router_name' => 'admin_logs',
      ),
      'admin_logs_prod' => 
      array (
        'name' => 'admin.system.logs.logs_prod_tab',
        'disable' => true,
      ),
    ),
    'parent' => 'admin_system',
    'code' => 'admin_logs',
  ),
  'admin_logs_query' => 
  array (
    'name' => 'admin.system.logs.logs_query_tab',
    'disable' => true,
    'router_name' => 'admin_logs',
    'parent' => 'admin_logs',
    'code' => 'admin_logs_query',
  ),
  'admin_logs_prod' => 
  array (
    'name' => 'admin.system.logs.logs_prod_tab',
    'disable' => true,
    'parent' => 'admin_logs',
    'code' => 'admin_logs_prod',
  ),
  'admin_org_manage' => 
  array (
    'name' => 'admin.system.org_menu',
    'parent' => 'admin_system',
    'group' => 2,
    'disable' => true,
    'visible' => false,
    'children' => 
    array (
      'admin_org' => 
      array (
        'name' => 'admin.system.org.basic_tab',
        'disable' => true,
      ),
    ),
    'code' => 'admin_org_manage',
  ),
  'admin_org' => 
  array (
    'name' => 'admin.system.org.basic_tab',
    'disable' => true,
    'parent' => 'admin_org_manage',
    'code' => 'admin_org',
  ),
  'admin_jobs_manage' => 
  array (
    'name' => '任务调度',
    'group' => 2,
    'visible' => false,
    'disable' => true,
    'children' => 
    array (
      'admin_jobs' => 
      array (
        'name' => '任务调度',
      ),
      'admin_job_logs' => 
      array (
        'name' => '任务日志',
      ),
      'admin_crontab' => 
      array (
        'name' => 'crontab管理',
      ),
    ),
    'parent' => 'admin_system',
    'code' => 'admin_jobs_manage',
  ),
  'admin_jobs' => 
  array (
    'name' => '任务调度',
    'parent' => 'admin_jobs_manage',
    'code' => 'admin_jobs',
  ),
  'admin_job_logs' => 
  array (
    'name' => '任务日志',
    'parent' => 'admin_jobs_manage',
    'code' => 'admin_job_logs',
  ),
  'admin_crontab' => 
  array (
    'name' => 'crontab管理',
    'parent' => 'admin_jobs_manage',
    'code' => 'admin_crontab',
  ),
  'admin_xapi_manage' => 
  array (
    'name' => 'xAPI',
    'group' => 2,
    'visible' => false,
    'disable' => true,
    'children' => 
    array (
      'admin_xapi_setting' => 
      array (
        'name' => 'xAPI',
      ),
      'admin_xapi_statement_list' => 
      array (
        'name' => 'Statements',
      ),
    ),
    'parent' => 'admin_system',
    'code' => 'admin_xapi_manage',
  ),
  'admin_xapi_setting' => 
  array (
    'name' => 'xAPI',
    'parent' => 'admin_xapi_manage',
    'code' => 'admin_xapi_setting',
  ),
  'admin_xapi_statement_list' => 
  array (
    'name' => 'Statements',
    'parent' => 'admin_xapi_manage',
    'code' => 'admin_xapi_statement_list',
  ),
  'admin_queue_menege' => 
  array (
    'name' => '队列',
    'group' => 2,
    'visible' => false,
    'disable' => true,
    'children' => 
    array (
      'admin_queue_failed_logs' => 
      array (
        'name' => '队列错误日志',
      ),
    ),
    'parent' => 'admin_system',
    'code' => 'admin_queue_menege',
  ),
  'admin_queue_failed_logs' => 
  array (
    'name' => '队列错误日志',
    'parent' => 'admin_queue_menege',
    'code' => 'admin_queue_failed_logs',
  ),
  'web' => 
  array (
    'name' => 'web.basic_menu',
    'parent' => NULL,
    'disable' => true,
    'children' => 
    array (
      'course_manage' => 
      array (
        'name' => 'web.course',
        'children' => 
        array (
          'course_manage_info' => 
          array (
            'name' => 'web.course.info_nav',
            'router_params' => 
            array (
              'id' => '(course.id)',
            ),
            'children' => 
            array (
              'course_manage_base' => 
              array (
                'name' => 'web.course.info.base_side_nav',
                'data' => 
                array (
                  'side_nav' => 'base',
                ),
                'router_params' => 
                array (
                  'id' => '(course.id)',
                ),
              ),
              'course_manage_detail' => 
              array (
                'name' => 'web.course.info.detail_side_nav',
                'data' => 
                array (
                  'side_nav' => 'detail',
                ),
                'router_params' => 
                array (
                  'id' => '(course.id)',
                ),
              ),
              'course_manage_picture' => 
              array (
                'name' => 'web.course.info.picture_side_nav',
                'data' => 
                array (
                  'side_nav' => 'picture',
                ),
                'router_params' => 
                array (
                  'id' => '(course.id)',
                ),
              ),
              'course_manage_lesson' => 
              array (
                'name' => 'web.course.info.lesson_side_nav',
                'data' => 
                array (
                  'side_nav' => 'lesson',
                ),
                'router_params' => 
                array (
                  'id' => '(course.id)',
                ),
              ),
              'live_course_manage_replay' => 
              array (
                'name' => 'web.course.info.live_replay_side_nav',
                'data' => 
                array (
                  'side_nav' => 'replay',
                ),
                'router_params' => 
                array (
                  'id' => '(course.id)',
                ),
              ),
              'course_manage_files' => 
              array (
                'name' => 'web.course.info.files_side_nav',
                'data' => 
                array (
                  'side_nav' => 'files',
                ),
                'router_params' => 
                array (
                  'id' => '(course.id)',
                ),
              ),
            ),
          ),
          'course_manage_setting' => 
          array (
            'name' => 'web.course.setting_nav',
            'children' => 
            array (
              'course_manage_price' => 
              array (
                'name' => 'web.course.setting.price_side_nav',
                'data' => 
                array (
                  'side_nav' => 'price',
                ),
                'router_params' => 
                array (
                  'id' => '(course.id)',
                ),
              ),
              'course_manage_teachers' => 
              array (
                'name' => 'web.course.setting.teachers_side_nav',
                'data' => 
                array (
                  'side_nav' => 'teachers',
                ),
                'router_params' => 
                array (
                  'id' => '(course.id)',
                ),
              ),
              'course_manage_students' => 
              array (
                'name' => 'web.course.setting.students_side_nav',
                'data' => 
                array (
                  'side_nav' => 'students',
                ),
                'router_params' => 
                array (
                  'id' => '(course.id)',
                ),
                'children' => 
                array (
                  'course_manage_student_create' => 
                  array (
                    'name' => 'web.course.setting.students.create_btn',
                  ),
                ),
              ),
            ),
          ),
          'course_manage_questions' => 
          array (
            'name' => 'web.course.questions_nav',
            'children' => 
            array (
              'course_manage_question' => 
              array (
                'name' => 'web.course.questions.question_side_nav',
                'data' => 
                array (
                  'side_nav' => 'question',
                ),
                'router_params' => 
                array (
                  'courseId' => '(course.id)',
                ),
              ),
              'course_manage_testpaper' => 
              array (
                'name' => 'web.course.questions.testpaper_side_nav',
                'data' => 
                array (
                  'side_nav' => 'testpaper',
                ),
                'router_params' => 
                array (
                  'courseId' => '(course.id)',
                ),
              ),
            ),
          ),
          'course_manange_operate' => 
          array (
            'name' => 'web.course.operate_nav',
            'children' => 
            array (
              'course_manage_data' => 
              array (
                'name' => 'web.course.operate.data_side_nav',
                'data' => 
                array (
                  'side_nav' => 'course_manage_data',
                ),
                'router_params' => 
                array (
                  'id' => '(course.id)',
                ),
              ),
              'course_manage_order' => 
              array (
                'name' => 'web.course.operate.order_side_nav',
                'data' => 
                array (
                  'side_nav' => 'course_manage_order',
                ),
                'router_params' => 
                array (
                  'id' => '(course.id)',
                ),
              ),
            ),
          ),
        ),
      ),
      'classroom_manage' => 
      array (
        'name' => 'web.classroom',
        'children' => 
        array (
          'classroom_manage_settings' => 
          array (
            'name' => 'web.classroom.setting_nav',
            'children' => 
            array (
              'classroom_manage_set_info' => 
              array (
                'name' => 'web.classroom.setting.base_side_nav',
                'data' => 
                array (
                  'side_nav' => 'base',
                ),
                'router_params' => 
                array (
                  'id' => '(classroom.id)',
                ),
              ),
              'classroom_manage_set_price' => 
              array (
                'name' => 'web.classroom.setting.price_side_nav',
                'data' => 
                array (
                  'side_nav' => 'price',
                ),
                'router_params' => 
                array (
                  'id' => '(classroom.id)',
                ),
              ),
              'classroom_manage_set_picture' => 
              array (
                'name' => 'web.classroom.setting.picture_side_nav',
                'data' => 
                array (
                  'side_nav' => 'picture',
                ),
                'router_params' => 
                array (
                  'id' => '(classroom.id)',
                ),
              ),
              'classroom_manage_service' => 
              array (
                'name' => 'web.classroom.setting.service_side_nav',
                'data' => 
                array (
                  'side_nav' => 'service',
                ),
                'router_params' => 
                array (
                  'id' => '(classroom.id)',
                ),
              ),
              'classroom_manage_headteacher' => 
              array (
                'name' => 'web.classroom.setting.headteacher_side_nav',
                'data' => 
                array (
                  'side_nav' => 'headTeacher',
                ),
                'router_params' => 
                array (
                  'id' => '(classroom.id)',
                ),
              ),
              'classroom_manage_teachers' => 
              array (
                'name' => 'web.classroom.setting.teachers_side_nav',
                'data' => 
                array (
                  'side_nav' => 'teachers',
                ),
                'router_params' => 
                array (
                  'id' => '(classroom.id)',
                ),
              ),
              'classroom_manage_assistants' => 
              array (
                'name' => 'web.classroom.setting.assistants_side_nav',
                'data' => 
                array (
                  'side_nav' => 'assistants',
                ),
                'router_params' => 
                array (
                  'id' => '(classroom.id)',
                ),
              ),
            ),
          ),
          'classroom_manage_content' => 
          array (
            'name' => 'web.classroom.content_nav',
            'children' => 
            array (
              'classroom_manage_courses' => 
              array (
                'name' => 'web.classroom.content.courses_side_nav',
                'visible' => '(canManage)',
                'data' => 
                array (
                  'side_nav' => 'courses',
                ),
                'router_params' => 
                array (
                  'id' => '(classroom.id)',
                ),
              ),
              'classroom_manage_students' => 
              array (
                'name' => 'web.classroom.content.students_side_nav',
                'visible' => '(canManage)',
                'data' => 
                array (
                  'side_nav' => 'students',
                ),
                'router_params' => 
                array (
                  'id' => '(classroom.id)',
                ),
              ),
              'classroom_manage_testpaper' => 
              array (
                'name' => 'web.classroom.content.testpaper_check_side_nav',
                'visible' => '(canHandle)',
                'data' => 
                array (
                  'side_nav' => 'testpaper-check',
                ),
                'router_params' => 
                array (
                  'id' => '(classroom.id)',
                  'status' => 'reviewing',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
    'code' => 'web',
  ),
  'course_manage' => 
  array (
    'name' => 'web.course',
    'children' => 
    array (
      'course_manage_info' => 
      array (
        'name' => 'web.course.info_nav',
        'router_params' => 
        array (
          'id' => '(course.id)',
        ),
        'children' => 
        array (
          'course_manage_base' => 
          array (
            'name' => 'web.course.info.base_side_nav',
            'data' => 
            array (
              'side_nav' => 'base',
            ),
            'router_params' => 
            array (
              'id' => '(course.id)',
            ),
          ),
          'course_manage_detail' => 
          array (
            'name' => 'web.course.info.detail_side_nav',
            'data' => 
            array (
              'side_nav' => 'detail',
            ),
            'router_params' => 
            array (
              'id' => '(course.id)',
            ),
          ),
          'course_manage_picture' => 
          array (
            'name' => 'web.course.info.picture_side_nav',
            'data' => 
            array (
              'side_nav' => 'picture',
            ),
            'router_params' => 
            array (
              'id' => '(course.id)',
            ),
          ),
          'course_manage_lesson' => 
          array (
            'name' => 'web.course.info.lesson_side_nav',
            'data' => 
            array (
              'side_nav' => 'lesson',
            ),
            'router_params' => 
            array (
              'id' => '(course.id)',
            ),
          ),
          'live_course_manage_replay' => 
          array (
            'name' => 'web.course.info.live_replay_side_nav',
            'data' => 
            array (
              'side_nav' => 'replay',
            ),
            'router_params' => 
            array (
              'id' => '(course.id)',
            ),
          ),
          'course_manage_files' => 
          array (
            'name' => 'web.course.info.files_side_nav',
            'data' => 
            array (
              'side_nav' => 'files',
            ),
            'router_params' => 
            array (
              'id' => '(course.id)',
            ),
          ),
        ),
      ),
      'course_manage_setting' => 
      array (
        'name' => 'web.course.setting_nav',
        'children' => 
        array (
          'course_manage_price' => 
          array (
            'name' => 'web.course.setting.price_side_nav',
            'data' => 
            array (
              'side_nav' => 'price',
            ),
            'router_params' => 
            array (
              'id' => '(course.id)',
            ),
          ),
          'course_manage_teachers' => 
          array (
            'name' => 'web.course.setting.teachers_side_nav',
            'data' => 
            array (
              'side_nav' => 'teachers',
            ),
            'router_params' => 
            array (
              'id' => '(course.id)',
            ),
          ),
          'course_manage_students' => 
          array (
            'name' => 'web.course.setting.students_side_nav',
            'data' => 
            array (
              'side_nav' => 'students',
            ),
            'router_params' => 
            array (
              'id' => '(course.id)',
            ),
            'children' => 
            array (
              'course_manage_student_create' => 
              array (
                'name' => 'web.course.setting.students.create_btn',
              ),
            ),
          ),
        ),
      ),
      'course_manage_questions' => 
      array (
        'name' => 'web.course.questions_nav',
        'children' => 
        array (
          'course_manage_question' => 
          array (
            'name' => 'web.course.questions.question_side_nav',
            'data' => 
            array (
              'side_nav' => 'question',
            ),
            'router_params' => 
            array (
              'courseId' => '(course.id)',
            ),
          ),
          'course_manage_testpaper' => 
          array (
            'name' => 'web.course.questions.testpaper_side_nav',
            'data' => 
            array (
              'side_nav' => 'testpaper',
            ),
            'router_params' => 
            array (
              'courseId' => '(course.id)',
            ),
          ),
        ),
      ),
      'course_manange_operate' => 
      array (
        'name' => 'web.course.operate_nav',
        'children' => 
        array (
          'course_manage_data' => 
          array (
            'name' => 'web.course.operate.data_side_nav',
            'data' => 
            array (
              'side_nav' => 'course_manage_data',
            ),
            'router_params' => 
            array (
              'id' => '(course.id)',
            ),
          ),
          'course_manage_order' => 
          array (
            'name' => 'web.course.operate.order_side_nav',
            'data' => 
            array (
              'side_nav' => 'course_manage_order',
            ),
            'router_params' => 
            array (
              'id' => '(course.id)',
            ),
          ),
        ),
      ),
    ),
    'parent' => 'web',
    'code' => 'course_manage',
  ),
  'course_manage_info' => 
  array (
    'name' => 'web.course.info_nav',
    'router_params' => 
    array (
      'id' => '(course.id)',
    ),
    'children' => 
    array (
      'course_manage_base' => 
      array (
        'name' => 'web.course.info.base_side_nav',
        'data' => 
        array (
          'side_nav' => 'base',
        ),
        'router_params' => 
        array (
          'id' => '(course.id)',
        ),
      ),
      'course_manage_detail' => 
      array (
        'name' => 'web.course.info.detail_side_nav',
        'data' => 
        array (
          'side_nav' => 'detail',
        ),
        'router_params' => 
        array (
          'id' => '(course.id)',
        ),
      ),
      'course_manage_picture' => 
      array (
        'name' => 'web.course.info.picture_side_nav',
        'data' => 
        array (
          'side_nav' => 'picture',
        ),
        'router_params' => 
        array (
          'id' => '(course.id)',
        ),
      ),
      'course_manage_lesson' => 
      array (
        'name' => 'web.course.info.lesson_side_nav',
        'data' => 
        array (
          'side_nav' => 'lesson',
        ),
        'router_params' => 
        array (
          'id' => '(course.id)',
        ),
      ),
      'live_course_manage_replay' => 
      array (
        'name' => 'web.course.info.live_replay_side_nav',
        'data' => 
        array (
          'side_nav' => 'replay',
        ),
        'router_params' => 
        array (
          'id' => '(course.id)',
        ),
      ),
      'course_manage_files' => 
      array (
        'name' => 'web.course.info.files_side_nav',
        'data' => 
        array (
          'side_nav' => 'files',
        ),
        'router_params' => 
        array (
          'id' => '(course.id)',
        ),
      ),
    ),
    'parent' => 'course_manage',
    'code' => 'course_manage_info',
  ),
  'course_manage_base' => 
  array (
    'name' => 'web.course.info.base_side_nav',
    'data' => 
    array (
      'side_nav' => 'base',
    ),
    'router_params' => 
    array (
      'id' => '(course.id)',
    ),
    'parent' => 'course_manage_info',
    'code' => 'course_manage_base',
  ),
  'course_manage_detail' => 
  array (
    'name' => 'web.course.info.detail_side_nav',
    'data' => 
    array (
      'side_nav' => 'detail',
    ),
    'router_params' => 
    array (
      'id' => '(course.id)',
    ),
    'parent' => 'course_manage_info',
    'code' => 'course_manage_detail',
  ),
  'course_manage_picture' => 
  array (
    'name' => 'web.course.info.picture_side_nav',
    'data' => 
    array (
      'side_nav' => 'picture',
    ),
    'router_params' => 
    array (
      'id' => '(course.id)',
    ),
    'parent' => 'course_manage_info',
    'code' => 'course_manage_picture',
  ),
  'course_manage_lesson' => 
  array (
    'name' => 'web.course.info.lesson_side_nav',
    'data' => 
    array (
      'side_nav' => 'lesson',
    ),
    'router_params' => 
    array (
      'id' => '(course.id)',
    ),
    'parent' => 'course_manage_info',
    'code' => 'course_manage_lesson',
  ),
  'live_course_manage_replay' => 
  array (
    'name' => 'web.course.info.live_replay_side_nav',
    'data' => 
    array (
      'side_nav' => 'replay',
    ),
    'router_params' => 
    array (
      'id' => '(course.id)',
    ),
    'parent' => 'course_manage_info',
    'code' => 'live_course_manage_replay',
  ),
  'course_manage_files' => 
  array (
    'name' => 'web.course.info.files_side_nav',
    'data' => 
    array (
      'side_nav' => 'files',
    ),
    'router_params' => 
    array (
      'id' => '(course.id)',
    ),
    'parent' => 'course_manage_info',
    'code' => 'course_manage_files',
  ),
  'course_manage_setting' => 
  array (
    'name' => 'web.course.setting_nav',
    'children' => 
    array (
      'course_manage_price' => 
      array (
        'name' => 'web.course.setting.price_side_nav',
        'data' => 
        array (
          'side_nav' => 'price',
        ),
        'router_params' => 
        array (
          'id' => '(course.id)',
        ),
      ),
      'course_manage_teachers' => 
      array (
        'name' => 'web.course.setting.teachers_side_nav',
        'data' => 
        array (
          'side_nav' => 'teachers',
        ),
        'router_params' => 
        array (
          'id' => '(course.id)',
        ),
      ),
      'course_manage_students' => 
      array (
        'name' => 'web.course.setting.students_side_nav',
        'data' => 
        array (
          'side_nav' => 'students',
        ),
        'router_params' => 
        array (
          'id' => '(course.id)',
        ),
        'children' => 
        array (
          'course_manage_student_create' => 
          array (
            'name' => 'web.course.setting.students.create_btn',
          ),
        ),
      ),
    ),
    'parent' => 'course_manage',
    'code' => 'course_manage_setting',
  ),
  'course_manage_price' => 
  array (
    'name' => 'web.course.setting.price_side_nav',
    'data' => 
    array (
      'side_nav' => 'price',
    ),
    'router_params' => 
    array (
      'id' => '(course.id)',
    ),
    'parent' => 'course_manage_setting',
    'code' => 'course_manage_price',
  ),
  'course_manage_teachers' => 
  array (
    'name' => 'web.course.setting.teachers_side_nav',
    'data' => 
    array (
      'side_nav' => 'teachers',
    ),
    'router_params' => 
    array (
      'id' => '(course.id)',
    ),
    'parent' => 'course_manage_setting',
    'code' => 'course_manage_teachers',
  ),
  'course_manage_students' => 
  array (
    'name' => 'web.course.setting.students_side_nav',
    'data' => 
    array (
      'side_nav' => 'students',
    ),
    'router_params' => 
    array (
      'id' => '(course.id)',
    ),
    'children' => 
    array (
      'course_manage_student_create' => 
      array (
        'name' => 'web.course.setting.students.create_btn',
      ),
    ),
    'parent' => 'course_manage_setting',
    'code' => 'course_manage_students',
  ),
  'course_manage_student_create' => 
  array (
    'name' => 'web.course.setting.students.create_btn',
    'parent' => 'course_manage_students',
    'code' => 'course_manage_student_create',
  ),
  'course_manage_questions' => 
  array (
    'name' => 'web.course.questions_nav',
    'children' => 
    array (
      'course_manage_question' => 
      array (
        'name' => 'web.course.questions.question_side_nav',
        'data' => 
        array (
          'side_nav' => 'question',
        ),
        'router_params' => 
        array (
          'courseId' => '(course.id)',
        ),
      ),
      'course_manage_testpaper' => 
      array (
        'name' => 'web.course.questions.testpaper_side_nav',
        'data' => 
        array (
          'side_nav' => 'testpaper',
        ),
        'router_params' => 
        array (
          'courseId' => '(course.id)',
        ),
      ),
    ),
    'parent' => 'course_manage',
    'code' => 'course_manage_questions',
  ),
  'course_manage_question' => 
  array (
    'name' => 'web.course.questions.question_side_nav',
    'data' => 
    array (
      'side_nav' => 'question',
    ),
    'router_params' => 
    array (
      'courseId' => '(course.id)',
    ),
    'parent' => 'course_manage_questions',
    'code' => 'course_manage_question',
  ),
  'course_manage_testpaper' => 
  array (
    'name' => 'web.course.questions.testpaper_side_nav',
    'data' => 
    array (
      'side_nav' => 'testpaper',
    ),
    'router_params' => 
    array (
      'courseId' => '(course.id)',
    ),
    'parent' => 'course_manage_questions',
    'code' => 'course_manage_testpaper',
  ),
  'course_manange_operate' => 
  array (
    'name' => 'web.course.operate_nav',
    'children' => 
    array (
      'course_manage_data' => 
      array (
        'name' => 'web.course.operate.data_side_nav',
        'data' => 
        array (
          'side_nav' => 'course_manage_data',
        ),
        'router_params' => 
        array (
          'id' => '(course.id)',
        ),
      ),
      'course_manage_order' => 
      array (
        'name' => 'web.course.operate.order_side_nav',
        'data' => 
        array (
          'side_nav' => 'course_manage_order',
        ),
        'router_params' => 
        array (
          'id' => '(course.id)',
        ),
      ),
    ),
    'parent' => 'course_manage',
    'code' => 'course_manange_operate',
  ),
  'course_manage_data' => 
  array (
    'name' => 'web.course.operate.data_side_nav',
    'data' => 
    array (
      'side_nav' => 'course_manage_data',
    ),
    'router_params' => 
    array (
      'id' => '(course.id)',
    ),
    'parent' => 'course_manange_operate',
    'code' => 'course_manage_data',
  ),
  'course_manage_order' => 
  array (
    'name' => 'web.course.operate.order_side_nav',
    'data' => 
    array (
      'side_nav' => 'course_manage_order',
    ),
    'router_params' => 
    array (
      'id' => '(course.id)',
    ),
    'parent' => 'course_manange_operate',
    'code' => 'course_manage_order',
  ),
  'classroom_manage' => 
  array (
    'name' => 'web.classroom',
    'children' => 
    array (
      'classroom_manage_settings' => 
      array (
        'name' => 'web.classroom.setting_nav',
        'children' => 
        array (
          'classroom_manage_set_info' => 
          array (
            'name' => 'web.classroom.setting.base_side_nav',
            'data' => 
            array (
              'side_nav' => 'base',
            ),
            'router_params' => 
            array (
              'id' => '(classroom.id)',
            ),
          ),
          'classroom_manage_set_price' => 
          array (
            'name' => 'web.classroom.setting.price_side_nav',
            'data' => 
            array (
              'side_nav' => 'price',
            ),
            'router_params' => 
            array (
              'id' => '(classroom.id)',
            ),
          ),
          'classroom_manage_set_picture' => 
          array (
            'name' => 'web.classroom.setting.picture_side_nav',
            'data' => 
            array (
              'side_nav' => 'picture',
            ),
            'router_params' => 
            array (
              'id' => '(classroom.id)',
            ),
          ),
          'classroom_manage_service' => 
          array (
            'name' => 'web.classroom.setting.service_side_nav',
            'data' => 
            array (
              'side_nav' => 'service',
            ),
            'router_params' => 
            array (
              'id' => '(classroom.id)',
            ),
          ),
          'classroom_manage_headteacher' => 
          array (
            'name' => 'web.classroom.setting.headteacher_side_nav',
            'data' => 
            array (
              'side_nav' => 'headTeacher',
            ),
            'router_params' => 
            array (
              'id' => '(classroom.id)',
            ),
          ),
          'classroom_manage_teachers' => 
          array (
            'name' => 'web.classroom.setting.teachers_side_nav',
            'data' => 
            array (
              'side_nav' => 'teachers',
            ),
            'router_params' => 
            array (
              'id' => '(classroom.id)',
            ),
          ),
          'classroom_manage_assistants' => 
          array (
            'name' => 'web.classroom.setting.assistants_side_nav',
            'data' => 
            array (
              'side_nav' => 'assistants',
            ),
            'router_params' => 
            array (
              'id' => '(classroom.id)',
            ),
          ),
        ),
      ),
      'classroom_manage_content' => 
      array (
        'name' => 'web.classroom.content_nav',
        'children' => 
        array (
          'classroom_manage_courses' => 
          array (
            'name' => 'web.classroom.content.courses_side_nav',
            'visible' => '(canManage)',
            'data' => 
            array (
              'side_nav' => 'courses',
            ),
            'router_params' => 
            array (
              'id' => '(classroom.id)',
            ),
          ),
          'classroom_manage_students' => 
          array (
            'name' => 'web.classroom.content.students_side_nav',
            'visible' => '(canManage)',
            'data' => 
            array (
              'side_nav' => 'students',
            ),
            'router_params' => 
            array (
              'id' => '(classroom.id)',
            ),
          ),
          'classroom_manage_testpaper' => 
          array (
            'name' => 'web.classroom.content.testpaper_check_side_nav',
            'visible' => '(canHandle)',
            'data' => 
            array (
              'side_nav' => 'testpaper-check',
            ),
            'router_params' => 
            array (
              'id' => '(classroom.id)',
              'status' => 'reviewing',
            ),
          ),
        ),
      ),
    ),
    'parent' => 'web',
    'code' => 'classroom_manage',
  ),
  'classroom_manage_settings' => 
  array (
    'name' => 'web.classroom.setting_nav',
    'children' => 
    array (
      'classroom_manage_set_info' => 
      array (
        'name' => 'web.classroom.setting.base_side_nav',
        'data' => 
        array (
          'side_nav' => 'base',
        ),
        'router_params' => 
        array (
          'id' => '(classroom.id)',
        ),
      ),
      'classroom_manage_set_price' => 
      array (
        'name' => 'web.classroom.setting.price_side_nav',
        'data' => 
        array (
          'side_nav' => 'price',
        ),
        'router_params' => 
        array (
          'id' => '(classroom.id)',
        ),
      ),
      'classroom_manage_set_picture' => 
      array (
        'name' => 'web.classroom.setting.picture_side_nav',
        'data' => 
        array (
          'side_nav' => 'picture',
        ),
        'router_params' => 
        array (
          'id' => '(classroom.id)',
        ),
      ),
      'classroom_manage_service' => 
      array (
        'name' => 'web.classroom.setting.service_side_nav',
        'data' => 
        array (
          'side_nav' => 'service',
        ),
        'router_params' => 
        array (
          'id' => '(classroom.id)',
        ),
      ),
      'classroom_manage_headteacher' => 
      array (
        'name' => 'web.classroom.setting.headteacher_side_nav',
        'data' => 
        array (
          'side_nav' => 'headTeacher',
        ),
        'router_params' => 
        array (
          'id' => '(classroom.id)',
        ),
      ),
      'classroom_manage_teachers' => 
      array (
        'name' => 'web.classroom.setting.teachers_side_nav',
        'data' => 
        array (
          'side_nav' => 'teachers',
        ),
        'router_params' => 
        array (
          'id' => '(classroom.id)',
        ),
      ),
      'classroom_manage_assistants' => 
      array (
        'name' => 'web.classroom.setting.assistants_side_nav',
        'data' => 
        array (
          'side_nav' => 'assistants',
        ),
        'router_params' => 
        array (
          'id' => '(classroom.id)',
        ),
      ),
    ),
    'parent' => 'classroom_manage',
    'code' => 'classroom_manage_settings',
  ),
  'classroom_manage_set_info' => 
  array (
    'name' => 'web.classroom.setting.base_side_nav',
    'data' => 
    array (
      'side_nav' => 'base',
    ),
    'router_params' => 
    array (
      'id' => '(classroom.id)',
    ),
    'parent' => 'classroom_manage_settings',
    'code' => 'classroom_manage_set_info',
  ),
  'classroom_manage_set_price' => 
  array (
    'name' => 'web.classroom.setting.price_side_nav',
    'data' => 
    array (
      'side_nav' => 'price',
    ),
    'router_params' => 
    array (
      'id' => '(classroom.id)',
    ),
    'parent' => 'classroom_manage_settings',
    'code' => 'classroom_manage_set_price',
  ),
  'classroom_manage_set_picture' => 
  array (
    'name' => 'web.classroom.setting.picture_side_nav',
    'data' => 
    array (
      'side_nav' => 'picture',
    ),
    'router_params' => 
    array (
      'id' => '(classroom.id)',
    ),
    'parent' => 'classroom_manage_settings',
    'code' => 'classroom_manage_set_picture',
  ),
  'classroom_manage_service' => 
  array (
    'name' => 'web.classroom.setting.service_side_nav',
    'data' => 
    array (
      'side_nav' => 'service',
    ),
    'router_params' => 
    array (
      'id' => '(classroom.id)',
    ),
    'parent' => 'classroom_manage_settings',
    'code' => 'classroom_manage_service',
  ),
  'classroom_manage_headteacher' => 
  array (
    'name' => 'web.classroom.setting.headteacher_side_nav',
    'data' => 
    array (
      'side_nav' => 'headTeacher',
    ),
    'router_params' => 
    array (
      'id' => '(classroom.id)',
    ),
    'parent' => 'classroom_manage_settings',
    'code' => 'classroom_manage_headteacher',
  ),
  'classroom_manage_teachers' => 
  array (
    'name' => 'web.classroom.setting.teachers_side_nav',
    'data' => 
    array (
      'side_nav' => 'teachers',
    ),
    'router_params' => 
    array (
      'id' => '(classroom.id)',
    ),
    'parent' => 'classroom_manage_settings',
    'code' => 'classroom_manage_teachers',
  ),
  'classroom_manage_assistants' => 
  array (
    'name' => 'web.classroom.setting.assistants_side_nav',
    'data' => 
    array (
      'side_nav' => 'assistants',
    ),
    'router_params' => 
    array (
      'id' => '(classroom.id)',
    ),
    'parent' => 'classroom_manage_settings',
    'code' => 'classroom_manage_assistants',
  ),
  'classroom_manage_content' => 
  array (
    'name' => 'web.classroom.content_nav',
    'children' => 
    array (
      'classroom_manage_courses' => 
      array (
        'name' => 'web.classroom.content.courses_side_nav',
        'visible' => '(canManage)',
        'data' => 
        array (
          'side_nav' => 'courses',
        ),
        'router_params' => 
        array (
          'id' => '(classroom.id)',
        ),
      ),
      'classroom_manage_students' => 
      array (
        'name' => 'web.classroom.content.students_side_nav',
        'visible' => '(canManage)',
        'data' => 
        array (
          'side_nav' => 'students',
        ),
        'router_params' => 
        array (
          'id' => '(classroom.id)',
        ),
      ),
      'classroom_manage_testpaper' => 
      array (
        'name' => 'web.classroom.content.testpaper_check_side_nav',
        'visible' => '(canHandle)',
        'data' => 
        array (
          'side_nav' => 'testpaper-check',
        ),
        'router_params' => 
        array (
          'id' => '(classroom.id)',
          'status' => 'reviewing',
        ),
      ),
    ),
    'parent' => 'classroom_manage',
    'code' => 'classroom_manage_content',
  ),
  'classroom_manage_courses' => 
  array (
    'name' => 'web.classroom.content.courses_side_nav',
    'visible' => '(canManage)',
    'data' => 
    array (
      'side_nav' => 'courses',
    ),
    'router_params' => 
    array (
      'id' => '(classroom.id)',
    ),
    'parent' => 'classroom_manage_content',
    'code' => 'classroom_manage_courses',
  ),
  'classroom_manage_students' => 
  array (
    'name' => 'web.classroom.content.students_side_nav',
    'visible' => '(canManage)',
    'data' => 
    array (
      'side_nav' => 'students',
    ),
    'router_params' => 
    array (
      'id' => '(classroom.id)',
    ),
    'parent' => 'classroom_manage_content',
    'code' => 'classroom_manage_students',
  ),
  'classroom_manage_testpaper' => 
  array (
    'name' => 'web.classroom.content.testpaper_check_side_nav',
    'visible' => '(canHandle)',
    'data' => 
    array (
      'side_nav' => 'testpaper-check',
    ),
    'router_params' => 
    array (
      'id' => '(classroom.id)',
      'status' => 'reviewing',
    ),
    'parent' => 'classroom_manage_content',
    'code' => 'classroom_manage_testpaper',
  ),
);