<?php
namespace Rudak\Bundle\DisclaimerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Rudak\Bundle\DisclaimerBundle\Entity\DisclaimerData;

class LoadDisclaimerData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $disclaimer = new DisclaimerData();

        $disclaimer->setLatestUpdate(new \Datetime());
        $disclaimer->setCnil(false);
        $disclaimer->setCnilNumber('123456789');
        $disclaimer->setEditorEmail('editor@email.com');
        $disclaimer->setEditorManager('editorManager');
        $disclaimer->setHoster('hoster');
        $disclaimer->setHosterAddress('hoster address');
        $disclaimer->setOwnerName('owner name');
        $disclaimer->setOwnerAddress('owner address');
        $disclaimer->setOwnerCompanyName('owner company name');
        $disclaimer->setOwnerStatus('owner status director');
        $disclaimer->setSiteCreatorAgency('site creator agency');
        $disclaimer->setSiteCreatorName('site creator name');
        $disclaimer->setSiteCreatorUrl('www.site-creator-url.com');
        $disclaimer->setSiteUrl('www.site-url.com');
        $disclaimer->setId(1);
        $disclaimer->setWebmasterName('webmaster Name');

        $manager->persist($disclaimer);
        $manager->flush();
    }


    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1591;
    }
}