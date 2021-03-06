<?php

namespace ApiBundle\Api\Resource\Page;

use ApiBundle\Api\Resource\Course\CourseFilter;
use ApiBundle\Api\Resource\Classroom\ClassroomFilter;
use ApiBundle\Api\Resource\Coupon\CouponFilter;
use VipPlugin\Api\Resource\VipLevel\VipLevelFilter;
use ApiBundle\Api\Resource\Filter;

class PageDiscoveryFilter extends Filter
{
    protected $publicFields = array('type', 'data', 'moduleType');

    protected function publicFields(&$data)
    {
        if ('course_list' == $data['type']) {
            $courseFilter = new CourseFilter();
            $courseFilter->setMode(Filter::PUBLIC_MODE);
            foreach ($data['data']['items'] as &$course) {
                $courseFilter->filter($course);
            }
        }

        if ('classroom_list' == $data['type']) {
            $classroomFilter = new ClassroomFilter();
            $classroomFilter->setMode(Filter::PUBLIC_MODE);
            foreach ($data['data']['items'] as &$classroom) {
                $classroomFilter->filter($classroom);
            }
        }

        $vipLevelFilter = null;
        if ('vip' == $data['type']) {
            $vipLevelFilter = new VipLevelFilter();
            $vipLevelFilter->setMode(Filter::PUBLIC_MODE);
            foreach ($data['data']['items'] as &$vipLevel) {
                $vipLevelFilter->filter($vipLevel);
            }
        }

        if ('coupon' == $data['type']) {
            $couponFilter = new CouponFilter();
            $couponFilter->setMode(Filter::PUBLIC_MODE);
            foreach ($data['data']['items'] as &$couponBatch) {
                if ('vip' == $couponBatch['targetType'] && !empty($couponBatch['target'])) {
                    $vipLevelFilter = empty($vipLevelFilter) ? new VipLevelFilter() : $vipLevelFilter;
                    $vipLevelFilter->setMode(Filter::PUBLIC_MODE);
                    $vipLevelFilter->filter($couponBatch['target']);
                }
                if (!empty($couponBatch['currentUserCoupon'])) {
                    $couponFilter->filter($couponBatch['currentUserCoupon']);
                }
            }
        }
    }
}
