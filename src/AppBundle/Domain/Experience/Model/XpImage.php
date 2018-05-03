<?php
/**
 * Created by PhpStorm.
 * User: manu
 * Date: 03/05/18
 * Time: 14:57
 */

namespace AppBundle\Domain\Experience\Model;


class XpImage
{
    private $id;

    private $name;

    private $alt;

    /**
     *
     * @Assert\File(
     *     maxSize = "1024k",
     *     mimeTypes = {"image/jpg", "image/jpeg","image/gif","image/png" },
     *     mimeTypesMessage = "Extensions autorisées jpeg,jpg,gif,png",
     *     maxSizeMessage = "Merci d'uploader un fichier inférieur ou à égal à 1000k"
     * )
     */
    private $file;


    public function getFile()
    {
        return $this->file;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }


    public function upload()
    {
        if(null === $this->file)
        {
            return;
        }
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
        $this->image=$this->file->getClientOriginalName();

    }

    public function getUploadDir()
    {
        return "uploads/blog/post";
    }


    public function getWebPath()
    {
        if(null === $this->image)
        {
            return null;
        }

        return $this->getUploadDir().'/'.$this->image;
    }

    public function getUploadRootDir()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir();

    }


}