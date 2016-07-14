<?php
/**
 * Created by PhpStorm.
 * User: laurentsmits
 * Date: 6/14/16
 * Time: 16:05
 */

namespace OBN\Api\NewsBundle\EntityListener;


use Doctrine\ORM\Event\LifecycleEventArgs;
use OBN\Api\NewsBundle\Entity\NewsMedia;
use OBN\AppBundle\Media\MediaManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

class NewsMediaListener
{
    protected $container;

    /**
     * NewsMediaListener constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * @param NewsMedia $newsMedia
     * @param LifecycleEventArgs $args
     * @return View
     * @internal param News $news
     */
    public function preRemove(NewsMedia $newsMedia, LifecycleEventArgs $args)
    {
        // Delete uploaded files to AWS obn-medias
        $mediaManager = new MediaManager($this->container);
        $mediaManager->deleteMedia($newsMedia);

        // Delete video files if exist
        $mediaManager->deleteVideo($newsMedia);

        // Delete video thumbnail if exist
        $mediaManager->deleteVideoThumbnail($newsMedia);
    }
}